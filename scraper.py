import time
import shutil
import os
import re
from bs4 import BeautifulSoup
from PyPDF2 import PdfReader
from lxml.html.clean import Cleaner
import subprocess
import sys

import scrapy
from scrapy.linkextractors import LinkExtractor
from scrapy.spiders import CrawlSpider, Rule
from scrapy.crawler import CrawlerProcess
from scrapy.utils.project import get_project_settings


class Combiner:
    # Default values
    SOURCE_FOLDER = "accelerationrobotics.com"  # (not used if overridden)
    OUTPUT_FILE = "tutorial/output.txt"
    FILTER_PATTERNS_ENABLED = True
    REMOVE_DUPLICATES_ENABLED = True
    MERGE_LINES_ENABLED = True
    ADD_PHP = False

    @staticmethod
    def remove_consecutive_duplicates(text):
        """Remove consecutive duplicate lines."""
        lines = text.splitlines()
        deduped = []
        for line in lines:
            if not deduped or deduped[-1] != line:
                deduped.append(line)
        return "\n".join(deduped)

    @staticmethod
    def filter_repetitive_patterns(text, patterns=None):
        """Filter out lines that contain known repetitive patterns."""
        if patterns is None:
            patterns = [
                'ROBOTCORE®', 'RPU', 'ROS 2', 'RTPS', 'UDP/IP',
                'Perception', 'Transform', 'Framework', 'Cloud',
                'ROBOTPERF®', 'Services'
            ]
        lines = text.splitlines()
        filtered = [line for line in lines if not any(pat in line for pat in patterns)]
        return "\n".join(filtered)

    @staticmethod
    def merge_incomplete_lines(text):
        """Merge lines that appear to be split in the middle of a sentence."""
        lines = text.splitlines()
        merged_lines = []
        buffer = ""
        for line in lines:
            if buffer and re.search(r'[.!?]$', buffer):
                merged_lines.append(buffer)
                buffer = line
            else:
                if buffer:
                    buffer += " " + line
                else:
                    buffer = line
        if buffer:
            merged_lines.append(buffer)
        return "\n".join(merged_lines)

    @staticmethod
    def clean_text(text, filter_patterns_enabled=True, remove_duplicates_enabled=True, merge_lines_enabled=True):
        text = text.replace('\r\n', '\n').replace('\r', '\n')
        text = re.sub(r'[ \t]+', ' ', text)
        text = re.sub(r'\n\s*\n', '\n\n', text)
        lines = [line.strip() for line in text.splitlines() if line.strip()]
        cleaned = "\n".join(lines)

        if filter_patterns_enabled:
            cleaned = Combiner.filter_repetitive_patterns(cleaned)
        if remove_duplicates_enabled:
            cleaned = Combiner.remove_consecutive_duplicates(cleaned)
        if merge_lines_enabled:
            cleaned = Combiner.merge_incomplete_lines(cleaned)
        return cleaned

    @staticmethod
    def strip_php(content):
        """Remove PHP code blocks."""
        return re.sub(r'<\?php.*?\?>', '', content, flags=re.DOTALL)

    @staticmethod
    def get_main_content(soup):
        """
        Attempt to locate the main content in the HTML.
        Prefer the <main> or <article> tags. If not found, remove common boilerplate elements.
        """
        main = soup.find('main')
        if main:
            return main
        article = soup.find('article')
        if article:
            return article
        # Fallback: remove common non-content elements from the body.
        if soup.body:
            for tag in soup.body.find_all(['nav', 'header', 'footer', 'aside', 'form']):
                tag.decompose()
            return soup.body
        return soup

    @classmethod
    def extract_text_from_html_file(cls, filepath, add_php=False, filter_patterns_enabled=True,
                                    remove_duplicates_enabled=True, merge_lines_enabled=True):
        try:
            with open(filepath, 'r', encoding='utf-8') as file:
                content = file.read()
        except Exception as e:
            print(f"Could not read {filepath}: {e}")
            return ""

        if not add_php:
            content = cls.strip_php(content)

        # Clean the HTML to remove scripts, styles, and comments.
        cleaner = Cleaner(style=True, scripts=True, comments=True, javascript=True,
                          page_structure=False, safe_attrs_only=False)
        cleaned_content = cleaner.clean_html(content)

        soup = BeautifulSoup(cleaned_content, 'html.parser')

        # Extract only the main content from the page.
        main_content = cls.get_main_content(soup)
        text = main_content.get_text(separator='\n', strip=True)

        # Extract links only from the main content.
        links = []
        for a in main_content.find_all('a', href=True):
            href = a.get('href')
            anchor_text = a.get_text(strip=True)
            if (anchor_text and anchor_text != href):
                links.append(f"{anchor_text} -> {href}")
            else:
                links.append(href)
        if links:
            links_text = "\n\nLinks:\n" + "\n".join(links)
            text += links_text

        return cls.clean_text(text, filter_patterns_enabled, remove_duplicates_enabled, merge_lines_enabled)

    @classmethod
    def extract_text_from_pdf_file(cls, filepath, filter_patterns_enabled=True,
                                   remove_duplicates_enabled=True, merge_lines_enabled=True):
        try:
            reader = PdfReader(filepath)
            text_parts = []
            for page in reader.pages:
                page_text = page.extract_text()
                if page_text:
                    text_parts.append(page_text)
            combined = "\n".join(text_parts)
            return cls.clean_text(combined, filter_patterns_enabled, remove_duplicates_enabled, merge_lines_enabled)
        except Exception as e:
            print(f"Could not extract text from {filepath}: {e}")
            return ""

    @staticmethod
    def remove_common_blocks_across_pages(file_texts):
        """
        Given a list of (header, text) tuples from different pages,
        remove repeated blocks (e.g. common privacy policy paragraphs) from all pages except their first occurrence.
        Here we split the text into paragraphs based on double newlines.
        """
        global_seen = set()
        filtered_texts = []
        for header, text in file_texts:
            paragraphs = text.split('\n\n')
            filtered_paragraphs = []
            for paragraph in paragraphs:
                normalized = ' '.join(paragraph.strip().split())
                # If this paragraph has been seen on another page, skip it.
                if normalized in global_seen:
                    continue
                global_seen.add(normalized)
                filtered_paragraphs.append(paragraph)
            # Reassemble the text with its header.
            combined = header + "\n" + "\n\n".join(filtered_paragraphs)
            filtered_texts.append(combined)
        return filtered_texts

    @classmethod
    def combine_text_from_multiple_folders(cls, source_folders, output_file, filter_patterns_enabled=None,
                                           remove_duplicates_enabled=None, merge_lines_enabled=None, add_php=None):
        """
        Combine text from multiple source folders (e.g. main and blog) into one output file.
        """
        filter_patterns_enabled = filter_patterns_enabled if filter_patterns_enabled is not None else cls.FILTER_PATTERNS_ENABLED
        remove_duplicates_enabled = remove_duplicates_enabled if remove_duplicates_enabled is not None else cls.REMOVE_DUPLICATES_ENABLED
        merge_lines_enabled = merge_lines_enabled if merge_lines_enabled is not None else cls.MERGE_LINES_ENABLED
        add_php = add_php if add_php is not None else cls.ADD_PHP

        collected_texts = []
        for source_folder in source_folders:
            for root, _, files in os.walk(source_folder):
                for filename in files:
                    ext = filename.lower().rsplit('.', 1)[-1] if '.' in filename else ''
                    filepath = os.path.join(root, filename)
                    print(f"Processing: {filepath}")
                    text = ""
                    if ext in ['html', 'htm', 'php']:
                        text = cls.extract_text_from_html_file(
                            filepath,
                            add_php=add_php,
                            filter_patterns_enabled=filter_patterns_enabled,
                            remove_duplicates_enabled=remove_duplicates_enabled,
                            merge_lines_enabled=merge_lines_enabled
                        )
                    elif ext == 'pdf':
                        text = cls.extract_text_from_pdf_file(
                            filepath,
                            filter_patterns_enabled=filter_patterns_enabled,
                            remove_duplicates_enabled=remove_duplicates_enabled,
                            merge_lines_enabled=merge_lines_enabled
                        )
                    else:
                        print(f"Skipping unsupported file type: {filepath}")
                        continue

                    if text:
                        header = f"--- Text from {filepath} ---"
                        collected_texts.append((header, text))

        # Remove blocks that are common across pages.
        filtered_texts = cls.remove_common_blocks_across_pages(collected_texts)

        try:
            with open(output_file, 'w', encoding='utf-8') as out:
                out.write("\n\n".join(filtered_texts))
            print(f"\nCombined text saved to: {output_file}")
        except Exception as e:
            print(f"Failed to write output file {output_file}: {e}")


