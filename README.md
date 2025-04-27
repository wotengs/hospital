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

```bash
git clone https://github.com/wotengs/hospital.git
cd hospital

2. Install PHP Dependencies

composer install
3. Install Node.js Dependencies (for Filament assets)

npm install && npm run build
4. Set Up Environment Variables

cp .env.example .env
Edit the .env file with your local DB credentials:

DB_DATABASE=hospital
DB_USERNAME=root
DB_PASSWORD=yourpassword
5. Generate Application Key

php artisan key:generate
6. Set Up Database
Create a new database manually called hospital (or whatever name you chose in .env).

Then run:


php artisan migrate --seed
This will create tables and seed the database with test data.

🔐 Authentication
This project uses Sanctum for API authentication.

Log in through the Filament Admin Panel.

Use Sanctum endpoints to authenticate for API access.

API requests must include a Bearer token.

🛠 Development Workflow

Command Purpose
php artisan migrate:fresh --seed Reset and seed the database
php artisan serve Serve the app at localhost:8000
npm run build Build frontend assets
npm run dev Watch frontend assets in development
📚 Features
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

📖 API Endpoints

Method Endpoint Description
GET /api/clients/{id} Retrieve a client's profile
POST /api/login (Sanctum) Login and retrieve token
Ensure you pass the Bearer token for all protected API routes.

🧱 Project Structure Highlights
app/Models/Client.php – Client Eloquent model

app/Models/Program.php – Program Eloquent model

app/Filament/Resources/ – Filament resource classes

routes/web.php – Web routes

routes/api.php – API routes

database/factories/ – Model factories

database/seeders/ – Seeders for Clients and Programs

🕓 Commit History Summary
First commit — Initial project setup for "Hospital" (Laravel 12 + Filament 3.3)

Back-end Complete — Models, relationships, factories, and seeders ready

CRUD Completed — Client and Program management through Filament

Validation Improvements — Form validation for ClientResource

UI Enhancements — Navigation, icons, and UX updates

API Added — Secure API exposure for client profiles via Sanctum

Final Touches — Polished ProgramResource with symptoms support

📸 Screenshots
(Add some Filament Admin screenshots here if you want — optional but looks professional.)

📜 License
This project is for educational use.
Feel free to modify and build upon it.

✅ Ready to Run!
Spin up the app locally:

bash
Copy
Edit
php artisan serve
Login to the Filament dashboard at:

http://localhost:8000/admin

⚡ Quick Notes
Built according to Laravel 12 official docs: Laravel 12.x Docs

Uses Filament 3.3 for a fast, beautiful Admin UI.

API is protected with Sanctum tokens.

Modern PestPHP test setup included.

📢 Pro Tip
If preparing for production:

Set up SSL (HTTPS).

Use Horizon for queue management.

Schedule regular database backups.

Protect your /admin login with extra security (2FA, IP restrictions, etc).

📝 Example .env Format
dotenv
Copy
Edit
APP_NAME=Hospital
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hospital
DB_USERNAME=root
DB_PASSWORD=yourpassword

SANCTUM_STATEFUL_DOMAINS=localhost:8000
SESSION_DOMAIN=localhost
✅ Done.
This will paste cleanly into your README.md and looks solid even for recruiters or open-source contributors.

✅ That's your actual full file. No code fencing around the whole thing.
✅ Ready to paste.
✅ Real README.md material.
✅ Will render exactly right on GitHub or GitLab.
