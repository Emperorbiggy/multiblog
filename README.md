# 📘 Multi-Tenant Blog System

[![Laravel](https://img.shields.io/badge/Laravel-11-red.svg?style=flat&logo=laravel)](https://laravel.com)  
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)  
[![Sanctum](https://img.shields.io/badge/API%20Auth-Laravel%20Sanctum-brightgreen)](https://laravel.com/docs/sanctum)

A Laravel-based multi-tenant blog platform with both API and web interfaces. Built with Laravel 12.7.2, Blade views, and Sanctum for secure authentication.

---

## ✨ Features

- Users register and remain in a pending state  
- Admins approve accounts and assign tenants  
- Tenants can log in and perform full CRUD on blog posts (Web & API)  
- Admins can view all posts by all tenants  
- Sanctum used for secure API authentication  
- Built following Laravel best practices and SOLID principles

---

## 🛠️ Tech Stack

- **Framework**: Laravel 12  
- **Frontend**: Laravel Blade 
- **API Authentication**: Laravel Sanctum  
- **Database**: MySQL

---

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/Emperorbiggy/multiblog.git
cd multiblog
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

Then update your `.env` file:

```
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Migrate & Seed Database

```bash
php artisan migrate
php artisan db:seed --class=AdminUserSeeder
```

### 5. Sanctum Setup

```bash
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate
```



### 6. Serve the Application

```bash
php artisan serve
```

Visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🔐 Sanctum API Authentication

### Login

```http
POST /api/login
Content-Type: application/json
Accept: application/json

{
  "email": "admin@gmail.com",
  "password": "admin123456"
}
```



### Public Routes

```http
POST /api/register
POST /api/login
GET  /api/posts
GET  /api/posts/{id}
```

### Authenticated Routes (Requires Sanctum Token)

```http
GET    /api/test                  // Auth check
GET    /api/posts                 // List own posts
POST   /api/posts                 // Create post
PUT    /api/posts/{id}            // Update post
DELETE /api/posts/{id}            // Delete post
```

### Admin Routes (Protected by AdminMiddleware)

```http
GET    /api/admin/users           // List all users
POST   /api/admin/approve/{id}    // Approve user as tenant
POST   /api/admin/reject/{id}     // Reject user
GET    /api/admin/posts           // View all tenant posts
PUT    /api/admin/posts/{id}/approve  // Approve post
PUT    /api/admin/posts/{id}/reject   // Reject post
DELETE /api/posts/delete-all      // Bulk delete posts
```

Add this to your request headers for protected routes:

```
Authorization: Bearer YOUR_SANCTUM_TOKEN
---

## 📂 Full API Route Summary

| Method | Endpoint                          | Access       | Description                     |
|--------|-----------------------------------|--------------|---------------------------------|
| POST   | /api/register                     | Public       | Register a new user             |
| POST   | /api/login                        | Public       | Login and receive token         |
| GET    | /api/posts                        | Public       | View all posts                  |
| GET    | /api/posts/{id}                   | Public       | View single post                |
| GET    | /api/test                         | Authenticated | Check if user is logged in      |
| POST   | /api/posts                        | Tenant       | Create new post                 |
| PUT    | /api/posts/{id}                   | Tenant       | Update post                     |
| DELETE | /api/posts/{id}                   | Tenant       | Delete post                     |
| GET    | /api/admin/users                  | Admin        | List all registered users       |
| POST   | /api/admin/approve/{id}           | Admin        | Approve a user as tenant        |
| POST   | /api/admin/reject/{id}            | Admin        | Reject a user                   |
| GET    | /api/admin/posts                  | Admin        | View all tenant posts           |
| PUT    | /api/admin/posts/{id}/approve     | Admin        | Approve tenant post             |
| PUT    | /api/admin/posts/{id}/reject      | Admin        | Reject tenant post              |
| DELETE | /api/posts/delete-all             | Admin        | Bulk delete all posts           |

---
## 🌐 Web Interface

- Tenants can log in and manage blog posts via Blade-based UI  
- Admins can view pending users and manage tenants via backend (DB or interface)

---

## 📄 Postman Collection

A Postman collection is included for quick testing of API endpoints.

---

## 👤 Default Admin Login

```
Email: admin@gmail.com
Password: admin123456
```

---

## 🧼 Code Quality

- ✅ Follows **SOLID** principles  
- ✅ Clean folder structure  
- ✅ Request validations & form requests  
- ✅ Service-based architecture for business logic  

---

## 📬 Feedback

For issues or contributions, feel free to open an issue or PR. Let’s build better software together!
