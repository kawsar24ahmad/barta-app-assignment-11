# Project Title

This project is a web application designed for **[purpose of the project]**. It leverages **Laravel**, **Livewire**, and **sqlite** for efficient development and management of dynamic content. The application includes a custom authentication system and a modular structure with folders like `auth`, `admin`, and `post`.

## Features

- **Authentication**: Login and registration pages with redirects to a user dashboard.
- **Modular Structure**: Organized directories (`auth`, `admin`, `post`) with HTML files that share common headers and footers.
- **Livewire Integration**: Real-time component updates for a dynamic user experience.

## Folder Structure

- `auth`: Contains login and registration pages (without header and footer).
- `admin`: Manages administrative views with shared headers and footers.
- `post`: Handles post-related functionalities with a common layout.
- `resources/views`: Organizes reusable HTML and Livewire components.
- `app/Http/Resources`: Contains API resource files with versioned user resource management.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/kawsar24ahmad/barta-app-assignment-11.git
    cd barta-app-assignment-11
    ```

2. Install dependencies:

    ```bash
    composer install
    npm install
    ```

3. Copy the `.env.example` to `.env` and configure your database and other environment settings.

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Migrate the database:

    ```bash
    php artisan migrate
    ```

6. Run the development server:

    ```bash
    php artisan serve
    ```

