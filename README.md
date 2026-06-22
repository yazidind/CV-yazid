# 🚀 Personal CV & Portfolio Website

Website Personal CV dan Portfolio modern untuk Software Engineer / Fullstack Developer yang dibuat menggunakan **PHP tanpa database**. Seluruh data dikelola melalui file JSON sehingga mudah diperbarui tanpa perlu mengubah kode utama.

---

# ✨ Features

- Modern UI/UX Design
- Responsive Mobile, Tablet, Desktop
- Dark Mode Toggle
- Animated Hero Section
- Typing Text Effect
- Scroll Animation (AOS)
- Glassmorphism Portfolio Cards
- Modern Timeline Experience
- Education Timeline
- Skill Showcase
- Certification Showcase
- Download CV Button
- Contact Section
- SEO Friendly
- Fast Loading
- No Database Required
- Easy Content Management via JSON

---

# 🎯 Target User

Website ini dirancang untuk:

- Software Engineer
- Fullstack Developer
- Backend Developer
- Frontend Developer
- Mobile Developer
- Cloud Engineer
- Fresh Graduate
- Professional Developer

---

# 🛠 Tech Stack

## Backend

- PHP 8+

## Frontend

- HTML5
- CSS3
- JavaScript ES6

## UI Library

- Tailwind CSS / Bootstrap 5
- Font Awesome
- AOS Animation Library

## Data Storage

- JSON File

---

# 📁 Project Structure

```text
portfolio-cv/
│
├── assets/
│   │
│   ├── css/
│   │   ├── style.css
│   │
│   ├── js/
│   │   ├── app.js
│   │
│   └── images/
│       │
│       ├── profile/
│       │   └── profile.jpg
│       │
│       └── projects/
│           ├── project-1.jpg
│           ├── project-2.jpg
│           └── project-3.jpg
│
├── data/
│   │
│   ├── profile.json
│   ├── projects.json
│   ├── experience.json
│   ├── education.json
│   ├── certifications.json
│   └── skills.json
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── helper.php
│
├── downloads/
│   └── CV.pdf
│
├── index.php
│
└── README.md
```

---

# 📌 Website Sections

## 1. Hero Section

Menampilkan:

- Foto Profil
- Nama Lengkap
- Job Title
- Typing Animation
- Download CV Button
- Contact Button

---

## 2. About Me

Berisi:

- Ringkasan Profesional
- Background Pendidikan
- Fokus Karier
- Passion di Bidang Teknologi

---

## 3. Skills

Kategori:

### Frontend

- HTML
- CSS
- JavaScript
- Bootstrap
- Tailwind
- Flutter

### Backend

- PHP
- Laravel
- NodeJS
- ExpressJS

### Database

- PostgreSQL
- MySQL

### DevOps

- Docker
- Traefik
- GitHub Actions
- CI/CD

### Cloud

- AWS
- Azure
- Google Cloud Platform

---

## 4. Experience

Menggunakan Timeline Modern.

Contoh:

```text
Senior Software Engineer
2024 - Present

- Lead Development Team
- Cloud Infrastructure Design
- CI/CD Automation
```

---

## 5. Portfolio

Menampilkan:

- Thumbnail
- Nama Project
- Deskripsi
- Tech Stack
- Demo Link
- GitHub Link

Data diambil dari:

```text
data/projects.json
```

---

## 6. Education

Timeline Pendidikan:

```text
University of Oxford
Master of Science in Computer Science

2024 - 2026
```

```text
Universitas Merdeka Malang
S1 Sistem Informasi

2020 - 2024
```

---

## 7. Certifications

Menampilkan sertifikasi:

- AWS
- Azure
- Google Cloud
- Dicoding
- Coursera

---

## 8. Contact

Menampilkan:

- Email
- LinkedIn
- GitHub
- WhatsApp

---

# 📝 JSON Configuration

Semua data website berada dalam folder:

```text
/data
```

---

## profile.json

```json
{
  "name": "Robertho Wicaksono",
  "title": "Software Engineer",
  "subtitle": "Fullstack Developer & Cloud Engineer",
  "location": "Indonesia",
  "email": "email@example.com",
  "linkedin": "https://linkedin.com/in/username",
  "github": "https://github.com/username"
}
```

---

## skills.json

```json
[
  {
    "name": "Laravel",
    "level": "Advanced"
  },
  {
    "name": "Flutter",
    "level": "Intermediate"
  }
]
```

---

## projects.json

```json
[
  {
    "title": "Inventory Management System",
    "description": "Web-based inventory system",
    "image": "project-1.jpg",
    "tech": [
      "Laravel",
      "PostgreSQL",
      "Docker"
    ],
    "github": "#",
    "demo": "#"
  }
]
```

---

# 🎨 Design System

## Color Palette

```css
Primary
#2563eb
```

```css
Secondary
#0f172a
```

```css
Accent
#38bdf8
```

```css
Background
#f8fafc
```

---

## Typography

```text
Inter
```

atau

```text
Poppins
```

---

# ✨ Animation

## Hover Card

```css
transition: all .4s ease;
```

```css
transform: translateY(-10px) scale(1.03);
```

```css
box-shadow:
0 20px 40px rgba(37,99,235,.2);
```

---

## Scroll Animation

Menggunakan:

```text
AOS Library
```

Efek:

- Fade Up
- Fade Down
- Zoom In
- Zoom Out

---

## Typing Animation

Menampilkan:

```text
Software Engineer
Fullstack Developer
Cloud Engineer
AI Enthusiast
```

---

# 🌙 Dark Mode

Fitur:

- Toggle Button
- LocalStorage Save Preference
- Automatic Theme Detection

---

# 🔍 SEO Optimization

Meta Tags:

```html
<title>Robertho Wicaksono | Software Engineer</title>
```

```html
<meta name="description">
```

```html
<meta property="og:title">
```

```html
<meta property="og:image">
```

```html
<meta property="og:type">
```

---

# ⚡ Performance Target

- Lighthouse Score 90+
- Mobile Friendly
- Lazy Load Image
- Optimized Assets
- Minified CSS
- Minified JS

---

# 🚀 Local Development

## XAMPP

Letakkan project ke:

```text
htdocs/
```

Contoh:

```text
xampp/htdocs/portfolio-cv
```

Akses:

```text
http://localhost/portfolio-cv
```

---

## Laragon

Letakkan project ke:

```text
laragon/www
```

Akses:

```text
http://portfolio-cv.test
```

---

# 🌐 Deployment

Dapat di-deploy ke:

- Shared Hosting
- VPS
- DigitalOcean
- AWS EC2
- Hostinger
- Niagahoster
- Rumahweb

Karena:

✅ Tidak menggunakan database

✅ Tidak membutuhkan migrasi

✅ Tidak membutuhkan setup khusus

---

# 📈 Future Improvements

- Blog Section
- Multi Language
- Admin Panel JSON Editor
- Project Filtering
- GitHub API Integration
- Visitor Analytics
- Contact Form Email Integration

---

# 👨‍💻 Author

**Robertho Wicaksono**

Software Engineer | Fullstack Developer | Cloud Engineer

Universitas Merdeka Malang (S1 Sistem Informasi)

University of Oxford (M.Sc Computer Science)

---
Built with ❤️ using PHP