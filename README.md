# 🐱 Dynamic Profile Endpoint in Vanilla PHP

This is a simple PHP script that fetches a random cat fact from [catfact.ninja](https://catfact.ninja/fact) and returns a custom JSON response, including user information, a timestamp, and the retrieved fact.

## 📦 Features

- Fetches a random cat fact from a public API.
- Returns a JSON response with:
  - User details
  - ISO 8601 timestamp (UTC)
  - The cat fact itself
- Built with **vanilla PHP** — no frameworks required.

## 🛠️ Requirements

- PHP 7.0 or higher
- Internet connection (to fetch data from the API)

## 🚀 Usage

1. **Clone or download** this project.

2. **Edit the script** to set your personal information:

   In `index.php` (or your script file), replace the following lines with your actual data:

   ```php
   $myHngEmail = "your.email@example.com";
   $name = "Your Name";
   $stack = "PHP, JavaScript";
Run the script in your local server or deploy it:

Via command line:

bash
Copy code
php -S localhost:8000
Visit http://localhost:8000/index.php in your browser.

Example Response:

json

{
  "status": "success",
  "user": {
    "email": "your.email@example.com",
    "name": "Your Name",
    "stack": "PHP, JavaScript"
  },
  "timestamp": "2025-10-19T20:15:30+00:00",
  "fact": "A commemorative tower was built in Scotland for a cat named Towser, who caught nearly 30,000 mice in her lifetime."
}


🧪 API Reference
Cat Fact API: https://catfact.ninja/fact

No authentication or API key required.

📄 License
This project is open-source and free to use.
