# Google Drive Photo Upload Project

## Description

This project is a simple Laravel application designed to handle photo uploads directly to Google Drive. Users can upload images via a web form, with the option to specify a custom file name. The application integrates with Google Drive using Laravel's filesystem abstraction.

## Features

- **Photo Upload:** Users can upload photos through a web form.
- **Custom File Names:** Allows users to specify a custom file name for the uploaded photo.
- **Google Drive Integration:** Photos are stored directly in Google Drive.

## Requirements

- **Laravel Framework:** Ensure you have the latest version of Laravel installed in your development environment.
- **Google Drive API:** Google Drive API credentials are required for uploading files.
- **Composer:** For managing PHP dependencies.

## Setup Instructions

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/NaufalDinnajaRoffif/Upload-In-GD.git
   ```

2. **Install Dependencies:**
   Run Composer to install the required PHP packages.
   ```bash
   composer install
   ```

3. **Configuration:**
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Generate the application key:
     ```bash
     php artisan key:generate
     ```
   - Configure your Google Drive API credentials in the `.env` file. Add the following entries and fill in your credentials:
     ```env
     GOOGLE_DRIVE_CLIENT_ID=your-client-id
     GOOGLE_DRIVE_CLIENT_SECRET=your-client-secret
     GOOGLE_DRIVE_REFRESH_TOKEN=your-refresh-token
     ```

4. **Migrate Database (If Required):**
   If the project requires database migrations, run:
   ```bash
   php artisan migrate
   ```

5. **Run the Application:**
   Start the Laravel development server:
   ```bash
   php artisan serve
   ```

6. **Access the Application:**
   Open your browser and navigate to `http://localhost:8000` to use the upload feature.

## Usage

- **Upload Photo:**
  - Navigate to the upload form.
  - Select an image file and enter a custom file name.
  - Submit the form to upload the photo to Google Drive.

## Troubleshooting

- **Credential Issues:** Ensure your Google Drive API credentials are correct and have the necessary permissions.
- **Upload Problems:** Check if the uploaded file matches the allowed formats and is not too large.

## Notes

- **Security:** Never store sensitive credentials in a public repository. Ensure the `.env` file is excluded from version control (e.g., by adding it to `.gitignore`).
