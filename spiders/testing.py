import re
import scrapy
from pathlib import Path
from urllib.parse import urlparse
import mimetypes
import logging
from scrapy.linkextractors import LinkExtractor
from scrapy.spiders import CrawlSpider, Rule
import time

# Configure logging
logging.basicConfig(level=logging.DEBUG)
logger = logging.getLogger(__name__)

class CustomFolderSpider(CrawlSpider):
    name = "website"
    custom_settings = {
        'CLOSESPIDER_PAGECOUNT': 50,  # Default value, will be updated in __init__
        'HTTPERROR_ALLOW_ALL': True,  # Allow processing of all HTTP responses
        'DOWNLOAD_TIMEOUT': 30,       # Timeout in seconds
    }
    
    rules = (
        Rule(LinkExtractor(), callback='parse_item', follow=True),
    )

    def __init__(self, start_urls=None, allowed_domains=None, max_pages=50, *args, **kwargs):
        super().__init__(*args, **kwargs)
        # Update the class attribute with the instance-specific value
        self.__class__.custom_settings['CLOSESPIDER_PAGECOUNT'] = max_pages
        # Accept comma-separated strings or lists
        if isinstance(start_urls, str):
            self.start_urls = [url.strip() for url in start_urls.split(',') if url.strip()]
        else:
            self.start_urls = start_urls or []
        if isinstance(allowed_domains, str):
            self.allowed_domains = [domain.strip() for domain in allowed_domains.split(',') if domain.strip()]
        else:
            self.allowed_domains = allowed_domains or []
        
        logger.info(f"Spider initialized with: start_urls={self.start_urls}, allowed_domains={self.allowed_domains}, max_pages={max_pages}")

    def start_requests(self):
        logger.info(f"Starting requests for URLs: {self.start_urls}")
        for url in self.start_urls:
            # Add some randomness to avoid being detected as a bot
            yield scrapy.Request(
                url=url, 
                callback=self.parse_item,
                errback=self.handle_error,
                meta={'dont_retry': False, 'download_timeout': 30}
            )
            time.sleep(1)  # Small delay between requests

    def write_file_with_retries(self, filepath, content, retries=3, delay=5):
        """Attempt to write to a file with retries."""
        for attempt in range(retries):
            try:
                with open(filepath, 'wb') as f:
                    f.write(content)
                return
            except Exception as e:
                logger.error(f"Failed to save {filepath} (attempt {attempt + 1}/{retries}): {e}")
                if attempt < retries - 1:
                    time.sleep(delay)

    def parse_item(self, response):
        # Log response info
        logger.info(f"Successfully scraped: {response.url} (status: {response.status})")

        # Determine and sanitize the folder name based on the domain
        domain = self.get_domain(response.url)
        folder_name = "temporary_files/" + self.sanitize_filename(domain)
        folder_path = Path(folder_name)
        folder_path.mkdir(parents=True, exist_ok=True)

        # Determine a safe filename based on the URL path and response Content-Type
        path = urlparse(response.url).path.strip('/')
        content_type = response.headers.get('Content-Type', b'').decode('utf-8').lower()
        mime_type = content_type.split(';')[0] if content_type else ''

        # Attempt to guess the file extension if it's not HTML
        ext = None
        if mime_type and mime_type != 'text/html':
            ext = mimetypes.guess_extension(mime_type)
            if ext is None:
                # Fallback: use the subtype as the extension
                ext = '.' + mime_type.split('/')[-1]

        if not path or response.url.endswith('/'):
            # For root pages, name the file 'index' with an appropriate extension
            if mime_type == 'text/html':
                filename = "index.html"
            else:
                filename = "index" + (ext if ext else '')
        else:
            # Replace directory separators with underscores and sanitize the result
            filename = self.sanitize_filename(path.replace('/', '_'))
            if '.' not in filename:
                if mime_type == 'text/html':
                    filename += ".html"
                elif ext:
                    filename += ext

        file_path = folder_path / filename
        logger.info(f"Saving {response.url} to {file_path}")

        try:
            self.write_file_with_retries(file_path, response.body)
        except Exception as e:
            logger.error(f"Failed to save {response.url}: {e}")

        # Check if content is HTML before attempting to extract links
        is_html = mime_type == 'text/html' or (not mime_type and response.url.endswith(('.html', '.htm')))
        
        if is_html:
            try:
                # Extract links for crawling - only for HTML content
                for href in response.css('a::attr(href)').getall():
                    next_url = response.urljoin(href)
                    if self.is_allowed_url(next_url):
                        yield scrapy.Request(
                            url=next_url, 
                            callback=self.parse_item,
                            errback=self.handle_error,
                            meta={'dont_retry': False}
                        )
            except Exception as e:
                logger.error(f"Error extracting links from {response.url}: {e}")
        else:
            # Log that we're skipping link extraction for non-HTML content
            logger.debug(f"Skipping link extraction for non-HTML content: {response.url} (mime-type: {mime_type})")
    
    def handle_error(self, failure):
        """Handle failures in requests"""
        request = failure.request
        logger.error(f"Error on {request.url}: {failure.value}")
        
    def is_allowed_url(self, url):
        """
        Allow URLs only if they belong to one of the allowed domains.
        Subdomains of an allowed domain are also accepted.
        """
        logger.debug("Checking if URL is allowed: %s", url)
        parsed = urlparse(url)
        domain = parsed.netloc.lower()
        if not self.allowed_domains:
            return True

        for allowed in self.allowed_domains:
            allowed = allowed.lower()
            if domain == allowed or domain.endswith('.' + allowed):
                return True
        return False

    def get_domain(self, url):
        """
        Extract the domain from the URL.
        """
        logger.debug("Extracting domain from URL: %s", url)
        return urlparse(url).netloc

    def sanitize_filename(self, value):
        """
        Sanitize a string to be safely used as a filename.
        Removes or replaces characters that may be invalid on some filesystems.
        """
        logger.debug("Sanitizing filename: %s", value)
        # Remove query parameters if present
        value = value.split('?')[0]
        # Replace any character that is not alphanumeric, dot, underscore, or dash with an underscore
        return re.sub(r'[^\w\.-]', '_', value)

