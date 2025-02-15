# Tets Newtronic Solution Muhamad Erzie Aldrian Nugraha
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

silahkan Gunakan SQL yg tersedia atau lakukan Migration pada Project

<hr>

# CRUD Transaksi dan Crawl web

## 📌 Deskripsi Proyek
Proyek ini adalah aplikasi berbasis Laravel 11 yang menggunakan Laravel Breeze untuk autentikasi dan sistem manajemen pengguna. Proyek ini mendukung CRUD dan berbagai fitur lainnya dengan Blade sebagai templating engine.

## 🚀 Fitur
- **CRUD (Create, Read, Update, Delete)** untuk data utama
- **Autentikasi pengguna** menggunakan Laravel Breeze
- **Blade Templating Engine** untuk tampilan
- **Middleware & Proteksi Akses**
- **Tailwind CSS** untuk tampilan responsif
- **Crawl data** mengcrawl data https://www.smartdeal.co.id/rates/dki_banten dan menampilkannya menjadi JSON

## 📂 Struktur Proyek
```
app/
├── Http/
│   ├── Controllers/
│   │   ├── DashboardController.php 
│   │   ├── ProductController.php
│   │   ├── ProfileController.php
│   │   ├── TransactionController.php
│
├── Models/
│   ├── MasterCrawl.php
│   ├── MasterDetailTransaksi.php
│   ├── MasterProduk.php 
│   ├── MasterTransaksi.php
│   ├── User.php
│
resources/
├── views/
│   ├── auth/
│   ├── components/
│   ├── layouts/
│   ├── product/
│   │   ├── add-newProduct-form.blade.php
│   │   ├── edit-editProduct-form.blade.php
│   ├── profile/
│   ├── transaction/
│   │   ├── add-product-form.blade.php
│   │   ├── add-transaction-form.blade.php
│   ├── dashboard.blade.php
│   ├── product.blade.php
│   ├── transaction.blade.php
```

## 🔧 Instalasi & Konfigurasi
1. **Clone repositori & install dependencies**
   ```sh
   git clone https://github.com/erziealdrian02/test-newtronic.git
   cd test-newtronic/crud-transaction
   composer install
   cp .env.example .env
   php artisan key:generate
   ```
2. **Instalasi Laravel Breeze**
   ```sh
   php artisan breeze:install blade
   npm install && npm run dev
   ```
3. **Jalankan migration database**
   ```sh
   php artisan migrate
   ```
4. **Jalankan Laravel**
   ```sh
   php artisan serve
   ```
5. **Buka di browser**
   ```
   http://127.0.0.1:8000/login
   ```

## 🔥 Cara Menggunakan
1. Register atau login sebagai pengguna.
2. Kelola data melalui halaman dashboard.
3. Tambah, edit, atau hapus data dengan mudah.

## 📜 Lisensi
Proyek ini dilisensikan di bawah **MIT License**.

---
**Dibuat dengan ❤️ menggunakan Laravel 11 & Breeze** 🚀

<hr>

# Papan Skor Olahraga Real-Time dengan Laravel WebSockets

## 📌 Deskripsi Proyek
Proyek ini adalah sistem papan skor olahraga real-time menggunakan **Laravel WebSockets** tanpa API terpisah. Skor pertandingan diperbarui secara langsung di browser tanpa perlu refresh.

## 🚀 Fitur
- **Real-time update** menggunakan WebSockets
- **Tanpa API**, seluruh logika ada dalam satu proyek Laravel
- **CRUD pertandingan & skor** langsung dari Laravel Blade
- **Mendukung banyak pertandingan sekaligus**

## 📂 Struktur Proyek
```
app/
├── Events/
│   ├── ScoreUpdated.php
│
├── Http/
│   ├── Controllers/
│   │   ├── GameController.php
│
├── Models/
│   ├── Game.php
│
resources/
├── views/
│   ├── layouts/
│   │   ├── app.blade.php
│   ├── games/
│   │   ├── index.blade.php
```

## 🔧 Instalasi & Konfigurasi
1. **Clone repositori & install dependencies**
   ```sh
   git clone https://github.com/erziealdrian02/test-newtronic
   cd test-newtronic/newtronic-websocket
   composer install
   cp .env.example .env
   php artisan key:generate
   ```
2. **Jalankan migration database**
   ```sh
   php artisan migrate
   ```
3. **Konfigurasi WebSockets di `.env`**
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=fullstack-newtronic
   DB_USERNAME=root
   DB_PASSWORD={passwordnya apa}
   ```
4. **Konfigurasi WebSockets di `.env`**
   ```ini
   BROADCAST_DRIVER=pusher
   CACHE_DRIVER=file
   FILESYSTEM_DISK=local
   QUEUE_CONNECTION=sync
   SESSION_DRIVER=file
   SESSION_LIFETIME=120
   ```
5. **Jalankan WebSocket & Laravel**
   ```sh
   php artisan websockets:serve
   php artisan serve
   ```
7. **Nyalahkan WebSocket di browser**
   ``
   http://127.0.0.1:8000/laravel-websockets
   ``
6. **Buka di browser**
   ```
   http://127.0.0.1:8000/games
   ```

## 🔥 Cara Menggunakan
1. Tambahkan pertandingan baru di halaman `/games`
2. Update skor menggunakan form
3. Skor akan diperbarui secara **real-time** di semua browser yang terbuka!

## 📜 Lisensi
Proyek ini dilisensikan di bawah **MIT License**.

---
**Dibuat dengan ❤️ menggunakan Laravel & WebSockets** 🚀





