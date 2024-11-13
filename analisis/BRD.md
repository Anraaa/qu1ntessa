# **Dokumen Persyaratan Bisnis (BRD)**  
### **Proyek:** Aplikasi Cek Jadwal Kuliah  
**Versi:** 1.2
**Tanggal:** 11 November 2024  

---

## **1. Tujuan Proyek**
- **Objektif**: Aplikasi ini bertujuan mempermudah mahasiswa mengecek jadwal mingguan dan membantu admin mengelola jadwal secara efisien.

---

## **2. Fitur Utama**

### **Untuk Mahasiswa**
- **Melihat Jadwal**: Akses jadwal kuliah mingguan dengan rincian, seperti:
  - Hari
  - Tanggal
  - Jam mulai dan selesai
  - Durasi waktu
  - Nama mata kuliah
  - Pertemuan ke-n
  - Dosen
  - Ruangan

### **Untuk Admin**
- **Pengelolaan Jadwal**: Menambah, mengubah, dan menghapus jadwal kuliah dengan informasi lengkap.

---

## **3. Persyaratan Fungsional**

### **Sistem Login**
- **Akses Berdasarkan Peran**: Mahasiswa dan admin dapat login dengan hak akses berbeda.

### **Pengaturan & Tampilan Jadwal**
- **Admin**: Mengelola jadwal (input, update, delete).
- **Mahasiswa**: Hanya melihat jadwal yang dibuat oleh admin.

---

## **4. Persyaratan Non-Fungsional**

- **Kegunaan**: Antarmuka mudah digunakan oleh mahasiswa dan admin.
- **Keamanan**:
  - Hanya admin yang bisa mengelola jadwal.
  - Mahasiswa hanya dapat melihat informasi tanpa hak pengelolaan.

---

## **5. Model, Migrasi, Seeder, dan Resource yang Perlu Dibuat Pada Container `docker exec -it sample bash`**

### **Schedules**
- **Model**: `Schedules`. Menyimpan rincian lengkap jadwal (hari, tanggal, jam mulai, jam berakhir, durasi, mata kuliah, pertemuan ke-n, dosen, ruangan).
- **Migration**: Struktur tabel berikut ini akan dibuat pada database:
  - `id`: `bigint UNSIGNED` (Primary Key)
  - `day`: `varchar(255)` - Menyimpan hari perkuliahan
  - `date`: `date` - Tanggal perkuliahan
  - `start_time`: `time` - Waktu mulai perkuliahan
  - `end_time`: `time` - Waktu berakhir perkuliahan
  - `duration_time`: `varchar(255)` - Durasi perkuliahan
  - `course_name`: `varchar(255)` - Nama mata kuliah
  - `meeting_number`: `int(11)` - Nomor pertemuan
  - `lecturer`: `varchar(255)` - Nama dosen
  - `room`: `varchar(255)` - Ruangan perkuliahan
  - `created_at`: `timestamp` - Waktu data dibuat
  - `updated_at`: `timestamp` - Waktu data diubah
- **Seeder**: Data jadwal awal untuk pengujian.
- **Resource**: Endpoint API untuk data jadwal, dapat diakses oleh mahasiswa dan admin.
  
### **Permissions**
- **Model**: `Permission`. Mengelola daftar permissions yang mengatur hak akses mahasiswa.
  
- **Seeder**: `PermissionsSeeder`, bertugas menambahkan permissions dan menetapkannya ke role `mahasiswa`

  - **Permissions untuk Mahasiswa**:
    - `view_schedules`: Mengizinkan mahasiswa melihat jadwal kuliah.
    - `view_any_schedules`: Mengizinkan mahasiswa melihat rincian semua jadwal yang tersedia.

#### Mengapa Migration Permissions Tidak Dibuat? 

Karena saat membuat proyek baru dengan perintah `composer create-project --prefer-dist raugadh/fila-starter .`, migrasi untuk tabel permissions sudah disediakan oleh spatie/laravel-permission. Paket ini secara otomatis mengatur tabel dan kolom yang diperlukan untuk permissions dan roles, sehingga tidak perlu membuat migrasi permissions secara manual.

---

## **6. Analisis Permissions untuk Mahasiswa dan Admin**

Pada proyek aplikasi cek jadwal kuliah ini, permissions diperlukan untuk membatasi akses mahasiswa terhadap fitur yang sesuai dengan kebutuhan dan peran mereka, sementara admin memiliki akses penuh ke seluruh sistem. Permissions ini memastikan mahasiswa hanya dapat melihat informasi jadwal tanpa dapat melakukan perubahan.

### **Permissions yang Diperlukan**

Mahasiswa hanya memerlukan akses terbatas untuk melihat informasi terkait jadwal kuliah, tanpa hak untuk menambah, mengedit, atau menghapus data. Berikut adalah permissions yang akan diberikan kepada role mahasiswa:

1. **Permissions untuk Mahasiswa**
   - `view_schedules`: Mengizinkan mahasiswa melihat daftar jadwal kuliah.
   - `view_any_schedules`: Mengizinkan mahasiswa melihat rincian dari semua jadwal yang tersedia.

### **Implementasi Model dan Seeder untuk Permissions**

#### **Model: `Permission`**

Model `Permission` disediakan oleh paket Spatie Laravel Permission. Model ini akan menyimpan data permissions dengan atribut berikut:
- `id`: Primary key dari permission.
- `name`: Nama dari permission (contoh: `view_schedules`).
- `guard_name`: Guard untuk permission (default: `web`).

#### **Seeder: PermissionsSeeder**
Seeder PermissionsSeeder akan digunakan untuk membuat dan menetapkan permissions kepada role mahasiswa, memungkinkan mereka mengakses informasi jadwal sesuai dengan hak yang ditentukan. Admin akan memiliki akses penuh secara default, sehingga tidak diperlukan seeder khusus untuk admin.

---

## **Changelog**

| Versi | Tanggal       | Penulis         | Deskripsi                          |
|-------|---------------|-----------------|------------------------------------|
| 1.0   | 11-11-2024    | Aqla Harun R J  | Draft dokumen awal                 |
| 1.1   | 13-11-2024    | Aqla Harun R J  | Penyesuaian fitur roles pada mahasiswa |
| 1.2   | 13-11-2024    | Aqla Harun R J  | Penyesuaian permissions pada mahasiswa |

---
