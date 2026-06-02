## Laravel Authentication & Breeze

Implementasi dan kustomisasi sistem autentikasi menggunakan Laravel 12 dan Laravel Breeze (Blade Stack).

### Fitur yang di Implementasikan:
1. Registrasi User
2. Login dan Logout
3. Dashboard
4. Edit Profil
5. Halaman Admin

### Teknologi yang digunakan:
    - Laravel 12++
    - PHP 8.2
    - MySQL
    - Laravel Breeze

### Panduan Instalasi dan Menjalankan Project:
1. Clone Repository
    https://github.com/Lordyblade/tugasPweb-authBreeze.git

2. Buka terminal dan jalankan perintah berikut:
    git clone https://github.com/Lordyblade/tugasPweb-authBreeze.git

3. Masuk ke folder Project
    cd tugasPweb-authBreeze

4. Install Dependency:
    ```bash
    composer install
    npm install
    ```

5. Konfigurasi Environement
    Buat file .env dengan perintah berikut:
    ```bash
    copy .env.example .env
    ```

6. Generate Application Key 
    Generate dengan perintah berikut:
    ```bash
    php artisan key:generate
    ```

7. Konfigurasi Database
    Buat database pada phpMyAdmin
    Contoh: auth_demo

    Sesuaikan file .env menjadi seperti berikut:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=auth_demo
    DB_USERNAME=root
    DB_PASSWORD=

9. Jalankan Migration dan Seeder dengan perintah berikut:
    ```bash
    php artisan migrate --seed
    ```

10. Jalankan aplikasi (buka 2 terminal terpisah):
    Terminal 1:
    ```bash
    npm run dev
    ```
    Terminal 2:
    ```bash
    php artisan serve
    ```

11. Akses halaman aplikasi pada browser dengan link berikut: http://127.0.0.1:8000

### Panduan Pengujian

### Test Role User Biasa
1. Buka http://127.0.0.1:8000/register.
2. Lakukan pendaftaran. Isi formulir pendaftaran, dan isi kolom No.HP.
3. Setelah register, pengguna akan masuk ke Dashboard.
4. Klik menu Profile di sudut kanan atas.
5. Coba ubah Nomor HP pengguna lalu klik Save, lalu check apakah data berhasil diperbarui atau belum.
6. Logout.

### Test Role Admin/Administrator
Untuk mempermudah proses pengujian, akun admin telah disediakan melalui Seeder.
**Email   : admin@gmail.com**
**Password: admin123**
1. Buka http://127.0.0.1:8000/login.
2. Masukkan Email dan Pasword yang sudah disediakan
3. Setelah berhasil masuk ke Dashboard, terdapat menu baru pada bagian Navbar/navigasi yaitu 'Admin'. Merupakan Halaman Admin yang berfungsi    untuk menampilkan daftar semua user yang telah terdaftar di database.
4. *Halaman Admin ini hanya bisa diakses oleh user dengan role admin, jika pada user biasa menu 'Admin' pada bagian navbar tidak akan muncul, dan jika coba akses http://127.0.0.1:8000/admin maka akan muncul pesan forbidden


---


Author
Nama: Ibrahim Mousa Dhani
NIM: 2411532010
Mata Kuliah: Pemrograman Web