# 🚀 Sistem Manajemen Konten - CI4 + Tailwind CSS

Ini adalah proyek Sistem Manajemen Konten berbasis **CodeIgniter 4** dan **Tailwind CSS** yang sudah mencakup beberapa modul penting dan menggunakan **JWT** untuk autentikasi API. Seluruh tampilan dirancang dengan **TailwindCSS**, tanpa tambahan template eksternal.

## ✨ Fitur Utama

- 🔐 Autentikasi menggunakan **JWT**
- 🧑‍💼 CRUD **Admin**
- 🎞️ CRUD **Slider**
- 🚍 CRUD **Armada**
- 🖼️ CRUD **Galeri**
- ⚡ Full styling dengan **TailwindCSS**

## 🛠️ Teknologi yang Digunakan

- [CodeIgniter 4](https://codeigniter.com/)
- [Tailwind CSS](https://tailwindcss.com/)
- [JWT Authentication](https://jwt.io/)
- MySQL (opsional sesuai kebutuhan)

## 📂 Struktur Direktori Utama
/app
├── Controllers/
│ └── AdminController.php
│ └── SliderController.php
│ └── ArmadaController.php
│ └── GaleriController.php
├── Models/
├── Views/
│ └── admin/
│ └── slider/
│ └── armada/
│ └── galeri/
├── Filters/
│ └── AuthFilter.php (untuk JWT)



## ⚙️ Instalasi

1. **Clone repositori**
   ```bash
   git clone https://github.com/Muhammadfathanfauzan/BlogCI4TalwindCSS.git
   cd nama-project

composer install

database.default.hostname = localhost
database.default.database = nama_database
database.default.username = root
database.default.password =
app.baseURL = 'http://localhost:8080/'

php spark migrate

npm install
npx tailwindcss -i ./public/input.css -o ./public/output.css --watch
php spark serve

Authorization: Bearer <token>
