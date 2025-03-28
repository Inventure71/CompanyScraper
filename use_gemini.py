import json
import time

from google import genai
from google.genai import types
from google.genai.types import HttpOptions
from collections import deque

class GeminiHandler:
    def __init__(self):
        # read json file and extract token
        self.key = json.load(open("credentials/key_paid.json"))["key"]
        self.config = None
        #self.model_name = "gemini-2.0-flash"
        self.model_name = "gemini-2.0-flash-exp"
        self.client = genai.Client(api_key=self.key)

        self.requests_timestamps = deque(maxlen=10)  # timestamps of last 10 requests
        self.rate_limit = 10  # requests
        self.time_window = 60  # seconds (1 minute) so it would be 10 request per minute

    def check_rate_limit(self):
        """Check if we can make a new request based on rate limits."""
        current_time = time.time()

        # remove timestamps older than time window
        while self.requests_timestamps and current_time - self.requests_timestamps[0] >= self.time_window:
            self.requests_timestamps.popleft()

        # if we have less than rate_limit requests in the window, we can proceed
        if len(self.requests_timestamps) < self.rate_limit:
            self.requests_timestamps.append(current_time)
            print(f"Rate limit check passed. Current requests in window: {len(self.requests_timestamps)}/{self.rate_limit}")
            return True

        # calculate wait time if we're at the limit
        if self.requests_timestamps:
            wait_time = self.time_window - (current_time - self.requests_timestamps[0])
            if wait_time > 0:
                print(f"Rate limit reached. Waiting {wait_time:.2f} seconds...")
                time.sleep(wait_time)
                self.requests_timestamps.append(current_time + wait_time)
                print("Wait complete, proceeding with request")
                return True

        print("Rate limit check failed")
        return False

    def make_api_request_with_retries(self, prompt, retries=3, delay=5):
        """Attempt to make an API request with retries."""
        for attempt in range(retries):
            try:
                response = self.client.models.generate_content(
                    model=self.model_name,
                    contents=prompt,
                    config=self.config,
                )
                return response
            except Exception as e:
                print(f"API request failed (attempt {attempt + 1}/{retries}): {e}")
                if attempt < retries - 1:
                    time.sleep(delay)
        return None

    def generic_ask_gemini(self, prompt):
        if not self.check_rate_limit():
            print("Rate limit exceeded. Please wait before making more requests.")
            time.sleep(5)
            return self.generic_ask_gemini(prompt)

        blocks = self.divide_into_blocks(prompt)
        responses = []
        for block in blocks:
            response = self.make_api_request_with_retries(block)
            if response:
                print(response.text)
                responses.append(response.text)
            else:
                print("Failed to get a response after multiple attempts.")
                return None

        return responses

    def retrieve_info_gemini(self, prompt, retrieving=True):
        if not self.check_rate_limit():
            print("Rate limit exceeded. Please wait before making more requests.")
            time.sleep(5)
            return self.retrieve_info_gemini(prompt, retrieving)

        # Define the JSON schema.
        json_schema = types.Schema(
            type="OBJECT",
            enum=[],  # No enum values.
            required=["Countries", "Description"],
            properties={
                "Countries": types.Schema(
                    type="ARRAY",
                    items=types.Schema(type="STRING"),
                ),
                "Description": types.Schema(type="STRING"),
                "Keywords": types.Schema(
                    type="ARRAY",
                    items=types.Schema(type="STRING"),
                ),
                "AllContacts": types.Schema(
                    type="ARRAY",
                    items=types.Schema(
                        type="OBJECT",
                        enum=[],  # No enum values.
                        required=["FullName", "Role", "Link", "PhoneNumber", "Email"],
                        properties={
                            "FullName": types.Schema(type="STRING"),
                            "Link": types.Schema(type="STRING"),
                            "PhoneNumber": types.Schema(type="STRING"),
                            "Email": types.Schema(type="STRING"),
                            "Role": types.Schema(type="STRING"),
                            "RelevanceScore": types.Schema(
                                type="INTEGER",
                                minimum=1,
                                maximum=10
                            ),
                        },
                    ),
                ),
                "ExtraInfo": types.Schema(type="STRING"),
                "MostRelevantContact": types.Schema(
                    type="OBJECT",
                    required=["FullName", "Role", "Reason"],
                    properties={
                        "FullName": types.Schema(type="STRING"),
                        "Role": types.Schema(type="STRING"),
                        "Contact": types.Schema(type="STRING"),
                        "Reason": types.Schema(type="STRING"),
                    },
                ),
            },
        )

        # Define the generation configuration.
        generation_config = types.GenerateContentConfig(
            temperature=0.2,
            top_p=0.95,
            top_k=40,
            max_output_tokens=8192,
            response_schema=json_schema,
            response_mime_type="application/json",
            system_instruction=(
                "Extract all the information required in the JSON output.\n"
                "In particular:\n"
                "Countries: Should be the countries where the company operates or has offices.\n"
                "Description: Detailed description of the company including what they do and their main projects.\n"
                "Keywords: A list of keywords that describe the company and their projects in robotics.\n"
                "AllContacts: A list of ways to contact the company or specific employees (emails, phone numbers, LinkedIn, etc.).\n"
                "For each contact in AllContacts, assign a RelevanceScore (1-10) based on their role and potential for robotics lab collaboration.\n"
                "MostRelevantContact: Identify the single most relevant contact for robotics lab collaboration, considering:\n"
                "- Their role (prefer lab leaders, research directors, technical leads)\n"
                "- Their involvement in robotics/AI projects\n"
                "- Their seniority level\n"
                "- Their contact information availability (MUST have at least one of: email, phone, or link)\n"
                "- If a contact has no way to contact them, do not include them in the AllContacts list\n"
                "- Their location (prefer contacts in the same country as the company)\n"
                "IMPORTANT: The MostRelevantContact MUST have at least one valid contact method (email, phone, or LinkedIn).\n"
                "If no contact with valid contact information is found, set MostRelevantContact to null.\n"
                "ExtraInfo: Any important information that can affect/influence the ability to contact the company."
            ),
        )

        if retrieving:
            blocks = self.divide_into_blocks(prompt)
            responses = []

            if len(blocks) > 2:
                print("Too many blocks for current implementation.")
                return None

            for block in blocks:
                block_index = blocks.index(block)
                block_prompt = (
                    block + f"\nThis is block {block_index} out of {len(blocks)}. "
                    "If some of the required info is not present, write None in their field."
                )

                # Create the content with the provided prompt.
                content = types.Content(
                    role="user",
                    parts=[types.Part(text=block_prompt)]
                )

                # Generate the content using the specified model and configuration.
                response = self.client.models.generate_content(
                    model=self.model_name,
                    contents=content,
                    config=generation_config,
                )

                print("Response from block", block_index, ":", response.text)
                responses.append(response.text)

                if len(blocks) > 1:
                    time.sleep(1)

            if len(responses) == 1:
                return responses[0]

            prompt = f"""
            Combine the following responses into a single response, removing any duplicate, conflicting or just plain out incorrect (such as contacts with missing fields).
            
            responses: 
            {responses}
            """

            # Merge the responses from all blocks into a single JSON object.
            merged_response_str = self.retrieve_info_gemini(prompt, retrieving=False)
            #merged_response = self.merge_json_responses(responses)
            #merged_response_str = json.dumps(merged_response)
            print("Merged Response:", merged_response_str)
            return merged_response_str

        else:
            # Create the content with the provided prompt.
            content = types.Content(
                role="user",
                parts=[types.Part(text=prompt)]
            )

            # Generate the content using the specified model and configuration.
            response = self.client.models.generate_content(
                model=self.model_name,
                contents=content,
                config=generation_config,
            )

            print("Response:", response.text)
            return response.text

    def merge_json_responses(self, responses):
        """
        Merge multiple JSON responses into a single aggregated response.
        """
        # Initialize the merged object with empty or default values.
        merged = {
            "Countries": set(),
            "Description": "",
            "Keywords": set(),
            "AllContacts": [],
            "ExtraInfo": ""
        }

        for resp in responses:
            try:
                data = json.loads(resp)
            except json.JSONDecodeError as e:
                print("Error decoding JSON response:", e)
                continue

            # Merge Countries (using a set for uniqueness)
            countries = data.get("Countries", [])
            if isinstance(countries, list):
                merged["Countries"].update(countries)
            elif countries not in [None, "None"]:
                merged["Countries"].add(countries)

            # Merge Description (concatenate non-empty descriptions)
            desc = data.get("Description", "")
            if desc and desc != "None":
                if merged["Description"]:
                    merged["Description"] += "\n" + desc
                else:
                    merged["Description"] = desc

            # Merge Keywords
            keywords = data.get("Keywords", [])
            if isinstance(keywords, list):
                merged["Keywords"].update(keywords)
            elif keywords not in [None, "None"]:
                merged["Keywords"].add(keywords)

            # Merge AllContacts (append lists)
            contacts = data.get("AllContacts", [])
            if isinstance(contacts, list):
                merged["AllContacts"].extend(contacts)
            elif contacts not in [None, "None"]:
                merged["AllContacts"].append(contacts)

            # Merge ExtraInfo (concatenate non-empty extra info)
            extra = data.get("ExtraInfo", "")
            if extra and extra != "None":
                if merged["ExtraInfo"]:
                    merged["ExtraInfo"] += "\n" + extra
                else:
                    merged["ExtraInfo"] = extra

        # Convert sets back to lists.
        merged["Countries"] = list(merged["Countries"])
        merged["Keywords"] = list(merged["Keywords"])

        return merged

    def divide_into_blocks(self, prompt):
        # Define maximum block size in characters (approximately 100K chars)
        max_block_size = 2000000

        # If text is small enough, return as single block
        if len(prompt) <= max_block_size:
            print(f"Text size ({len(prompt)} chars) within limits, using single block")
            return [prompt]

        # Split into blocks
        blocks = []
        start = 0
        while start < len(prompt):
            # Find the last period before max_block_size to maintain sentence integrity
            end = min(start + max_block_size, len(prompt))
            if end < len(prompt):
                # Look for the last period before the max_block_size
                last_period = prompt[start:end].rfind('.')
                if last_period != -1:
                    end = start + last_period + 1

            block = prompt[start:end]
            blocks.append(block)
            print(f"Created block {len(blocks)} with size {len(block)} chars")
            start = end

        print(f"Text split into {len(blocks)} blocks")
        return blocks


if __name__ == "__main__":
    handler = GeminiHandler()
    with open("texts/accelerationrobotics_total.txt") as t:
        text = t.read()
    handler.retrieve_info_gemini(text)

