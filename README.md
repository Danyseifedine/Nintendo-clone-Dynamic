# Nintendo: From Static to Dynamic

## Project Overview

A dynamic Nintendo product showcase platform developed by Dany Seifeddine. This project transforms a static Nintendo product listing into a fully dynamic web application with advanced filtering, product management, and role-based permissions.

**Development Time:** 8 hours 32 minutes  
**Testing Time:** 1.5 hours  
**Design Enhancements:** 1 hours (gallery improvements)  
**Deployment Fixes:** 1.5 hours (PHP and NPM version compatibility)

## Main Features

### Product Management

-   Products with detailed information and gallery
-   Tag system for categorization
-   Product states: Free Demo, Free Download, or Discount
-   Discount system with percentage, start and end dates (automatically expires)

### Dynamic User Experience

-   Real-time filtering without page reloads
-   Dynamic pagination (AJAX-based, 8 items per page)
-   Tag-based filtering
-   Product suggestions based on tags
-   Responsive drawer design that adapts to user login status (desktop and mobile)

### User System

-   Role-based access control
-   Available roles: User, Moderator, Super Admin
-   Granular permissions system
-   No email verification required (easily integrable)

## Website Structure

-   Welcome page
-   Product listing page (dynamic with AJAX pagination)
-   Single product display page with gallery and tag-based suggestions
-   Two login pages and one register page
-   Admin panel (access based on role)

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

### Super Admin

-   Full access to all features and admin panel
-   Manage products, tags, users, and roles
-   Configure system settings
-   Create and modify all content

### Moderator

-   Limited access to admin panel
-   Manage products and tags
-   Cannot modify user roles or permissions
-   Limited access to system settings

### User

-   No access to admin panel
-   Browse products on the frontend
-   Filter and search products
-   View product details and galleries
-   Access tag-based product suggestions

## Product Features

-   **Product States:**
    -   Free Demo: Try before purchase
    -   Free Download: Completely free products
    -   Discount: Products with time-limited discounts
-   **Discount System:**
    -   Percentage-based discounts
    -   Start and end dates
    -   Automatic expiration
-   **Tag System:**
    -   Click tags to see related products
    -   Used for product categorization and suggestions

## Notes

-   Email verification is not implemented but can be easily added by:
    1. Adding `implements MustVerifyEmail` to the User model
    2. Setting `MAIL_MAILER=smtp...` in the .env file
