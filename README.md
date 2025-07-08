# 📚 Laravel 10 Book Management System

This is a Laravel 10-based Book Management System developed as part of an internship assessment project. It provides full authentication, book and author CRUD management, and generates PDF reports using TCPDF.

---

## ✨ Features

- 🔐 User authentication (Laravel Breeze)
- 📚 Manage books: title, author, publish date
- 🖋️ Manage authors: name, biography
- 📊 Dashboard with total books & authors
- 🧾 Generate PDF reports of books by date
- 💡 Clean Bootstrap 5-based UI

---

## 🖥️ Technologies

- Laravel 10
- Laravel Breeze (Authentication)
- Bootstrap 5
- TCPDF (PDF report generation)
- MySQL (Database)

---

## 🚀 Installation Guide

```bash
# 1. Clone the repository
git clone https://github.com/your-username/book-management-system.git

# 2. Move into the project directory
cd book-management-system

# 3. Install dependencies
composer install
npm install && npm run dev

# 4. Configure .env
cp .env.example .env
# → Update database credentials in .env

# 5. Generate key & run migrations
php artisan key:generate
php artisan migrate

# 6. Start the server
php artisan serve

```

👤 Author
Isuru M. Dasanayake
Student at SIBA Campus
📧 isurumadhuranga279@gmail.com

📃 License
This project is open-sourced for educational and non-commercial use.
