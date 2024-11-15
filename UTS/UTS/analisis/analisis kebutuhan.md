# Analisis Kebutuhan Sistem Simpan Pinjam Kendaraan

## 1. Kebutuhan Fungsional
Kebutuhan fungsional adalah kebutuhan yang berkaitan langsung dengan fungsionalitas sistem, yang akan dijalankan oleh pengguna untuk memenuhi tujuan bisnis.

1. **Manajemen Kendaraan oleh Admin**
   - **Penambahan Kendaraan**: Admin harus bisa menambahkan data kendaraan baru ke dalam sistem, termasuk informasi seperti nomor registrasi, jenis kendaraan, kapasitas, dan status kendaraan.
   - **Pembaruan Status Kendaraan**: Admin harus bisa memperbarui status kendaraan, misalnya mengubah status menjadi "tersedia," "dipinjam," atau "dalam perawatan."
   - **Penghapusan Data Kendaraan**: Admin dapat menghapus data kendaraan yang tidak lagi relevan atau sudah tidak digunakan agar data dalam sistem tetap akurat.

2. **Akses Kendaraan oleh Pengguna**
   - **Pencarian Kendaraan**: Pengguna harus dapat mencari kendaraan berdasarkan kriteria tertentu seperti jenis kendaraan, kapasitas, atau ketersediaan.
   - **Melihat Detail Kendaraan**: Pengguna dapat melihat detail kendaraan, termasuk spesifikasi, status ketersediaan, dan durasi maksimal peminjaman.
   - **Pemesanan/Peminjaman Kendaraan**: Pengguna dapat memesan atau meminjam kendaraan melalui sistem, yang akan diajukan untuk persetujuan oleh Admin.

3. **Persetujuan Peminjaman oleh Admin**
   - **Persetujuan Peminjaman**: Setiap peminjaman kendaraan harus mendapatkan persetujuan dari Admin. Sistem perlu mendukung proses persetujuan ini agar hanya kendaraan yang disetujui bisa dipinjam.

## 2. Kebutuhan Non-Fungsional
Kebutuhan non-fungsional adalah aspek-aspek yang tidak langsung terkait dengan fungsi sistem, tetapi penting untuk pengalaman pengguna dan keberlanjutan sistem.

1. **Keamanan**
   - Sistem harus memiliki mekanisme otentikasi untuk memastikan bahwa hanya pengguna yang memiliki hak akses yang dapat masuk dan melakukan tindakan pada sistem (misalnya, hanya Admin yang bisa menghapus data kendaraan).
   - Data peminjaman harus aman dan terlindungi dari akses yang tidak sah.

2. **Ketersediaan**
   - Sistem harus tersedia sepanjang waktu kerja, atau sesuai dengan kebutuhan operasional perusahaan, agar pengguna dapat mengakses informasi kendaraan dan melakukan peminjaman kapanpun dibutuhkan.

3. **Kemudahan Penggunaan**
   - Antarmuka sistem harus user-friendly sehingga memudahkan pengguna dalam mengakses dan menggunakan fitur yang tersedia, baik untuk pencarian, pemesanan, maupun manajemen kendaraan.

4. **Audit Trail**
   - Sistem harus mencatat setiap perubahan data penting, seperti penambahan, pembaruan, atau penghapusan data kendaraan, serta persetujuan peminjaman. Hal ini penting untuk melacak aktivitas dalam sistem dan melakukan audit jika diperlukan.

5. **Skalabilitas**
   - Sistem harus mampu menangani penambahan data kendaraan yang cukup besar jika perusahaan menambah jumlah kendaraan dalam inventaris, serta menangani banyak transaksi peminjaman kendaraan secara simultan.

6. **Kinerja**
   - Sistem harus mampu memberikan respons cepat dalam proses pencarian kendaraan, melihat detail kendaraan, dan pemesanan, agar pengguna tidak mengalami keterlambatan atau waktu tunggu yang lama.

## 3. Kebutuhan Operasional
1. **Hak Akses Berbasis Peran**
   - Sistem harus memiliki pengaturan hak akses berdasarkan peran (role-based access control), di mana Admin memiliki hak penuh untuk mengelola data kendaraan, sementara pengguna hanya memiliki hak untuk melihat dan memesan kendaraan.

2. **Integrasi**
   - Jika dibutuhkan, sistem harus bisa diintegrasikan dengan aplikasi lain, seperti sistem manajemen inventaris atau sistem pemantauan kendaraan, untuk memastikan data selalu up-to-date dan konsisten.

3. **Pelaporan dan Pemantauan**
   - Sistem perlu menyediakan laporan status kendaraan, jumlah peminjaman, dan riwayat peminjaman, sehingga Admin dapat memantau penggunaan kendaraan dan memastikan ketersediaannya.

---

Dengan memenuhi kebutuhan-kebutuhan di atas, sistem simpan pinjam kendaraan akan lebih efektif dalam memfasilitasi pengelolaan kendaraan, memberikan pengalaman pengguna yang baik, serta menjaga keamanan dan keandalan data.
