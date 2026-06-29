
# 👞 SOL Sepatu Web

### Sistem Point of Sales (POS) Reparasi Sepatu Berbasis Laravel

Aplikasi **SOL Sepatu Web** merupakan sistem Point of Sales (POS) berbasis web yang dirancang untuk membantu proses operasional usaha reparasi sepatu. Sistem ini memudahkan pengelolaan pelanggan, transaksi, status pengerjaan, pengelolaan layanan, hingga penyusunan laporan penjualan secara efisien dalam satu aplikasi.

---

## ✨ Fitur

- 📊 Dashboard Admin
- 👥 Manajemen Pelanggan
- 👞 Manajemen Produk & Layanan
- 💰 Transaksi Point of Sales (POS)
- 🔧 Status Pengerjaan Sepatu
- 👨‍🔧 Manajemen Teknisi & Karyawan
- 📈 Laporan Penjualan
- 🔐 Manajemen User & Hak Akses
- 📱 Antarmuka Responsif

---

## 🛠 Teknologi

| Teknologi | Versi |
|-----------|--------|
| Laravel | 12 |
| PHP | 8.3+ |
| Filament | v5 |
| MySQL | 8+ |
| Livewire | v3 |
| Tailwind CSS | v4 |

---

## 📦 Instalasi

Clone repository

```bash
git clone https://github.com/username/sol-sepatu-web.git
````

Masuk ke folder project

```bash
cd sol-sepatu-web
```

Install dependency

```bash
composer install
```

Salin file environment

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Atur konfigurasi database pada file `.env`

```env
DB_DATABASE=sol_sepatu
DB_USERNAME=root
DB_PASSWORD=
```

Jalankan migrasi database

```bash
php artisan migrate
```

Jika tersedia seeder

```bash
php artisan db:seed
```

Jalankan aplikasi

```bash
php artisan serve
```

Akses melalui browser

```
http://127.0.0.1:8000
```

---

## 📂 Struktur Project

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

---

## 👥 Hak Akses

* Administrator

---

# 📸 Tampilan Aplikasi

## Halaman Website

<img width="1910" alt="Home" src="https://github.com/user-attachments/assets/cd3d6e7e-4934-4217-8833-34b362220bdc">

<img width="1900" alt="Layanan" src="https://github.com/user-attachments/assets/f6212564-e530-4371-8df6-11640833de51">

<img width="1892" alt="Produk" src="https://github.com/user-attachments/assets/3a14c973-214a-4bd6-8f93-8bb40563efd1">

<img width="1890" alt="Tentang Kami" src="https://github.com/user-attachments/assets/be66436e-ace2-4d9d-9dfa-cd8a10841878">

<img width="1864" alt="Kontak" src="https://github.com/user-attachments/assets/59bfbb9a-95a7-4429-9ce7-d40e07ede9d5">

<img width="1894" alt="Footer" src="https://github.com/user-attachments/assets/05e94a37-4b58-426a-a943-4919dd6c3422">

---

## Dashboard Admin

<img width="1915" alt="Dashboard" src="https://github.com/user-attachments/assets/827e13fa-7d80-486d-b227-b2c68ed7fe10">

---

## 📄 Lisensi

Project ini dikembangkan sebagai bagian dari penelitian dan tugas akademik mengenai implementasi **Framework Laravel** dalam pembangunan sistem **Point of Sales (POS) Reparasi Sepatu**.

---

## 👨‍💻 Developer

**Agung Dwi Susilo**

Teknik Informatika

Universitas Semarang

2026

```
```
