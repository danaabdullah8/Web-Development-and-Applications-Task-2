# Web-Development-and-Applications-Task-2
---------------------------------
# Web Development and Applications – Task 2

## User Management System

A simple web-based User Management System developed using PHP and MySQL.  
The system allows users to add new records, display stored users, and change their status using the Toggle action.

## 🌐 Live Demo

[View the Live Project](https://dana2026.42web.io)

## 📸 Project Preview

![User Management System Preview](preview.jpg)

## ✨ Features

- Add a new user by entering a name and age
- Store user information in a MySQL database
- Display all users in a table
- Toggle the user status between 0 and 1
- Simple and user-friendly interface
- Live deployment using InfinityFree

## 🛠️ Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL
- InfinityFree
- phpMyAdmin

## 📂 Project Structure
Web-Development-and-Applications-Task-2/
│
├── index.php
├── db.php
├── toggle.php
├── style.css
├── script.js
├── preview.jpg
└── README.md

## 🗄️ Database Structure
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    status TINYINT(1) NOT NULL DEFAULT 0
);

## 🚀 How to Run the Project

1. Install and open XAMPP.
2. Start Apache and MySQL.
3. Place the project folder inside:
C:\xampp\htdocs\

4. Create a MySQL database using phpMyAdmin.
5. Create the users table using the provided SQL code.
6. Update the database connection details in db.php.
7. Open the project in the browser:
http://localhost/user-management/

## 👩‍💻 Author

Dana Abdullah
