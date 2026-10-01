# TugasWeb-P9-LaravelSetup

Project ini dibuat untuk memenuhi **Tugas Rutin 9 — Setup Laravel** pada mata kuliah **Pemrograman Web**.

## Informasi Project

- Framework: Laravel 12.69.3
- PHP: 8.2.12
- Database: MySQL
- Database Name: `laravel_p9`
- Server lokal: Laravel Development Server (`php artisan serve`)

## Requirement Tugas

Project ini mencakup requirement utama Tugas Rutin 9:

1. Project Laravel dibuat menggunakan Composer.
2. Database MySQL dibuat melalui phpMyAdmin dan dikonfigurasi melalui `.env`.
3. Laravel dijalankan menggunakan `php artisan serve`.
4. Tersedia tiga custom route: `/`, `/about`, dan `/contact`.
5. View menampilkan data dinamis berupa array mata kuliah.
6. Menggunakan `make:controller` dan `make:model -m` minimal satu kali.
7. README berisi langkah instalasi dan penjelasan struktur folder.
8. Nama project/repository: `TugasWeb-P9-LaravelSetup`.

## Fitur Project

- Halaman Home
- Halaman About
- Halaman Contact
- Navigasi Home, About, dan Contact
- Data dinamis daftar mata kuliah
- Controller `PageController`
- Model `P9Demo`
- Migration `p9_demos`
- Konfigurasi database MySQL

## Instalasi dan Menjalankan Project

### 1. Persyaratan

Pastikan sudah tersedia:

- PHP 8.2 atau lebih baru
- Composer
- MySQL (XAMPP)
- Git

### 2. Clone Repository

```bash
git clone https://github.com/andreassianturi11/TugasWeb-P9-LaravelSetup.git
cd TugasWeb-P9-LaravelSetup
```

### 3. Install Dependency

```bash
composer install
```

### 4. Konfigurasi Environment

Buat file `.env` dari `.env.example` jika belum tersedia.

Windows CMD:

```bat
copy .env.example .env
```

Kemudian atur koneksi database pada `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_p9
DB_USERNAME=root
DB_PASSWORD=
```

> Sesuaikan `DB_PASSWORD` apabila MySQL `root` pada komputer menggunakan password.

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Buat Database

Buka phpMyAdmin dan buat database dengan nama:

```text
laravel_p9
```

Pastikan MySQL XAMPP sedang aktif.

### 7. Jalankan Migration

```bash
php artisan migrate
```

Migration akan membuat tabel bawaan Laravel serta tabel `p9_demos` yang digunakan pada project ini.

### 8. Jalankan Server

```bash
php artisan serve
```

Buka browser pada:

```text
http://127.0.0.1:8000
```

## Route

| Method | URL | Halaman |
|---|---|---|
| GET | `/` | Home |
| GET | `/about` | About |
| GET | `/contact` | Contact |

Daftar route dapat diperiksa dengan:

```bash
php artisan route:list
```

## Data Dinamis

Halaman Home menampilkan daftar mata kuliah secara dinamis. Data disiapkan pada `PageController` dan dikirim ke Blade view, kemudian ditampilkan menggunakan perulangan Blade.

Daftar mata kuliah yang digunakan:

- Pemrograman Web
- Struktur Data
- Sistem Operasi
- Organisasi dan Arsitektur Komputer

## Controller, Model, dan Migration

Controller dibuat menggunakan Artisan:

```bash
php artisan make:controller PageController
```

Model dan migration dibuat menggunakan:

```bash
php artisan make:model P9Demo -m
```

File utama:

- `app/Http/Controllers/PageController.php`
- `app/Models/P9Demo.php`
- `database/migrations/2026_09_30_000000_create_p9_demos_table.php`

## Struktur Folder

```text
TugasWeb-P9-LaravelSetup/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── PageController.php
│   └── Models/
│       └── P9Demo.php
├── bootstrap/
├── config/
├── database/
│   └── migrations/
│       ├── 0001_01_01_000000_create_users_table.php
│       ├── 0001_01_01_000001_create_cache_table.php
│       ├── 0001_01_01_000002_create_jobs_table.php
│       └── 2026_09_30_000000_create_p9_demos_table.php
├── public/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── welcome.blade.php
│       ├── about.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php
├── storage/
├── tests/
├── artisan
├── composer.json
├── composer.lock
├── .env.example
└── README.md
```

### Fungsi Folder Utama

- `app/` — tempat kode utama aplikasi, termasuk Controller dan Model.
- `database/` — berisi migration dan file yang berkaitan dengan database.
- `resources/views/` — berisi tampilan Blade.
- `routes/` — berisi definisi route aplikasi.
- `public/` — document root yang dapat diakses browser.
- `storage/` — penyimpanan file, cache, dan log aplikasi.
- `bootstrap/` — konfigurasi awal aplikasi.
- `config/` — file konfigurasi Laravel.

## Pengujian

### 1. Pengujian Server

Jalankan:

```bash
php artisan serve
```

Kemudian buka:

```text
http://127.0.0.1:8000
```

### 2. Pengujian Route

Buka satu per satu:

```text
http://127.0.0.1:8000/
http://127.0.0.1:8000/about
http://127.0.0.1:8000/contact
```

### 3. Pengujian Data Dinamis

Ubah sementara isi array `courses` pada `PageController.php`, simpan, lalu refresh halaman Home. Daftar mata kuliah pada halaman akan berubah sesuai isi array.

### 4. Pengujian Database

Pastikan database `laravel_p9` tersedia di phpMyAdmin dan migration berhasil dijalankan tanpa error.

## Catatan Keamanan

File `.env` berisi konfigurasi lokal dan tidak boleh di-commit ke repository GitHub.

Gunakan `.env.example` sebagai template konfigurasi untuk pengguna lain yang menjalankan project.

## Identitas

- Nama: Andreas Tumpal Daniel Sianturi
- Mata Kuliah: Pemrograman Web
- Tugas: Tugas Rutin 9 — Setup Laravel
