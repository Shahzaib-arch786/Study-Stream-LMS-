# 📚 Study Stream LMS

**Study Stream LMS** is a PHP-based Learning Management System designed to efficiently manage past papers, courses, and users. Built for educational institutions, it empowers admins, teachers, and students with seamless access to academic resources within a secure, role-based environment.

---

## 🚀 Features

- 🔐 **Role-based User Authentication**  
  Secure login system for Admins, Teachers, and Students using sessions.

- 📄 **Past Paper Management**  
  Admins and Teachers upload, categorize, and manage past question papers (PDF/DOC) by course & semester.

- 🎓 **Course & Subject Handling**  
  Create and assign subjects, courses, and semesters. Manage assignments across different user groups.

- 🧑‍🏫 **Teacher Dashboard**  
  Easily upload/manage paper files and track student access.

- 👨‍🎓 **Student Dashboard**  
  Browse accessible past papers, download them, and view course structure.

- 📊 **Admin Control Panel**  
  Full administrative capabilities including user management (create/edit/delete users), managing subjects/courses, and overseeing resources.

---

## 🛠️ Tech Stack

- **Backend**: PHP (procedural or MVC structure)  
- **Database**: MySQL (via `mysqli` or PDO)  
- **Frontend**: HTML, CSS (Bootstrap), JavaScript (vanilla/jQuery)  
- **File Handling**: PHP file upload implementation  
- **Security**: Password hashing, session validation, input sanitization

---

## 📂 Folder Structure

```text
Study-Stream-LMS/
├── assets/                 # CSS, JS, fonts, images
├── uploads/                # Uploaded past papers
├── includes/               # Common includes (header, footer, db connection)
├── auth/                   # Login, logout, session control
├── admin/                  # Admin panel files (user & subject management)
├── teacher/                # Teacher dashboard and upload tools
├── student/                # Student interface and paper browsing
├── db/                     # SQL scripts (tables, seed data)
└── README.md
````

---

## 🔧 Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/Shahzaib-arch786/Study-Stream-LMS-.git
cd Study-Stream-LMS-
```

### 2. Database Setup

* Create a new MySQL database, e.g., `study_stream_lms`.
* Import SQL schema:

  ```bash
  mysql -u your_user -p study_stream_lms < db/schema.sql
  ```
* Adjust default admin credentials in the schema or insert manually.

### 3. Configure Application

* Copy `.env.example` to `.env` (or manually edit `includes/config.php`).
* Update database credentials and upload settings.

### 4. Prepare the Server

* Place project folder in your web‑root (e.g., `htdocs` or `www`).
* Ensure `uploads/` directory is writable (`chmod 775`).

### 5. Access the Application

* Open browser and go to:

  ```
  http://localhost/Study-Stream-LMS/
  ```
* Login as Admin → Set up Teachers, Students, Subjects, and begin uploading papers.

---

## 🌐 Usage Workflow

1. **Admin** logs in → creates Teacher/Student accounts → defines Courses & Subjects
2. **Teacher** logs in → selects subject → uploads past paper
3. **Student** logs in → browses subjects → views/downloads papers

---

## 🔒 Security & Validation

* Passwords stored using `password_hash()`
* Sanitized all user input via `mysqli_real_escape_string()` / `htmlspecialchars()`
* Restricted dashboard pages with session-based role checks

---

## ✨ Future Enhancements

* 🔍 Enhanced search & filters by year, subject, keywords
* 📝 Built‑in PDF viewer with annotations
* 📧 Email notifications for new uploads
* 🤝 Messaging & Q\&A interface
* 📱 Mobile‑friendly responsive redesign

---

## 🤝 Contributing

Pull requests are welcome! For significant changes, please open an issue to discuss ideas and implementation plans.

---

## 📄 License

This project is MIT‑licensed — feel free to fork, adapt, and contribute!

---

## 🙋 Author

Developed and maintained by [Shahzaib](https://github.com/Shahzaib-arch786)

```

---

### ✅ What You Can Customize:
- Swap `.env` for `config.php` if not using env files.
- Add screenshots or demo GIFs under `assets/preview/`.
- Insert badges for PHP version, license, and CI status.
- Provide example admin credentials for testing (e.g., `admin@example.com / password123`).

```
