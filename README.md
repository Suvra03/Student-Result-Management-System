# Student Result Management System

## Overview
The **Student Result Management System** is a web-based application designed to efficiently record, manage, and analyze academic results. It aims to streamline administrative processes, reduce manual errors, and provide quick access to accurate academic records for both educators and students.

## Features
- **Admin Dashboard**: Manage students, courses, subjects, and results.
- **Student Dashboard**: View personal academic records and notices.
- **Notice Board**: Disseminate important academic information.
- **Result Generation**: Automate the calculation of SGPA/CGPA based on letter grades and credit points.

---

## How to Run the Project

### Prerequisites
- [XAMPP](https://www.apachefriends.org/index.html) (or any other local server like WAMP/MAMP)
- Web Browser (Chrome, Firefox, etc.)

### Installation Steps
1. **Clone/Download the Project:**
   ```bash
   git clone https://github.com/Suvra03/Student-Result-Management-System.git
   ```
2. **Move to Server Directory:**
   Copy the project folder to `C:\xampp\htdocs\` (if using XAMPP).
3. **Start Local Server:**
   Open the XAMPP Control Panel and start **Apache** and **MySQL**.
4. **Setup Database:**
   - Open your browser and go to `http://localhost/phpmyadmin`.
   - Click on the **Import** tab.
   - Choose the file `db/db.sql` from the project directory.
   - Click **Go** (The database `SMS` will be created automatically).
5. **Run the Application:**
   - Visit `http://localhost/Student-Result-Management-New/login_page.php` in your browser.

---

## Login Details

### Admin Login
| Username | Password |
| :--- | :--- |
| `jefa` | `admin1` |
| `hoof` | `admin2` |
| `hovding` | `admin3` |
| `honcho` | `admin4` |
| `capa` | `admin5` |

### Student Login (Demo)
| Roll No | Password |
| :--- | :--- |
| `UT-211-023-0001` | `2003-01-29` |

> **Note:** The default password for students is typically their Date of Birth (YYYY-MM-DD).

---

## Project Screenshots
![Dashboard](https://github.com/Suvra03/Student-Result-Management-System/assets/96880067/d68b24b6-1aaf-417b-9817-67a4dbb00955)
![Result View](https://github.com/Suvra03/Student-Result-Management-System/assets/96880067/71e3caf1-32d4-418a-b28e-b3a6ec22d835)

---

## Authors
- **Subhra Kinkar Deka**
- **Sonjyoti Rabha**

*Project developed for BCA 5th Semester at LCB College, Guwahati.*
