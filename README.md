<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Notes Application - Documentation
Overview
The Notes Application allows users to create, view, edit, and delete notes. Each note can be associated with a specific category, and users can filter and search notes by title and category. The app is built with Laravel and provides a simple, efficient way to manage notes.

Prerequisites
Before installing the application, ensure that you have the following:

PHP (version 8.1 or higher)
Composer (for managing PHP dependencies)
Node.js and npm (for frontend dependencies)
MySQL (for database management)
A web server (Apache or Nginx)
Installation
Step 1: Install Dependencies
Clone the repository:

bash
Copy code
git clone https://github.com/ridachaanoun/Gestion-des-notes.git
cd Gestion-des-notes
Install PHP and Node.js dependencies:

bash
Copy code
composer install
npm install
Build the frontend assets:

bash
Copy code
npm run dev
Step 2: Set Up Environment Variables
Copy the .env.example file to .env:

bash
Copy code
cp .env.example .env
Configure the database and other environment settings in the .env file.

Generate the application key:

bash
Copy code
php artisan key:generate
Step 3: Serve the Application
Start the Laravel development server:

bash
Copy code
php artisan serve
By default, the application will be available at http://localhost:8000.

Getting Started
1. Log In
Open the application and log in using your credentials.
After logging in, you will be directed to the dashboard.
2. Dashboard
The dashboard is the main view of the application, where you can view, create, edit, and delete notes.

3. Create a Note
Navigate to the Create Note page.
Fill in the form with the note title, content, and category.
Click the Create Note button to save the note.
4. View Notes
Navigate to the Notes route to see all your notes.
Notes are displayed in a paginated view, with 9 notes per page.
Each note shows its title, content, and category.
Use the pagination controls to navigate between pages.
5. Edit a Note
To edit a note, click the Edit button next to the note you want to modify.
Update the note's title or content, then click Update Note to save the changes.
6. Delete a Note
To delete a note, click the Delete button next to the note you want to remove.
Confirm the deletion to permanently remove the note.
7. Search Notes by Title
Enter a keyword in the search bar (on the right side of the page).
Notes matching the keyword will be displayed.
8. Filter Notes by Category
Select a category from the dropdown on the left side of the page.
Notes belonging to the selected category will be displayed.
Category Management
1. Create a Category
Navigate to the Create Category page.
Fill in the category name and click Create Category.
The new category will be added to the list of categories.
2. Delete a Category
To delete a category, click the Delete button next to the category you want to remove.
Confirm the deletion to permanently remove the category.
Support
If you have any questions or need further assistance, feel free to reach out:

Email: ridachaanoun..2@gmail.com
 
