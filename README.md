--- a/c:\Users\admin\OneDrive\Documents\trainings\react-training-server\training_server\README.md
+++ b/c:\Users\admin\OneDrive\Documents\trainings\react-training-server\training_server\README.md
@@ -1,59 +1,72 @@
-<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
+# React Training Server
 
-<p align="center">
-<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
-<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
-<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
-<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
-</p>
+This is the backend server for the React Training application, built with Laravel. It provides APIs to be consumed by a React frontend.
 
-## About Laravel
+## Prerequisites
 
-Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:
+Before you begin, ensure you have met the following requirements:
 
-- [Simple, fast routing engine](https://laravel.com/docs/routing).
-- [Powerful dependency injection container](https://laravel.com/docs/container).
-- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-- [Robust background job processing](https://laravel.com/docs/queues).
-- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
+*   PHP >= 8.1
+*   [Composer](https://getcomposer.org/)
+*   A database server (e.g., MySQL, PostgreSQL, SQLite)
+*   [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/) (optional, for frontend asset management if any)
 
-Laravel is accessible, powerful, and provides tools required for large, robust applications.
+## Installation
 
-## Learning Laravel
+Follow these steps to get your development environment set up:
 
-Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.
+1.  **Clone the repository:**
+    ```bash
+    git clone <your-repository-url>
+    cd react-training-server
+    ```
 
-You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.
+2.  **Install PHP dependencies:**
+    ```bash
+    composer install
+    ```
 
-If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
+3.  **Create your environment file:**
+    Copy the example environment file and generate your application key.
+    ```bash
+    cp .env.example .env
+    php artisan key:generate
+    ```
 
-## Laravel Sponsors
+4.  **Configure your environment (`.env`):**
+    Open the `.env` file and update the database connection details (`DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
 
-We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel Partners program.
+5.  **Run database migrations:**
+    This will create the necessary tables in your database.
+    ```bash
+    php artisan migrate
+    ```
 
-### Premium Partners
+6.  **(Optional) Run database seeders:**
+    If there are seeders to populate the database with initial data, run:
+    ```bash
+    php artisan db:seed
+    ```
 
-- **Vehikl**
-- **Tighten Co.**
-- **WebReinvent**
-- **Kirschbaum Development Group**
-- **64 Robots**
-- **Curotec**
-- **Cyber-Duck**
-- **DevSquad**
-- **Jump24**
-- **Redberry**
-- **Active Logic**
-- **byte5**
-- **OP.GG**
+## Running the Application
 
-## Contributing
+To start the local development server, run the following command:
 
-Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the Laravel documentation.
+```bash
+php artisan serve
+```
 
-## Code of Conduct
+The application will be available at `http://127.0.0.1:8000` by default.
 
-In order to ensure that the Laravel community is welcoming to all, please review and abide by the Code of Conduct.
+## API Endpoints
 
-## Security Vulnerabilities
+The following API endpoints are available:
 
-If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via taylor@laravel.com. All security vulnerabilities will be promptly addressed.
+*   **GET `/api/patients/get-patient-list`**: Retrieves a list of patients.
+*   **GET `/api/user`**: (Requires `auth:sanctum` authentication) Retrieves the authenticated user's details.
 
-## License
+## Running Tests
 
-The Laravel framework is open-sourced software licensed under the MIT license.
+To run the application's test suite, execute the following command:
+```bash
+php artisan test
+```

