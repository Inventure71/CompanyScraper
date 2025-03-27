import os
import json
import sqlite3
import time
from sqlite3 import Error
import csv

from scraper import Scraper
from use_gemini import GeminiHandler


class Classifier:
    def __init__(self):
        self.db_path = 'companies.db'
        self.gemini_handler = GeminiHandler()

    def save_companies_to_db(self, companies):
        try:
            conn = sqlite3.connect(self.db_path)
        except Error as e:
            print(f"Error connecting to database: {e}")
            return

        cursor = conn.cursor()

        create_table_sql = """
        CREATE TABLE IF NOT EXISTS companies (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            link TEXT,
            country TEXT,
            keywords TEXT,
            description TEXT,
            all_contacts TEXT,
            extra_info TEXT,
            company_website_text_united TEXT,
            success INTEGER,
            parsing_success INTEGER,
            quick_scrape_used INTEGER DEFAULT 0,
            most_relevant_contact TEXT
        );
        """

        try:
            cursor.execute(create_table_sql)
        except Error as e:
            print(f"Error creating table: {e}")
            conn.close()
            return

        insert_sql = """
        INSERT INTO companies (
            name, link, country, keywords, description, 
            all_contacts, extra_info, company_website_text_united, success,
            parsing_success, quick_scrape_used, most_relevant_contact
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);
        """

        for company in companies:
            try:
                keywords = company.get('keywords', '')
                if isinstance(keywords, list):
                    keywords = ', '.join(str(k) for k in keywords)
                else:
                    keywords = str(keywords)

                data = (
                    company.get('name', '').strip(),
                    company.get('link', '').strip(),
                    company.get('country', '').strip(),
                    keywords.strip(),
                    company.get('description', '').strip(),
                    company.get('all_contacts', '').strip(),
                    company.get('extra_info', '').strip(),
                    company.get('company_website_text_united', '').strip(),
                    company.get('success', 0),
                    company.get('parsing_success', 0),
                    company.get('quick_scrape_used', 0),
                    company.get('most_relevant_contact', '').strip()
                )
                cursor.execute(insert_sql, data)
            except Error as e:
                print(f"Error inserting company '{company.get('name', 'Unknown')}': {e}")

        conn.commit()
        conn.close()

    def parse_json(self, json_str):
        if json_str is None:
            print("Warning: Received None instead of JSON string")
            return None

        try:
            return json.loads(json_str.strip())
        except json.JSONDecodeError as e:
            print("Error decoding JSON:", e)
            return None

    def parse_company(self, name, company="accelerationrobotics.com", max_pages=20):
        link = f'https://www.{company}/'
        company = company.lower()
        
        print(f"\nProcessing company: {name}")
        print(f"Starting quick scrape with 15 pages limit...")
        
        # Try quick scraping first with 15 pages limit
        quick_scraper = Scraper([link], [company], force_update=False, max_pages=15)
        complete_text = quick_scraper.scrape_website()
        
        # Check if we got enough content (at least 1000 characters)
        content_length = len(complete_text)
        print(f"Quick scrape content length: {content_length} characters")
        
        if content_length < 1000:
            print("Quick scrape didn't yield enough content, falling back to full scraping...")
            # If not enough content, try full scraping
            scraper = Scraper([link], [company], force_update=False, max_pages=max_pages)
            complete_text = scraper.scrape_website()
            quick_scrape_used = 0
            print(f"Full scrape content length: {len(complete_text)} characters")
        else:
            quick_scrape_used = 1
            print("Quick scrape successful, using limited content")

        print("Combined Text:", complete_text)

        response = self.gemini_handler.retrieve_info_gemini(complete_text)
        success = True if response else False

        self.save_company(response, name, link, complete_text, success, quick_scrape_used)

    def save_company(self, json_str, name, link, website_full_text, success, quick_scrape_used=0):
        parsed = self.parse_json(json_str)
        parsing_success = parsed is not None

        if not parsing_success:
            # Save failed parsing attempt
            company_data = {
                "name": name,
                "link": link,
                "country": "",
                "keywords": "",
                "description": "",
                "all_contacts": "",
                "extra_info": "",
                "company_website_text_united": website_full_text,
                "success": 0,
                "parsing_success": 0,
                "quick_scrape_used": quick_scrape_used,
                "most_relevant_contact": ""
            }
            self.save_companies_to_db([company_data])
            print("Company saved to database with failed parsing status.")
            return

        # Handle Keywords field properly - ensure it's a string
        keywords = parsed.get("Keywords", [])
        if isinstance(keywords, list):
            keywords = ', '.join(str(k) for k in keywords)

        # Format the most relevant contact
        most_relevant = parsed.get("MostRelevantContact", {})
        most_relevant_str = ""
        if most_relevant:
            parts = []
            if most_relevant.get("FullName"):
                parts.append(f"Name: {most_relevant['FullName']}")
            if most_relevant.get("Role"):
                parts.append(f"Role: {most_relevant['Role']}")
            if most_relevant.get("Email"):
                parts.append(f"Email: {most_relevant['Email']}")
            if most_relevant.get("Reason"):
                parts.append(f"Reason: {most_relevant['Reason']}")
            most_relevant_str = " | ".join(parts)

        company_data = {
            "name": name,
            "link": link,
            "country": ", ".join(parsed.get("Countries", [])) if isinstance(parsed.get("Countries"),
                                                                            list) else parsed.get("Countries", ""),
            "keywords": keywords,
            "description": parsed.get("Description", ""),
            "all_contacts": json.dumps(parsed.get("AllContacts", "")),
            "extra_info": parsed.get("ExtraInfo", ""),
            "company_website_text_united": website_full_text,
            "success": 1 if success else 0,
            "parsing_success": 1,
            "quick_scrape_used": quick_scrape_used,
            "most_relevant_contact": most_relevant_str
        }

        self.save_companies_to_db([company_data])
        print("Company saved to database successfully.")

    def check_company_exists(self, name):
        try:
            conn = sqlite3.connect(self.db_path)
            cursor = conn.cursor()

            # Use exact name matching
            cursor.execute("SELECT COUNT(*) FROM companies WHERE name = ?", (name,))
            count = cursor.fetchone()[0]
            conn.close()

            return count > 0

        except Error as e:
            print(f"Error checking company existence: {e}")
            return False

def clean_url(url):
    try:
        if not url:
            return ""
        url = url.replace('https://', '').replace('http://', '').replace('www.', '')
        url = url.split('/')[0] # remove everything after the first slash if it exists
        return url
    except Exception as e:
        print(f"Error cleaning URL {url}: {e}")
        return ""


if __name__ == '__main__':
    classifier = Classifier()

    with open('Robotics Labs and Companies.csv', 'r', encoding='utf-8') as file:
        csv_reader = csv.DictReader(file, delimiter=';')
        for row in csv_reader:
            name = row['Names']
            link = clean_url(row['Links'])
            print(f"Name: {name}, Link: {link}")

            if not classifier.check_company_exists(name):
                # Set max_pages to limit the number of pages to scrape (default is 50)
                classifier.parse_company(name, link, max_pages=20)
                time.sleep(1)
            else:
                print(f"Company '{name}' already exists in database, skipping...")
