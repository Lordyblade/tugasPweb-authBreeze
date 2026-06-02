# Tugas Pemrograman Web

## Implementasi Laravel Authentication & Laravel Breeze

Assalaamu'alaikum Warahmatullaahi Wabarakaatuh.

Repository ini merupakan hasil pengerjaan Tugas Mata Kuliah **Pemrograman Web** yang berfokus pada implementasi dan kustomisasi sistem autentikasi menggunakan **Laravel 12** dan **Laravel Breeze (Blade Stack)**.

---

# Deskripsi Proyek

Proyek ini mengimplementasikan sistem autentikasi berbasis Laravel Breeze yang telah dikembangkan untuk memenuhi seluruh ketentuan Tugas Mandiri pada modul praktikum.

Fitur tambahan yang diimplementasikan meliputi:

* Penambahan Nomor Handphone (No HP)
* Manajemen Profil Pengguna
* Sistem Role (User dan Admin)
* Middleware Admin
* Halaman Admin untuk melihat seluruh data pengguna

---

# Fitur yang Diimplementasikan

## Fitur Bawaan Laravel Breeze

* Registrasi Pengguna
* Login
* Logout
* Dashboard
* Edit Profil
* Penghapusan Akun

## Tugas 1 – Penambahan No. HP

Implementasi:

* Menambahkan kolom `no_hp` pada tabel `users`
* Menambahkan field No. HP pada form registrasi
* Validasi:

  * wajib diisi
  * hanya angka
  * minimal 10 digit
* Menampilkan No. HP pada Dashboard

Status: ✅ Selesai

---

## Tugas 2 – Update No. HP pada Profil

Implementasi:

* Menambahkan field No. HP pada halaman Profile
* User dapat memperbarui nomor handphone
* Data tersimpan ke database

Status: ✅ Selesai

---

## Tugas 3 – Role dan Halaman Admin

Implementasi:

* Menambahkan kolom `role` pada tabel users
* Role tersedia:

  * `user`
  * `admin`
* Membuat `AdminMiddleware`
* Membuat route khusus `/admin`
* Membatasi akses halaman admin hanya untuk role admin
* Menampilkan seluruh data user pada halaman admin

Status: ✅ Selesai

---

# Teknologi yang Digunakan

| Teknologi      | Versi          |
| -------------- | -------------- |
| PHP            | 8.2+           |
| Laravel        | 12             |
| Laravel Breeze | Latest         |
| MySQL          | 8+             |
| Node.js        | Latest         |
| Tailwind CSS   | Default Breeze |

---

# Instalasi Project

## 1. Clone Repository

```bash
git clone https://github.com/USERNAME/REPOSITORY.git
cd REPOSITORY
```

## 2. Install Dependency

```bash
composer install
npm install
```

## 3. Konfigurasi Environment

Windows:

```bash
copy .env.example .env
```

Linux / Mac:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

---

## 4. Konfigurasi Database

Buat database baru pada phpMyAdmin:

```text
auth_demo
```

Kemudian sesuaikan file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=auth_demo
DB_USERNAME=root
DB_PASSWORD=
```

---

## 5. Jalankan Migration dan Seeder

```bash
php artisan migrate --seed
```

Perintah ini akan:

* Membuat seluruh tabel database
* Membuat akun admin untuk pengujian

---

## 6. Menjalankan Aplikasi

Terminal 1:

```bash
npm run dev
```

Terminal 2:

```bash
php artisan serve
```

Akses aplikasi:

```text
http://127.0.0.1:8000
```

---

# Akun Admin Pengujian

Untuk mempermudah proses penilaian, akun admin telah disediakan melalui Seeder.

**Email:**

```text
admin@example.com
```

**Password:**

```text
password123
```

---

# Panduan Pengujian

## Pengujian Tugas 1

### Langkah

1. Buka halaman Register.
2. Daftarkan akun baru.
3. Isi seluruh data termasuk No. HP.
4. Login ke Dashboard.

### Hasil yang Diharapkan

✅ User berhasil terdaftar

✅ No. HP tersimpan di database

✅ No. HP tampil pada Dashboard

✅ Validasi berjalan dengan benar

---

## Pengujian Tugas 2

### Langkah

1. Login ke aplikasi.
2. Buka menu Profile.
3. Ubah No. HP.
4. Klik Save.

### Hasil yang Diharapkan

✅ Data berhasil diperbarui

✅ No. HP tersimpan di database

✅ Data tetap tersimpan setelah halaman direfresh

---

## Pengujian Tugas 3

### Login Sebagai Admin

Gunakan akun:

```text
Email    : admin@example.com
Password : password123
```

### Akses Halaman Admin

Buka:

```text
http://127.0.0.1:8000/admin
```

### Hasil yang Diharapkan

✅ Halaman admin dapat diakses

✅ Daftar seluruh user tampil

✅ Data yang tampil meliputi:

* ID
* Nama
* Email
* Role

---

### Pengujian Hak Akses

1. Register akun baru sebagai user biasa.
2. Login menggunakan akun tersebut.
3. Akses:

```text
http://127.0.0.1:8000/admin
```

### Hasil yang Diharapkan

✅ Akses ditolak

✅ Muncul halaman **403 Forbidden**

---

# Struktur Fitur

### User

* Dashboard
* Edit Profile
* Update No. HP

### Admin

* Dashboard
* Edit Profile
* Halaman Admin
* Melihat seluruh data user

---

# Checklist Penilaian

| Fitur                | Status |
| -------------------- | ------ |
| Laravel Breeze       | ✅      |
| Register             | ✅      |
| Login                | ✅      |
| Logout               | ✅      |
| No HP pada Register  | ✅      |
| Validasi No HP       | ✅      |
| No HP pada Dashboard | ✅      |
| No HP pada Profile   | ✅      |
| Update No HP         | ✅      |
| Role User/Admin      | ✅      |
| Admin Middleware     | ✅      |
| Route /admin         | ✅      |
| Halaman Admin        | ✅      |
| Daftar Seluruh User  | ✅      |

---

# Author

**Nama:** [Nama Anda]

**NIM:** [NIM Anda]

**Mata Kuliah:** Pemrograman Web

**Framework:** Laravel 12 + Laravel Breeze

---

Wassalaamu'alaikum Warahmatullaahi Wabarakaatuh.
