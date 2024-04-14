# Skill_Synergy
Skill Synergy is a web application designed to provide an interactive platform for students, instructors, and administrators to manage educational activities efficiently.

## Description
This project is a PHP-based web application that allows users to log in with different roles (student, instructor, or admin) and access corresponding dashboards. Each user role has different functionalities and permissions within the system.
## Features

- **User Authentication**: Users can log in with their unique ID and password, along with selecting their user type (student, instructor, or admin).
- **Role-Based Access Control**: Depending on the selected user type, users are redirected to their respective dashboards with specific functionalities.
- **Dashboard for Students**: Students can access features tailored to their needs, such as viewing course materials, submitting assignments, and tracking progress.
- **Dashboard for Instructors**: Instructors can manage courses, upload course materials, grade assignments.
- **Dashboard for Admins**: Admins have access to administrative features, such as managing user accounts, courses, and system settings.

## Installation

To run this project locally, follow these steps:

1. Clone this repository to your local machine.
2. Set up a PHP development environment (e.g. XAMPP).
3. Import the provided database schema (`db.sql`) into your MySQL database.
4. Update the database connection details in the `db.php` file to match your local environment.
5. Start your PHP development server.
6. Access the application in your web browser by navigating to `http://localhost/skill-synergy`.

## Usage

1. Open the application in your web browser.
2. Click on the "Log In" button to access the login form.
3. Enter your user ID, password, and select your user type (student, instructor, or admin).
4. Upon successful authentication, you will be redirected to the corresponding dashboard based on your user type.
