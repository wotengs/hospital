# Hospital

    A simple health management platform built with **Laravel 12** and **Filament 3.3**.

    The system allows doctors (authenticated users) to:

    - Create health programs (e.g., TB, Malaria, HIV).
    - Register new clients (patients).
    - Enroll clients into one or more programs.
    - Search for and view client profiles.
    - Expose client profile data via a secure API for external systems.

    > Developed as part of a **Software Engineering Internship Assignment** @ CEMA.

    ---

## 🚀 Tech Stack

    - **Laravel** 12.x
    - **Filament** 3.3
    - **Sanctum** (API Authentication)
    - **PestPHP** (Testing Framework)
    - **MySQL** (or any database supported by Laravel)

---

## 📦 Installation

    > Ensure you have **PHP 8.2+**, **Composer 2.5+**, **Node.js 18+**, and **MySQL** installed.

### 1. Clone the Repository

    git clone https://github.com/wotengs/hospital.git
    cd hospital

### 2. Install PHP Dependencies

    composer install

### 3. Install Node.js Dependencies (for Filament assets)

    npm install && npm run build

### 4. Set Up Environment Variables

    Edit the .env file with your local DB credentials:

    DB_DATABASE=hospital
    DB_USERNAME=root
    DB_PASSWORD=yourpassword

### 6. Set Up Database

    Create a new database manually called hospital (or whatever name you chose in .env).

    Then run:

    php artisan migrate --seed
    This will create tables and seed the database with test data.

### 🔐 Authentication

    This project uses Sanctum for API authentication.

    Log in through the Filament Admin Panel.

    Use Sanctum endpoints to authenticate for API access.

    API requests must include a Bearer token.

### 🛠 Development Workflow

## Command Purpose( run the following)

    Reset and seed the database->

    php artisan migrate:fresh --seed 

    Serve the app at localhost:8000->

    php artisan serve 

    Build frontend assets->

    npm run build 

    Watch frontend assets in development->

    npm run dev 

### 📚 Features

    ✅ Program Management (Create/Edit/Delete health programs)
    ✅ Client Registration and Management
    ✅ Enroll Clients into Multiple Programs
    ✅ Search Clients
    ✅ Client Profile Viewing
    ✅ Secure API for External Access to Client Profiles
    ✅ Authenticated Admin Dashboard via Filament
    ✅ Database Seeding for Quick Setup
    ✅ Sanctum-based API Authentication
    ✅ Modern Testing Setup with PestPHP

### 📖 API Endpoints

    Method Endpoint Description
    GET /api/clients/{id} Retrieve a client's profile
    POST /api/login (Sanctum) Login and retrieve token
    Ensure you pass the Bearer token for all protected API routes.

### 🧱 Project Structure Highlights

    app/Models/Client.php – Client Eloquent model

    app/Models/Program.php – Program Eloquent model

    app/Filament/Resources/ – Filament resource classes

    routes/web.php – Web routes

    routes/api.php – API routes

    database/factories/ – Model factories

    database/seeders/ – Seeders for Clients and Programs
