<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<!-- MasterHead -->

<h1 align="center">Notes Application</h1>
<h3 align="center">Built with Laravel and Tailwind CSS</h3>

---

### 🚀 About The Project:  
-  This is a **Notes Management** application.
-  Users can **create**, **view**, **edit**, and **delete** notes.
-  Notes can be **categorized** and **filtered** by title or category.
-  For any questions or support, reach out to [ridachaanoun.ff.2@gmail.com](mailto:ridachaanoun.ff.2@gmail.com).


### 🛠 Technologies Used:  
<p align="center">
  <img src="https://skillicons.dev/icons?i=laravel,tailwindcss,mysql,php,git" alt="Technologies" />
</p>

---

### 📄 Project Installation:

#### Prerequisites
Ensure you have the following installed:
- **PHP** (version 8.1 or higher)
- **Composer** (for managing PHP dependencies)
- **Node.js** and **npm** (for frontend dependencies)
- **MySQL** (for database management)

#### Step 1: Install Dependencies

1. Clone the repository:
   ```bash
   git clone https://github.com/ridachaanoun/Gestion-des-notes.git
   cd Gestion-des-notes
2. Install PHP and Node.js dependencies:

    ```bash
    composer install
    npm install
3. Build the frontend assets:
    ```bash
    npm run dev
    
Step 2: Set Up Environment Variables
1. Copy the .env.example file to .env:
    ```bash
    cp .env.example .env
2. Configure the database and other environment settings in the .env file.
3. Generate the application key:
4. ```bash
    php artisan key:generate

Step 3: Serve the Application
1. Start the Laravel development server:    
    ```bash
    php artisan serve
By default, the application will be available at http://localhost:8000.
Getting Started

---
1. Log In
Open the application and log in using your credentials.
After logging in, you will be directed to the dashboard.
2. Dashboard
The dashboard is the main view where you can manage your notes. From here, you can create, view, edit, and delete notes.

3. Create a Note
Navigate to the Create Note page.
Fill in the form with the note title, content, and category.
Click Create Note to save the note.
4. View Notes
Navigate to the Notes page to see all your notes.
Notes are displayed in a paginated view, with 9 notes per page.
Each note displays its title, content, and category.
Use the pagination controls to navigate between pages.
5. Edit a Note
Click the Edit button next to the note you wish to modify.
Update the note’s title or content, then click Update Note to save the changes.
6. Delete a Note
Click the Delete button next to the note you wish to remove.
Confirm the deletion to permanently remove the note.
7. Search Notes by Title
Enter a keyword in the search bar located on the right side of the page.
Notes matching the search keyword will be displayed.
8. Filter Notes by Category
Select a category from the dropdown on the left side of the page.
Notes belonging to the selected category will be displayed.
Category Management
1. Create a Category