class CustomFolderSpider(CrawlSpider):
    name = 'custom_folder'
    allowed_domains = None  # Will be set in __init__
    start_urls = None      # Will be set in __init__
    rules = (
        Rule(LinkExtractor(), callback='parse_item', follow=True),
    )
    
    def __init__(self, *args, start_urls=None, allowed_domains=None, max_pages=50, **kwargs):
        super().__init__(*args, **kwargs)
        self.start_urls = start_urls or []
        self.allowed_domains = allowed_domains or []
        self.max_pages = max_pages
        self.pages_scraped = 0
        print(f"Spider initialized with: max_pages={max_pages}, start_urls={start_urls}, allowed_domains={allowed_domains}")

    def parse_item(self, response):
        try:
            self.pages_scraped += 1
            if self.pages_scraped > self.max_pages:
                print(f"Page limit ({self.max_pages}) reached")
                return

            # Save the scraped page to the temporary_files folder.
            folder = 'temporary_files'
            if not os.path.exists(folder):
                os.makedirs(folder)
                
            # Create a safe filename from the URL.
            filename = re.sub(r'\W+', '_', response.url) + ".html"
            filepath = os.path.join(folder, filename)
            with open(filepath, 'wb') as f:
                f.write(response.body)
            print(f"Saved page {self.pages_scraped}/{self.max_pages}: {response.url}")
            
        except Exception as e:
            print(f"Error saving file: {str(e)}")


