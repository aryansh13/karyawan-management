# Karyawan Management

## Deskripsi

Karyawan Management adalah aplikasi berbasis web yang dibangun dengan Laravel untuk mengelola informasi karyawan dan cuti mereka. Aplikasi ini menyediakan fitur CRUD karyawan, filter untuk menampilkan karyawan baru, serta manajemen cuti.

## Fitur

- **CRUD Karyawan**: Menambahkan, mengedit, dan menghapus data karyawan.
- **Filter Karyawan Baru**: Menampilkan karyawan yang baru bergabung.
- **Daftar Cuti**: Menampilkan daftar cuti yang diajukan oleh karyawan.
- **Sisa Cuti**: Menampilkan sisa cuti setiap karyawan dengan kuota cuti 12 hari per tahun.

## Halaman

1. **Login**
   - Masuk menggunakan email dan password:
     - Email: `admin@example.com`
     - Password: `password`

2. **Daftar Karyawan**
   - Menampilkan daftar karyawan dengan informasi nomor induk, nama, dan sisa cuti.
   - Fitur filter untuk menampilkan karyawan baru yang baru bergabung.

3. **Daftar Cuti**
   - Menampilkan daftar cuti yang diajukan oleh karyawan.

4. **Sisa Cuti**
   - Menampilkan sisa cuti setiap karyawan.

## Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/repository-name.git

2. **Masuk ke Direktori Proyek**
    ```bash
    cd repository-name
    composer install

3. **Instal Dependensi**
    ```bash
    composer install

4. **Salin File Konfigurasi**
 - Salin file .env.example menjadi .env
    ```bash
    cp .env.example .env

5. **Instal Dependensi**
    ```bash
    composer install

6. **Jalankan Migrasi Database**
    ```bash
    php artisan migrate

7. **Jalankan Aplikasi**
    ```bash
    php artisan serve

## Penggunaan

- **Login**: Akses halaman login di ```bash http://localhost:8000/login.
- **Daftar Karyawan**: Akses halaman daftar karyawan di ```bash http://localhost:8000/karyawan.
- **Daftar Cuti**: Akses halaman daftar cuti di ```bash http://localhost:8000/cuti.
- **Sisa Cuti**: Akses halaman sisa cuti di ```bash http://localhost:8000/sisa-cuti.
