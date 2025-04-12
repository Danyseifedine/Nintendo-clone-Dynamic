# Nintendo: From Static to Dynamic

## Project Overview

A dynamic Nintendo product showcase platform developed by Dany Seifeddine. This project transforms a static Nintendo product listing into a fully dynamic web application with advanced filtering, product management, and role-based permissions.

**Development Time:** 8 hours 32 minutes

## Main Features

### Product Management

-   Products with detailed information and gallery
-   Tag system for categorization
-   Free demo availability option
-   Discount system with expiration dates

### Dynamic User Experience

-   Real-time filtering without page reloads
-   Dynamic pagination (AJAX-based)
-   Tag-based filtering
-   Product suggestions based on tags

### User System

-   Role-based access control
-   Available roles: User, Moderator, Admin
-   Granular permissions system
-   No email verification required (easily integrable)

## Technical Implementation

### Backend

-   **Laravel** - PHP framework for robust backend
-   **Laravel Breeze** - Authentication scaffolding
-   **Filament** - Admin panel for content management
-   **Spatie Permissions** - Role and permission management
-   **Spatie Media Library** - Image handling and optimization

### Frontend

-   Dynamic filtering with JavaScript/AJAX
-   Responsive design
-   Interactive product galleries

## Installation

1. Clone the repository

    ```
    git clone https://github.com/username/nintendo-dynamic.git
    cd nintendo-dynamic
    ```

2. Install dependencies

    ```
    composer install
    npm install
    ```

3. Set up environment

    ```
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure database in .env file

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nintendo_dynamic
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Run migrations and seeders

    ```
    php artisan migrate --seed
    ```

6. Build assets

    ```
    npm run dev
    ```

7. Link the storage

    ```
    php artisan storage:link
    ```

8. Start the server
    ```
    php artisan serve
    ```

## User Roles and Permissions

### Admin

-   Full access to all features
-   Manage products, tags, users, and roles

### Moderator

-   Manage products and tags
-   Cannot modify user roles or permissions
-   Limited access to system settings

### User

-   Browse products
-   Filter and search
-   View product details and galleries

## Notes

-   Email verification is not implemented but can be easily added by:
    1. Adding `implements MustVerifyEmail` to the User model
    2. Setting `MAIL_MAILER=smtp...` in the .env file
