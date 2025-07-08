# Sales Order System (PHP + MySQL)

Sistem manajemen Sales Order sederhana berbasis web menggunakan PHP dan MySQL. Aplikasi ini mendemonstrasikan integrasi backend CRUD dengan desain UI berbasis Bootstrap 5.


## 🎯 Tujuan Proyek

- Menghubungkan PHP dengan database MySQL.
- Menerapkan operasi CRUD pada tabel `customers` dan `employees`.
- Menampilkan laporan customer per negara.
- Menerapkan Bootstrap untuk antarmuka modern.
- Menambahkan fitur pencarian dan pagination.


## 🧩 Fitur

✅ CRUD `Customers`  
✅ CRUD `Employees`  
✅ Laporan customer per negara  
✅ Pencarian data  
✅ Pagination (10 per halaman)  
✅ Validasi penghapusan dengan foreign key  
✅ Desain modern dengan Bootstrap 5  
✅ Navigasi dari halaman utama (`index.php`)


## 🚀 Instalasi

### 1. Aktifkan XAMPP / Laragon
Jalankan:
- Apache
- MySQL

### 2. Import Database
- Akses: `http://localhost/phpmyadmin`
- Buat database baru: `salesorder`
- Import file SQL (`salesorder.sql`) yang disediakan

### 3. Extract Proyek
- Ekstrak folder ke: `htdocs` (XAMPP) atau `www` (Laragon)
- Akses via browser:  
  `http://localhost/salesorder_project/index.php`


## 📂 Struktur Folder

```

salesorder\_project/
├── index.php
├── koneksi.php
├── list\_customers.php
├── add\_customer.php
├── edit\_customer.php
├── delete\_customer.php
├── list\_employees.php
├── add\_employee.php
├── edit\_employee.php
├── delete\_employee.php
├── laporan\_customer.php
└── README.md

```

## ⚠️ Penanganan Error

Jika muncul pesan seperti:

> `Cannot delete or update a parent row: a foreign key constraint fails ...`

Berarti data masih digunakan oleh entitas lain. Misalnya:
- `customer` masih punya `order`
- `employee` menjadi atasan (`reportsTo`) dari karyawan lain

Solusi:
- Update atau hapus data turunan terlebih dahulu
- Atau atur foreign key dengan `ON DELETE SET NULL`


## 👤 Author

Developed by: **Hamzan Wahyudi**  
Modul Praktikum Pemrograman Web – **Modul 14: Integrasi PHP dan MySQL**

## 📜 Lisensi

Proyek ini dibuat untuk keperluan pembelajaran. Bebas digunakan untuk pengembangan lebih lanjut. Harap tetap menyertakan atribusi.