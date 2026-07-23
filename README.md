# Web-Development-and-Applications-Task-2
---------------------------------
# User Management System

## 📌 Project Description
A simple User Management System built using PHP and MySQL. The project allows users to add new records, store them in a database, and toggle the user's status between active and inactive.

## ✨ Features
- Add a new user
- Store user information in MySQL database
- Display all users in a table
- Toggle user status (0 / 1)
- Simple and responsive interface

## 🛠️ Technologies Used
- PHP
- MySQL
- HTML
- CSS
- JavaScript

## 📂 Project StructureUser-Management-System/
│── index.php
│── db.php
│── toggle.php
│── style.css
│── script.js

## 🚀 How to Run
1. Upload the project files to a PHP web server.
2. Create a MySQL database.
3. Import or create the required users table.
4. Update the database credentials in db.php.
5. Open the project in your browser.

## 🗄️ Database Structure
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    status TINYINT(1) NOT NULL DEFAULT 0
);

## 📸 Preview

- Add users
- View all users
- Toggle user status

## 👩‍💻 Author

Dana Abdullah
