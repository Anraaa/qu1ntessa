# 🚀 Panduan Setup **SampleApp**

Panduan ini akan memandu Kalian dalam mengonfigurasi **SampleApp** menggunakan Docker, termasuk pengaturan dependency, konfigurasi lingkungan, dan pembuatan model. Ikuti langkah-langkah di bawah ini untuk memudahkan proses setup.

## ⚙️ Persiapan Awal

1. **Ekstrak File Proyek**  
   ```bash
   unzip sampleapp.zip
   ```

   ```bash
   cd sampleapp
   ```

2. **Jalankan Docker**
   Buka Docker terlebih dahulu lalu ketik
   ```bash
   docker compose up -d
   ```

3. **Masuk ke dalam Container**
   ```bash
   docker exec -it sample bash
   ```

4. **Buat Proyek dengan Composer**
   ```bash
   composer create-project --prefer-dist raugadh/fila-starter .
   ```

---

## 🔧 Konfigurasi Lingkungan
1. **Edit File `.env`**
   Sesuaikan konfigurasi di file `.env` sesuai kebutuhan proyek kalian.

2. **Generate Kunci Aplikasi**
   ```bash
   php artisan key:generate
   ```

3. **Buat Link Storage**
   ```bash
   php artisan storage:link
   ```

4. **Jalankan Migrasi Database**
   ```bash
   php artisan migrate
   ```

5. **Atur Izin Akses**
   ```bash
   chown -R www-data:www-data storage/*
   chown -R www-data:www-data bootstrap/*
   ```

6. **Inisialisasi Proyek**
   ```bash
   php artisan project:init
   ```

## 🧩 Pembuatan dan Konfigurasi Model

1. **Buat Model `Schedules`**  
   Gunakan flag `-ms` untuk secara otomatis membuat migration dan seeder:
   ```bash
   php artisan make:model Schedules -ms
   ```

2. **Sesuaikan Migration**
   
   Buka file migration yang dihasilkan di dalam folder database/migrations dan sesuaikan skema sesuai kebutuhan proyek.

3. **Sesuaikan Seeder**
   Sesuaikan seeder pada file database/seeders untuk menambahkan data awal pada tabel Schedules jika diperlukan.

4. **Sesuaikan Model**
   Edit model Schedules di dalam folder app/Models sesuai dengan kebutuhan analisis Anda.

---

## 🎉 Langkah Terakhir

1. **Generate Filament Resource**
   ```bash
   php artisan make:filament-resource Schedules --generate
   ```

2. **Jalankan Migrasi**
   ```bash
   php artisan migrate
   ```

3. **Inisialisasi Ulang Proyek**
   ```bash
   php artisan project:init
   ```

---

## Yuhuu kelar 🎉