# **Dokumen Persyaratan Bisnis (BRD)**  
### **Proyek:** Aplikasi Cek Jadwal Kuliah  
**Versi:** 1.0  
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

## **5. Model, Migrasi, Seeder, dan Resource yang Dibutuhkan**

### **Schedules**
- **Model**: `Schedules`. Menyimpan rincian lengkap jadwal (hari, tanggal, jam mulai, jam berakhir, durasi, mata kuliah, pertemuan ke-n, dosen, ruangan).
**Migration**: Struktur tabel berikut ini akan dibuat pada database:
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

---

## **Riwayat Dokumen**

| Versi | Tanggal       | Penulis         | Deskripsi                          |
|-------|---------------|-----------------|------------------------------------|
| 1.0   | 11-11-2024    | Aqla Harun R J  | Draft dokumen awal                 |
| 1.0   | 13-11-2024    | Aqla Harun R J  | Penyesuaian fitur roles pada mahasiswa |

---
