# Attendance Management System

## Overview
The Attendance Management System is a Laravel-based web application designed to track employee attendance efficiently. It provides features for marking attendance, viewing reports, and managing users.

## Features
- Employee login and authentication
- Mark daily attendance (Present, Absent, Late, Leave)
- Admin dashboard to monitor attendance records
- Attendance reports and analytics
- Role-based access control (Admin, Employee)
- Export attendance records to CSV/PDF
- Notification system for late arrivals
- Responsive UI with Bootstrap

## Project Structure
```
/attendance-system
   /assets         # Static assets (CSS, JS, Images, etc.)
   /application    # Laravel project
```

## Requirements
- PHP 7.x or later
- MySQL database
- Apache/Nginx server
- Composer (for dependency management)
- Node.js & npm (for frontend assets, optional)

## Installation
1. Clone the repository:
   ```sh
   ```
2. Navigate to the project folder:
   ```sh
   cd attendance-system/application
   ```
3. Install dependencies:
   ```sh
   composer install
   npm install
   ```
4. Set up the environment:
   - Copy `.env.example` to `.env`
   - Update database credentials in `.env`:
     ```
     DB_DATABASE=your_database
     DB_USERNAME=your_user
     DB_PASSWORD=your_password
     ```
5. Run database migrations:
   ```sh
   php artisan migrate
   ```
6. Serve the application:
   ```sh
   php artisan serve
   ```
   Open `http://localhost:8000` in your browser.

## Usage
- Employees log in to mark attendance daily.
- Admins can view and manage attendance records.
- Reports can be generated and exported.

## Contributing
Feel free to contribute by submitting issues or pull requests.


---
Streamline attendance tracking with this system! 🚀

