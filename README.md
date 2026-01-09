# Pesapal RDBMS Demo 
 
This is a Laravel 12.46 demo project for Pesapal showcasing a simple relational database management system (RDBMS) with: 
 
- Users and Orders tables 
- MySQL migrations and seeders 
- Full CRUD API endpoints 
- Relationships between users and their orders 
 
--- 
 
## Features 
- Full-stack Laravel API for managing Users and Orders 
- Database-backed with MySQL 
- Seeded demo data for immediate testing 
- Postman-ready endpoints for CRUD operations 
- Ready for local testing and submission 
 
--- 
relational database management system (RDBMS) with: 
 
- Users and Orders tables 
- MySQL migrations and seeders 
- Full CRUD API endpoints 
- Relationships between users and their orders 
 
--- 
 
## Features 
- Full-stack Laravel API for managing Users and Orders 
- Database-backed with MySQL 
- Seeded demo data for immediate testing 
- Postman-ready endpoints for CRUD operations 
- Ready for local testing and submission 
 
--- 
 
## Requirements 
- PHP 8.x 
- Composer 
- MySQL 8.x 
- Laravel 12.46 
Unknown command: "(optional"

To see a list of supported npm commands, run:
  npm help
 
--- 
 
## Setup Instructions 
 
1. Clone the repository 
```bash 
git clone https://github.com/Winnie-Muriuki/pesapal-rdbms-demo.git 
cd pesapal-rdbms-demo 
``` 
 
2. Install dependencies 
```bash 
composer install 
``` 
 
3. Copy `.env` file and configure database 
```bash 
cp .env.example .env 
``` 
Update `.env` with your MySQL credentials: 
```env 
DB_CONNECTION=mysql 
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=pesapal_rdbms_demo 
DB_USERNAME=root 
DB_PASSWORD= 
SESSION_DRIVER=file 
``` 
 
 Do not commit your `.env` file. 
 
4. Generate application key 
```bash 
php artisan key:generate 
``` 
 
5. Run migrations and seed the database 
```bash 
php artisan migrate:fresh --seed 
``` 
 
6. Start the Laravel server 
```bash 
php artisan serve 
``` 
- The API is now available at http://127.0.0.1:8000 
 
--- 
 
## Database Structure 
 
### Users Table 
 
 
### Orders Table 
 
 
--- 
 
## API Endpoints 
 
 
--- 
 
## Example JSON Bodies 
 
**Create User** 
```json 
{ 
  "name": "Diana Prince", 
  "email": "diana@example.com" 
} 
``` 
 
**Create Order** 
```json 
{ 
  "user_id": 1, 
  "product": "Tablet", 
  "quantity": 3 
} 
``` 
 
--- 
 
## Testing the API 
- Use Postman or Insomnia to test endpoints. 
- Set Content-Type to application/json for POST and PUT requests. 
- Example URLs for local testing: 
``` 
http://127.0.0.1:8000/api/users 
http://127.0.0.1:8000/api/orders 
``` 
 
--- 
 
## Notes 
- Sessions use the file driver (default) 
- Do not commit your .env or vendor/ folder 
- This demo is intended for local testing and submission to Pesapal 
- The project includes seeded demo data for immediate testing 
 
--- 
 
## Author 
Winnie-Muriuki 
Email: wnnmax@gmail.com 
GitHub: https://github.com/Winnie-Muriuki 
