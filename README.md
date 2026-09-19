# Product Information System

Mini Project PHP Fundamental — membuat katalog produk sederhana.

## Tujuan

Menampilkan daftar produk (ID, nama, kategori, harga, stok, deskripsi) beserta total nilai stok, dengan produk yang stoknya kurang dari 3 ditandai sebagai stok kritis.

## Struktur File

| File | Fungsi |
|---|---|
| `products.php` | Data Layer — menyimpan data produk dalam multidimensional array |
| `functions.php` | Processing Layer — fungsi `hitungTotalNilaiStok()` untuk menghitung total nilai stok |
| `index.php` | Presentation Layer — menggabungkan data & fungsi, menampilkan tabel HTML |

## Alur Program

```
products.php  --(data produk)-->  index.php
functions.php --(hasil hitung)--> index.php
index.php     --(require_once)--> render tabel HTML
```

## Konsep yang Diterapkan

- Multidimensional array & associative array (data produk)
- Function & return (`hitungTotalNilaiStok()`)
- Conditional `if` (penanda stok kritis < 3)
- `foreach` (menampilkan tiap baris produk)
- `require_once` (menghubungkan antar file)

## Cara Menjalankan

**Menggunakan XAMPP:**
1. Salin folder project ke `C:/xampp/htdocs/`
2. Jalankan Apache
3. Buka `http://localhost/mini-project1/`

**Menggunakan PHP built-in server:**
```bash
php -S localhost:8000
```
Lalu buka `http://localhost:8000`

## Catatan

Data produk masih ditulis langsung di dalam file PHP (belum menggunakan database).
