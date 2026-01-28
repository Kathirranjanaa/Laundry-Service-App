# 🧺 Laundry Service Booking Web Application (IS3)

## 📌 Project Overview

IS3 is a **full-stack laundry service booking web application** that allows users to log in, browse nearby laundry shops, select desired services, and book laundry pickups easily.

This project is designed to simulate a **real-world laundry service aggregator**, where customers can choose from multiple laundry providers and services through a single platform. The application is hosted **locally using XAMPP**, and all data is stored using **SQLite3**.

The project focuses on combining **frontend user experience**, **backend logic**, and **database management** into a single integrated system.

---

## 🎯 Problem Statement

Managing laundry services manually is time-consuming and inconvenient for customers. There is a need for a centralized platform where users can:

- View available laundry shops  
- Compare services  
- Book laundry pickups easily  
- Track the service workflow  

**IS3** solves this problem by providing a **simple, user-friendly web interface** backed by a functional server-side system.

---

## ✨ Features

- User registration and login system  
- OTP-based user interaction  
- Display of multiple laundry shops with ratings  
- Selection of multiple laundry services  
- Laundry pickup and delivery workflow  
- Admin-side data display using PHP  
- Responsive single-page website design  
- Local database storage using SQLite3  

---

## 🛠️ Tech Stack

### Frontend
- HTML  
- CSS  
- JavaScript  

### Backend
- PHP  
- Python  

### Database
- SQLite3  

### Local Hosting
- XAMPP (Apache Server)

---

## 📂 Repository Structure

```text
Laundry-Service-App/
├── laundry shops/           # Images of laundry shops
├── services/                # Service-related UI assets
├── work/                    # Workflow images (pickup, delivery, etc.)
│
├── index.html               # Main UI page
├── index.php                # PHP entry point
├── style.css                # Main stylesheet
├── login-popup.css          # Login modal styling
├── script.js                # Client-side logic
│
├── login.php                # User login logic
├── register.php             # User registration logic
├── send_otp.php             # OTP handling
├── display.php              # Data display logic
├── display_users.php        # User data display
├── create_database.php      # Database creation script
├── create_users_table.php   # Table creation script
│
├── laundry.db               # SQLite database
│
├── composer.json            # PHP dependency configuration
├── composer.lock            # Dependency lock file
│
├── LICENSE                  # MIT License
└── README.md                # Project documentation
🚀 How to Run the Project Locally
Follow these steps carefully:

1️⃣ Install XAMPP
Download and install XAMPP from:
👉 https://www.apachefriends.org

2️⃣ Move Project to htdocs
Copy the entire project folder into:

C:\xampp\htdocs\Laundry-Service-App
3️⃣ Start Apache Server
Open XAMPP Control Panel

Start Apache

4️⃣ Initialize Database
Open your browser and run:

http://localhost/Laundry-Service-App/create_database.php
http://localhost/Laundry-Service-App/create_users_table.php
5️⃣ Run the Application
Open:

http://localhost/Laundry-Service-App/index.html
✅ The application should now be running successfully.

📊 Database Details
Database Type: SQLite3

Database File: laundry.db

Stores:
User information

Booking details

Service selections

🧠 Learning Outcomes
Through this project, I gained hands-on experience in:

Full-stack web development

Frontend–backend integration

Database design using SQLite3

Local server deployment using XAMPP

Real-world business problem modeling

Project structuring and version control using GitHub

🚧 Limitations
Hosted locally (not deployed online)

No payment gateway integration

Basic authentication (can be enhanced)

🔮 Future Enhancements
Online deployment (AWS / Render / Railway)

Payment gateway integration

Role-based authentication (Admin / User)

Real-time order tracking

Migration to MySQL / PostgreSQL

REST API architecture

👤 Author
Kathir Ranjanaa S.
🔗 LinkedIn: https://www.linkedin.com/in/kathir-ranjanaa-s/
📧 Email: kathirranjanaas@gmail.com

⭐ Acknowledgements
This project was built as part of my learning journey in full-stack development and entrepreneurship, focusing on creating real-world, scalable solutions.


---

### ✅ Important (Don’t skip this)
- Paste **exactly as-is** into `README.md`
- Click **Commit changes**
- GitHub will automatically convert it into a **clean, professional README**

If you want next:
- 🔥 Add **badges (HTML, PHP, SQLite, XAMPP)**
- 📌 Optimize README for **recruiters**
- 📄 Convert this into **resume project points**
- 🚀 Prepare **deployment version**

Just tell me 👍