class Scraper:
    def __init__(self, start_urls=None, allowed_domains=None, force_update=False, max_pages=50):
        if not start_urls:
            raise ValueError("start_urls cannot be None")
        if not allowed_domains:
            raise ValueError("allowed_domains cannot be None")

        self.custom_start_urls = start_urls
        self.custom_allowed_domains = allowed_domains
        self.force_update = force_update
        self.max_pages = max_pages
        self.website_name = allowed_domains[0] if allowed_domains else "website"
        self.Combiner = Combiner()
        
        # Ensure the output directory exists
        os.makedirs('texts', exist_ok=True)

    def scrape_website(self):
        """
        Main method to scrape a website:
        1. Run the spider to crawl and save content
        2. Combine all scraped content into a single text
        3. Clean up temporary files
        4. Return the combined text
        """
        # Create temporary folder if it doesn't exist
        temp_folder = 'temporary_files'
        if not os.path.exists(temp_folder):
            os.makedirs(temp_folder)
        
        # Clear any previous files
        if self.force_update and os.path.exists(temp_folder):
            for item in os.listdir(temp_folder):
                item_path = os.path.join(temp_folder, item)
                if os.path.isfile(item_path):
                    os.unlink(item_path)
                elif os.path.isdir(item_path):
                    shutil.rmtree(item_path)
        
        # Run spider to download website content
        self.run_spider_subprocess()
        
        # Combine text from all downloaded files
        output_file = os.path.join('texts', f"{self.website_name}.txt")
        domain_folder = os.path.join(temp_folder, self.website_name)
        
        # If the domain-specific folder exists, use it
        if os.path.exists(domain_folder):
            source_folders = [domain_folder]
        else:
            # Otherwise use the whole temporary_files directory
            source_folders = [temp_folder]
        
        # Extract and combine text from all files
        self.Combiner.combine_text_from_multiple_folders(
            source_folders=source_folders,
            output_file=output_file,
            filter_patterns_enabled=True,
            remove_duplicates_enabled=True,
            merge_lines_enabled=True
        )
        
        # Read the combined text file
        try:
            with open(output_file, 'r', encoding='utf-8') as file:
                content = file.read()
            return content
        except Exception as e:
            print(f"Error reading combined output file: {e}")
            return ""

    def run_spider_subprocess(self):
        """
        Runs the spider in a separate process using subprocess to avoid ReactorNotRestartable error
        """
        # Create spider settings file if it doesn't exist
        settings_dir = os.path.join(os.path.dirname(__file__), 'spider_settings')
        os.makedirs(settings_dir, exist_ok=True)
        
        # Create a settings file for this specific spider run
        settings_file = os.path.join(settings_dir, f"{self.website_name}_settings.py")
        with open(settings_file, 'w') as f:
            f.write(f"""
# Settings for {self.website_name} spider
START_URLS = {repr(self.custom_start_urls)}
ALLOWED_DOMAINS = {repr(self.custom_allowed_domains)}
MAX_PAGES = {self.max_pages}
""")
        
        # Create a temporary spider runner script
        runner_script = os.path.join(settings_dir, f"{self.website_name}_runner.py")
        with open(runner_script, 'w') as f:
            f.write("""
import os
import sys
import importlib.util

# Add parent directory to path
parent_dir = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
sys.path.insert(0, parent_dir)

# Import settings
settings_file = sys.argv[1]
spec = importlib.util.spec_from_file_location("spider_settings", settings_file)
settings = importlib.util.module_from_spec(spec)
spec.loader.exec_module(settings)

# Import the CustomFolderSpider class directly from the script
from spiders.testing import CustomFolderSpider
from scrapy.crawler import CrawlerProcess
from scrapy.utils.project import get_project_settings

# Configure settings
crawler_settings = get_project_settings()
crawler_settings.update({
    'ROBOTSTXT_OBEY': False,
    'LOG_LEVEL': 'INFO',
    'COOKIES_ENABLED': False,
    'DOWNLOAD_DELAY': 1,
    'CONCURRENT_REQUESTS': 1,
    'CLOSESPIDER_PAGECOUNT': settings.MAX_PAGES,
    'CLOSESPIDER_TIMEOUT': 180,
    'RETRY_TIMES': 3,
    'DOWNLOAD_TIMEOUT': 30,
    'USER_AGENT': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
})

# Run the spider
process = CrawlerProcess(crawler_settings)
process.crawl(
    CustomFolderSpider,
    start_urls=settings.START_URLS,
    allowed_domains=settings.ALLOWED_DOMAINS,
    max_pages=settings.MAX_PAGES
)
process.start()
""")
        
        # Run the spider in a separate process
        print(f"Starting subprocess for {self.website_name}...")
        try:
            subprocess.run([sys.executable, runner_script, settings_file], check=True)
            print(f"Subprocess finished for {self.website_name}")
        except subprocess.CalledProcessError as e:
            print(f"Subprocess error for {self.website_name}: {e}")
            print("Falling back to direct")
