import time
import shutil
import os
import re
from bs4 import BeautifulSoup
from PyPDF2 import PdfReader
from lxml.html.clean import Cleaner

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
            if anchor_text and anchor_text != href:
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
        Rule(LinkExtractor(deny=(r'(?i)forum',)), callback='parse_item', follow=True),
    )
    custom_settings = {
        'CLOSESPIDER_PAGECOUNT': 50,  # Default value
        'LOG_LEVEL': 'ERROR',
        'COOKIES_ENABLED': False,
        'DOWNLOAD_DELAY': 1,
        'CONCURRENT_REQUESTS': 1,
        'TELNETCONSOLE_ENABLED': False,
        'HTTPCACHE_ENABLED': False
    }

    def __init__(self, *args, start_urls=None, allowed_domains=None, max_pages=50, **kwargs):
        super().__init__(*args, **kwargs)
        if start_urls:
            self.start_urls = start_urls
        if allowed_domains:
            self.allowed_domains = allowed_domains
        self.custom_settings['CLOSESPIDER_PAGECOUNT'] = max_pages
        print(f"Spider initialized with {max_pages} pages limit")

    def parse_item(self, response):
        try:
            # Save the scraped page to the temporary_files folder.
            folder = 'temporary_files'
            if not os.path.exists(folder):
                os.makedirs(folder)
            # Create a safe filename from the URL.
            filename = re.sub(r'\W+', '_', response.url) + ".html"
            filepath = os.path.join(folder, filename)
            with open(filepath, 'wb') as f:
                f.write(response.body)
            self.logger.info("Saved file %s", filepath)
        except Exception as e:
            self.logger.error(f"Error saving file: {e}")

class Scraper:
    _process = None  # Class variable to store the crawler process

    def __init__(self, start_urls=None, allowed_domains=None, force_update=False, max_pages=50):
        self.custom_start_urls = start_urls
        self.custom_allowed_domains = allowed_domains
        self.force_update = force_update
        self.max_pages = max_pages
        self.website_name = allowed_domains[0] if allowed_domains else "website"
        self.Combiner = Combiner()
        self.settings = get_project_settings()
        
        # Disable telnet console and set custom port range
        self.settings.set('TELNETCONSOLE_ENABLED', False)
        self.settings.set('HTTPCACHE_ENABLED', False)
        self.settings.set('LOG_LEVEL', 'ERROR')
        self.settings.set('COOKIES_ENABLED', False)
        self.settings.set('DOWNLOAD_DELAY', 1)
        self.settings.set('CONCURRENT_REQUESTS', 1)

    def run_spider(self):
        if Scraper._process is None:
            Scraper._process = CrawlerProcess(self.settings)
        
        try:
            # Create a new spider instance
            spider = CustomFolderSpider(
                start_urls=self.custom_start_urls,
                allowed_domains=self.custom_allowed_domains,
                max_pages=self.max_pages
            )
            
            # Add the spider to the process
            Scraper._process.crawl(spider)
            
            # Start the process
            Scraper._process.start()
            
            # Stop the process after it's done
            Scraper._process.stop()
            
        except Exception as e:
            print(f"Error running spider: {e}")
            # Reset the process if there's an error
            Scraper._process = None
            raise

    def scrape_website(self):
        """
        Scrape the website, combine the text from saved files (including separating out blog pages if needed),
        and return the output.
        """
        output_file = f"texts/{self.website_name}_total.txt"
        if os.path.exists(output_file) and not self.force_update:
            print(f"Output file '{output_file}' already exists. Skipping scraping, loading old file.")
            with open(output_file, 'r', encoding='utf-8') as f:
                content = f.read()
            return content

        # Remove and recreate the temporary_files directory.
        if os.path.exists('temporary_files'):
            shutil.rmtree('temporary_files')
        os.makedirs('temporary_files', exist_ok=True)

        try:
            print(f"Starting spider for {self.website_name} with {self.max_pages} pages limit...")
            self.run_spider()
            
            if not os.path.exists('temporary_files') or not os.listdir('temporary_files'):
                print("Warning: No files were scraped")
                return ""
                
            source_folders = self.move_folders()

            # Combine text from all folders (both non-blog and blog pages)
            self.Combiner.combine_text_from_multiple_folders(source_folders, output_file,
                                                           filter_patterns_enabled=None,
                                                           remove_duplicates_enabled=None,
                                                           merge_lines_enabled=None,
                                                           add_php=None)

            time.sleep(1)

            if not os.path.exists(output_file):
                print("Warning: No output file was created")
                return ""

            with open(output_file, 'r', encoding='utf-8') as f:
                content = f.read()

            if not content:
                print("Warning: Output file is empty")
                return ""

            return content
        except Exception as e:
            print(f"Error during scraping: {e}")
            return ""

    def move_folders(self):
        """
        Move all files from the 'temporary_files' directory into destination folders.
        Blog pages (detected by 'blog' in the filename) are moved to a separate folder,
        unless the original website name already contains 'blog'.
        Returns a list of destination folders.
        """
        source_dir = 'temporary_files'
        if not os.path.exists(source_dir):
            print(f"Source directory '{source_dir}' does not exist")
            return [source_dir]

        dest_nonblog = os.path.join("scraped", self.website_name)
        if not os.path.exists(dest_nonblog):
            os.makedirs(dest_nonblog, exist_ok=True)

        # Prepare a folder for blog pages if needed.
        if self.website_name != self.website_name + "_blog":
            dest_blog = os.path.join("scraped", self.website_name + "_blog")
            if not os.path.exists(dest_blog):
                os.makedirs(dest_blog, exist_ok=True)
        else:
            dest_blog = dest_nonblog

        for item in os.listdir(source_dir):
            source_path = os.path.join(source_dir, item)
            # If the file name (converted from URL) contains "blog", move it to the blog folder.
            if "blog" in item.lower():
                destination_path = os.path.join(dest_blog, item)
                dest_used = dest_blog
            else:
                destination_path = os.path.join(dest_nonblog, item)
                dest_used = dest_nonblog
            if os.path.exists(source_path):
                shutil.move(source_path, destination_path)
                print(f"Moved {item} to {dest_used}")

        # Remove the now-empty temporary_files directory.
        if os.path.exists(source_dir) and not os.listdir(source_dir):
            os.rmdir(source_dir)
            print(f"Removed empty directory: {source_dir}")

        # Return a list of folders from which to combine text.
        if dest_blog != dest_nonblog:
            return [dest_nonblog, dest_blog]
        else:
            return [dest_nonblog]


if __name__ == "__main__":
    # Initialize the scraper with the desired start URL and allowed domain.
    # Set max_pages to limit the number of pages to scrape (default is 50)
    scraper = Scraper(['https://accelerationrobotics.com/'], ['accelerationrobotics.com'], max_pages=100)
    output = scraper.scrape_website()
    print(output)
