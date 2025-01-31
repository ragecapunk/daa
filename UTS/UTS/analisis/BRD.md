# Business Requirement Document (BRD)
## Sistem Simpan Pinjam Kendaraan

### 1. Introduction
#### 1.1 Purpose of Document
Dokumen ini adalah Business Requirement Document (BRD) untuk sistem pengelolaan simpan pinjam kendaraan. Dokumen ini mendeskripsikan alur kerja dan kebutuhan fungsional untuk mencatat, mengelola, serta mengakses data kendaraan yang disimpan dan dipinjam oleh pengguna.

#### 1.2 Project Scope
Sistem ini akan mencakup modul-modul berikut:
- **Manajemen Kendaraan Simpan Pinjam**: Admin dapat mengelola data kendaraan, termasuk penambahan, pembaruan status, serta penghapusan data kendaraan yang tidak aktif.
- **Akses dan Peminjaman Kendaraan**: Pengguna dapat mencari, melihat detail kendaraan, serta memesan kendaraan untuk dipinjam.

### 2. System Requirement
#### 2.1 Business Flow
- **Manajemen Kendaraan Simpan Pinjam**:
  - Admin dapat menambahkan data kendaraan baru ke dalam sistem simpan pinjam.
  - Admin dapat memperbarui status kendaraan, misalnya tersedia, dipinjam, atau dalam perawatan.
  - Admin dapat menghapus data kendaraan yang tidak lagi relevan.

- **Akses dan Peminjaman Kendaraan**:
  - Pengguna dapat mencari kendaraan berdasarkan kriteria tertentu, seperti jenis kendaraan, kapasitas, atau ketersediaan.
  - Pengguna dapat melihat detail kendaraan, termasuk spesifikasi, status ketersediaan, dan durasi maksimal peminjaman.
  - Pengguna dapat memesan kendaraan melalui sistem.

### 3. Business Requirement
#### 3.1 Fungsional Requirement
| No | Kebutuhan Modul/Doctype                      | Status               |
|----|----------------------------------------------|----------------------|
| 1  | **Manajemen Kendaraan Simpan Pinjam**        | Modul/doctype baru   |
|    | - Menambah kendaraan                         |                      |
|    | - Memperbarui status kendaraan               |                      |
|    | - Menghapus data kendaraan                   |                      |
| 2  | **Akses dan Pemesanan Kendaraan**            | Modul/doctype baru   |
|    | - Mencari kendaraan                          |                      |
|    | - Melihat detail kendaraan                   |                      |
|    | - Meminjam kendaraan                          |                      |

### 4. Approval
| No | Modul/Doctype                       | Tingkat Approval                                                                       |
|----|-------------------------------------|----------------------------------------------------------------------------------------|
| 1  | **Manajemen Kendaraan Simpan Pinjam** | Admin memiliki hak penuh untuk menambah, memperbarui, atau menghapus data kendaraan.    |
| 2  | **Akses dan Peminjaman Kendaraan**    | Pemesanan kendaraan membutuhkan persetujuan admin sebelum kendaraan dapat dipinjam.     |
