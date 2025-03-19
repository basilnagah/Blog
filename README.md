# 📝 Simple Blog System  

A minimal blog system where users can **create, edit, delete, and view blog posts**. Built with **PHP & MySQL**, featuring a basic frontend for interaction.  

## 🚀 Features  
✅ View all blog posts  
✅ View a single blog post  
✅ Create a new post  
✅ Edit an existing post  
✅ Delete a post  

---

## 📌 Setup Instructions  

### 1️⃣ Prerequisites  
Ensure you have the following installed:  
- **PHP (≥7.4)**  
- **MySQL / MariaDB**  
- **Apache (or local server like XAMPP, WAMP, etc.)**  
- **Git** (optional, for cloning the repo)  

### 2️⃣ Database Setup  
1. Open **phpMyAdmin** or a MySQL terminal.  
2. Run the following SQL script:  

```sql
CREATE DATABASE BlogDB;
USE BlogDB;
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

## 🔧 Installation
### 1️⃣ Clone the Repository 
git clone https://github.com/yourusername/blog-system.git
cd blog-system

### 2️⃣ Running the Project
1- Move the project to your server’s root directory (htdocs for XAMPP, www for WAMP).
2- Start Apache & MySQL.
3- Open your browser and navigate to:
👉 http://localhost/blog-system
🚀 You should now see the blog homepage!
