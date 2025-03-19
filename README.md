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
- Open a terminal or command prompt.  
- Run the following command:  

```sh
git clone https://github.com/basilnagah/Blog
cd Blog



