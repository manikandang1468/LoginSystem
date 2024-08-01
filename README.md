# Basic Auth System with Laravel, Livewire, Tailwind CSS, and Alpine.js

This is a simple authentication system built with Laravel, Livewire, Tailwind CSS, and Alpine.js. It includes user registration, login, and a protected dashboard.

## Features

- User registration with name, email, and password
- User login with email and password
- Auth middleware to protect the dashboard
- Responsive design using Tailwind CSS
- Interactive components with Livewire and Alpine.js

## Requirements

- PHP >= 8.3
- Composer
- Node.js and npm
- Laravel >= 11.x

## Installation

### 1.Clone the project

```bash
git clone https://github.com/manikandang1468/LoginSystem.git
cd LoginSystem
```

### 2.Update dependencies

```bash
composer update
```

### 3.Create environment

* Create initial .env file using the template file .env.example
* Creating a security key for the application

```bash
cp .env.example .env
php artisan key:generate
```

### 4.Database Setup

* Create database.sqlite in database dir - for sqlite

```bash
touch database/database.sqlite
php artisan migrate
```

### 5.Activate debug mode (optional)

In `laravel-app/.env`, change APP_DEBUG to true

```
APP_DEBUG=true
```

### 6.Start local service

```bash
php artisan serve
```

### Open local application

http://localhost:8000/
