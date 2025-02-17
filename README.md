<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## DOKUMENTASI PROYEK PORTAL BERITA

Daftar Isi

1. Pendahuluan
2. Prasyarat
3. Instalasi dan Konfigurasi
4. Penggunaan Aplikasi
5. Penutup

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Pendahuluan

Portal berita ini dirancang untuk menyajikan berita terkini dengan berbagai kategori, menampilkan artikel-artikel populer, dan memungkinkan pengguna untuk memberikan komentar pada artikel. Proyek ini dibangun menggunakan framework Laravel 11.

## Prasyarat

Sebelum memulai instalasi, pastikan Anda memiliki hal-hal berikut:
1. PHP >= 8.1
2. Composer
3. Laragon atau XAMPP

## Instalasi dan Konfigurasi

Ikuti langkah-langkah berikut untuk menginstal aplikasi:
1. Clone Repository

```bash
git clone https://github.com/RyanArdyan/portal_berita.git
```

2. Masuk ke proyek
   
```bash
cd portal-berita
```

3. Instal Dependensi Jalankan perintah berikut untuk menginstal dependensi PHP menggunakan Composer:
```bash
composer install
```

4. Buat File .env Salin file .env.example menjadi .env
```bash
cp .env.example .env
```

5. Generate Kunci Aplikasi Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
```bash
php artisan key:generate
```

6. Konfigurasi Database Buka file .env dan sesuaikan pengaturan database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
```

7. Migrasi Database Jalankan migrasi untuk membuat tabel di database:
```bash
php artisan migrate
```

8. Seed Database untuk mengisi database dengan data
```bash
php artisan db:seed
```

9. Membuat symbolic link dari direktori penyimpanan (storage) ke direktori publik (public)
```bash
php artisan storage:link
```

10. Jalankan Aplikasi Anda dapat menjalankan server pengembangan dengan perintah:
```bash
php artisan serve
```

## Penggunaan Aplikasi
Setelah aplikasi berjalan, Anda dapat mengaksesnya melalui browser. Berikut adalah beberapa fitur utama yang tersedia:
1. Halaman utama menampilkan daftar berita dan artikel populer
2. Halaman detail artikel dengan fitur komentar.
3. Panel admin untuk mengelola berita, kategori, dan komentar.
4. Fitur pencarian dan filter kategori berfungsi dengan baik.

## Penutup
Dokumentasi ini memberikan panduan dasar untuk menginstal, mengkonfigurasi, dan menggunakan aplikasi portal berita yang dibangun dengan Laravel 11. Jika Anda memiliki pertanyaan lebih lanjut, silakan buka repository GitHub untuk informasi lebih lanjut.


## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
