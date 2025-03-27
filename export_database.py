import sqlite3
import csv
import json
import os


def export_db_to_csv(db_path='companies.db', output_csv='exported_companies.csv'):
    if not os.path.exists(db_path):
        print(f"Database not found: {db_path}")
        return

    conn = sqlite3.connect(db_path)
    cursor = conn.cursor()

    # Get all columns except the ones to ignore
    cursor.execute("PRAGMA table_info(companies)")
    all_columns = [col[1] for col in cursor.fetchall()]
    columns_to_ignore = ['id', 'company_website_text_united', 'parsing_success', 'success']
    selected_columns = [col for col in all_columns if col not in columns_to_ignore]

    # Build the SELECT query with only desired columns and successful entries
    query = f"""
        SELECT {', '.join(selected_columns)}
        FROM companies 
        WHERE parsing_success = 1 AND success = 1
    """
    cursor.execute(query)
    rows = cursor.fetchall()

    # Write to CSV file
    with open(output_csv, mode='w', encoding='utf-8', newline='') as csv_file:
        writer = csv.writer(csv_file)
        writer.writerow(selected_columns)

        for row in rows:
            row_dict = dict(zip(selected_columns, row))

            # Handle all_contacts JSON formatting
            contacts_raw = row_dict.get('all_contacts', '')
            if contacts_raw:
                try:
                    contacts_json = json.loads(contacts_raw)
                    if isinstance(contacts_json, list):
                        formatted_contacts = []
                        for contact in contacts_json:
                            contact_parts = []

                            # Only include field if it exists and is not None/empty
                            for field, label in [
                                ('FullName', 'Name'),
                                ('Email', 'Email'),
                                ('PhoneNumber', 'Phone'),
                                ('Role', 'Role'),
                                ('Link', 'Link')
                            ]:
                                value = contact.get(field)
                                if value and value != "None" and str(value).strip():
                                    contact_parts.append(f"{label}: {value}")

                            # Only add contact if it has any valid fields
                            if contact_parts:
                                contact_str = ", ".join(contact_parts)
                                formatted_contacts.append(contact_str)

                        if formatted_contacts:
                            row_dict['all_contacts'] = " \n ".join(formatted_contacts)
                        else:
                            row_dict['all_contacts'] = ""
                    else:
                        row_dict['all_contacts'] = str(contacts_json)
                except json.JSONDecodeError:
                    pass

            writer.writerow([row_dict[col] for col in selected_columns])

    conn.close()
    print(f"Data exported successfully to {output_csv}")


if __name__ == '__main__':
    export_db_to_csv()
