# Laravel CRUD App

A simple CRUD (Create, Read, Update, Delete) application built with Laravel.

## Tech Stack
- PHP
- Laravel
- MySQL
- Bootstrap 5

## Features
- Add new post
- View all posts
- Edit post
- Delete post

## Requirements
- PHP >= 8.0
- Composer
- XAMPP (MySQL)

## Installation

1. Clone the repository
   git clone https://github.com/AsifAlidev2/Crud-App-with-laravel.git

2. Go to project folder
   cd Crud-App-with-laravel

3. Install dependencies
   composer install

4. Copy .env file
   cp .env.example .env

5. Generate app key
   php artisan key:generate

6. Set database in .env file
   DB_DATABASE=crud_app_db
   DB_USERNAME=root
   DB_PASSWORD=

7. Run migrations
   php artisan migrate
