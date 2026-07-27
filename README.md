# Klinik Desain & Kemasan (KDK) UMKM — Company Profile Website

Website company profile untuk **Klinik Desain & Kemasan UMKM**, dibangun menggunakan Laravel dengan admin panel berbasis Filament v4. Website ini menampilkan layanan, portofolio, dan berita perusahaan, serta menyediakan form kontak yang terintegrasi langsung dengan panel admin.

## ✨ Fitur

### Halaman Publik
- **Home** — hero section, ringkasan layanan unggulan, portofolio terbaru, dan berita terkini
- **Tentang Kami** — sejarah, visi & misi, serta tim
- **Layanan** — daftar layanan (list + halaman detail per layanan)
- **Portofolio** — galeri proyek yang telah dikerjakan (list + detail, dengan pagination)
- **Berita/Blog** — artikel & update terkini (list + detail, dengan pagination)
- **Kontak** — form kontak yang tersimpan otomatis ke admin panel, dilengkapi validasi
- Navigasi responsif dengan mobile menu (hamburger)
- SEO dasar: meta description per halaman, sitemap.xml otomatis dari database

### Admin Panel (Filament v4)
- **Service** — kelola layanan (judul, slug otomatis, deskripsi, gambar, status aktif, urutan tampil)
- **Portfolio** — kelola portofolio (kategori, klien, tahun, gambar)
- **Article** — kelola artikel dengan Rich Text Editor, status publish terjadwal
- **Message** — daftar pesan masuk dari form kontak (read-only, dengan badge notifikasi pesan belum dibaca)
- **Setting** — pengaturan umum (nama perusahaan, alamat, kontak, sosial media) yang otomatis tersinkron ke seluruh halaman publik
- Dashboard dengan **Stats Overview** (ringkasan jumlah layanan, portofolio, artikel, dan pesan belum dibaca)

## 🛠️ Tech Stack

| Kategori | Teknologi |
|---|---|
| Backend | Laravel 12 |
| Admin Panel | Filament v4 |
| Database | MySQL |
| Frontend | Blade Templating, Tailwind CSS v4 |
| Build Tool | Vite |
| Local Dev | Laragon |

## 🎨 Desain

Tampilan halaman publik diadaptasi dan dimodifikasi dari template **[ScrewFast](https://themewagon.github.io/screwfast/)** oleh [ThemeWagon](https://themewagon.com/) (Astro + Tailwind CSS + Preline UI), yang telah disesuaikan sepenuhnya ke Laravel Blade dan vanilla JavaScript (tanpa dependency Astro/Preline), serta disesuaikan dengan identitas brand Klinik Desain & Kemasan UMKM.

## 🚀 Instalasi & Setup

### Prasyarat
- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL

### Langkah instalasi

```bash
# Clone repository
git clone https://github.com/ahmadjailani22/web-kdk-solok.git
cd web-kdk-solok

# Install dependency PHP
composer install

# Install dependency Node.js
npm install

# Copy file environment
cp .env.example .env
php artisan key:generate
```

Sesuaikan konfigurasi database di file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_kdk_solok
DB_USERNAME=root
DB_PASSWORD=
```

Lanjutkan setup:

```bash
# Jalankan migration
php artisan migrate

# Isi data awal Setting (nama perusahaan, kontak, dll)
php artisan db:seed --class=SettingSeeder

# Buat symlink storage (wajib untuk menampilkan gambar upload)
php artisan storage:link

# Buat akun admin
php artisan make:filament-user
```

Jalankan development server (2 terminal terpisah):

```bash
# Terminal 1 — Laravel
php artisan serve

# Terminal 2 — Vite (compile Tailwind CSS)
npm run dev
```

Akses:
- Website publik: `http://127.0.0.1:8000`
- Admin panel: `http://127.0.0.1:8000/admin`

## 📁 Struktur Folder Penting

```
app/
  Filament/
    Resources/        → CRUD admin panel (Service, Portfolio, Article, Message, Setting)
    Widgets/           → Widget dashboard (Stats Overview)
  Http/Controllers/
    PageController.php → Controller halaman publik
  Models/               → Service, Portfolio, Article, Message, Setting

resources/
  views/
    layouts/app.blade.php  → Layout utama (header, footer, navigasi)
    pages/                  → Semua halaman publik
  css/app.css               → Konfigurasi Tailwind CSS

database/
  migrations/          → Skema tabel
  seeders/
    SettingSeeder.php  → Data awal pengaturan perusahaan

routes/web.php          → Routing halaman publik
```

## 📦 Build untuk Production

```bash
npm run build
```

## 📄 Lisensi

Project ini dibuat untuk kebutuhan internal Klinik Desain & Kemasan UMKM.
