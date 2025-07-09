# React Training Server

This is the backend server for the **React Training** application, built using **Laravel**. It provides RESTful APIs to be consumed by the React frontend.

---

## 📋 Prerequisites

Make sure the following software is installed on your machine:

- PHP >= 8.1
- [Composer](https://getcomposer.org/)
- A database server (e.g., MySQL, PostgreSQL, or SQLite)
- [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/) *(optional, for frontend asset management if applicable)*

---

## ⚙️ Installation

Follow these steps to set up the project locally:

1. **Clone the repository:**
   ```bash
   git clone  https://github.com/kraglr/APITrainingServer.git
   cd react-training-server
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Create your `.env` file and generate the application key:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure your `.env` file:**

   Open the `.env` file and update your database connection credentials:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run database migrations:**
   ```bash
   php artisan migrate
   ```

6. **(Optional) Run seeders to populate sample data:**
   ```bash
   php artisan db:seed
   ```

---

## ▶️ Running the Application

To start the local development server:

```bash
php artisan serve
```

By default, the server will be accessible at:  
**http://127.0.0.1:8000**

---

## 📡 Available API Endpoints

| Method | Endpoint                            | Description                                         |
|--------|-------------------------------------|-----------------------------------------------------|
| GET    | `/api/patients/get-patient-list`    | Retrieve a list of patients                         |
| GET    | `/api/user`                         | Get authenticated user's details (via Sanctum)      |

---

## ✅ Running Tests

To run the application's test suite:

```bash
php artisan test
```

---

## 📄 License

This project is open-source and available under the [MIT license](https://opensource.org/licenses/MIT).
