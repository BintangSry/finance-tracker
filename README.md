CATATAN KEUANGAN PRIBADI
=========================

Proyek ini adalah aplikasi pencatatan keuangan pribadi sederhana berbasis web, menggunakan:
- HTML
- Tailwind CSS (CDN)
- PHP Native
- MySQL (localhost)

FITUR
-----
- Tambah transaksi (pemasukan & pengeluaran)
- Lihat daftar transaksi
- Hapus transaksi
- Total tersimpan di database MySQL lokal

STRUKTUR FOLDER
---------------
```
.
├── index.php           # Halaman utama (list transaksi)
├── add.php             # Form tambah transaksi
├── save.php            # Proses simpan data
├── delete.php          # Proses hapus data
├── db.php              # Koneksi database
└── db/
    └── finance_db.sql  # File SQL hasil export database
```

CARA INSTALL & MENJALANKAN
--------------------------
1. **Clone atau Download proyek ini**
   - Jika dari GitHub:
     ```
     git clone https://github.com/username/nama-repo.git
     ```

2. **Pindahkan folder ke dalam direktori web server lokal**
   - Contoh untuk XAMPP:
     ```
     C:\xampp\htdocs\finance-tracker\
     ```

3. **Import database MySQL**
   - Buka `phpMyAdmin`
   - Buat database baru dengan nama: `finance_db`
   - Import file: `db/finance_db.sql`

4. **Edit file koneksi database jika perlu (`db.php`)**
   ```php
   $host = 'localhost';
   $user = 'root';       // sesuaikan dengan user database kamu
   $pass = '';           // sesuaikan dengan password database kamu
   $db   = 'finance_db';
   ```
5. **Jalankan website di browser**
   ```
   http://localhost/finance-tracker/index.php
   ```
