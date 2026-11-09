# Website Portofolio - UTS Pemrograman Web

Tugas UTS mata kuliah Pemrograman Web.

- Nama: Mohamad Fauzi Febrianto
- NIM: 252410102006
- Program Studi: Teknologi Informasi
- Fakultas: Ilmu Komputer, Universitas Jember

## Tentang Website

Website portofolio sederhana yang saya buat pakai Laravel dengan Blade dan pola MVC. Isinya halaman login, dashboard, profile, dan pengelolaan portofolio.

Website ini tidak memakai database. Biodata, skill, kontak, dan daftar proyek disimpan sebagai array di `PageController`, lalu dikirim ke view.

## Fitur

- **Login**: username tidak boleh kosong dan harus terdaftar. Kalau salah, muncul pesan error.
- **Dashboard**: sapaan sesuai username, serta jumlah proyek dan skill.
- **Profile**: biodata, skill, dan kontak.
- **Pengelolaan**: tabel proyek yang datanya dari controller dan ditampilkan dengan `@foreach`.
- **Dark mode**: tombol di pojok kanan bawah, pilihan tema tersimpan di browser.
- **Responsif**: tampilan menyesuaikan layar HP. Di layar kecil ada hamburger menu setelah login.

## Username Login

```
fauzi
```

Hanya username ini yang diterima. Tidak ada password.

## Alur Data

1. Username diisi di form login (method POST).
2. `authenticate()` di `PageController` mengecek username, lalu redirect ke dashboard dengan parameter `?username=...`.
3. Dashboard, profile, dan pengelolaan membaca parameter itu dengan `$request->query('username')`.
4. Link di navbar membawa username yang sama ke halaman lain.
5. Kalau parameter username tidak ada, pengguna dikembalikan ke halaman login.

## Struktur File Utama

```
routes/web.php
app/Http/Controllers/PageController.php
resources/views/
├── layouts/app.blade.php
├── partials/head.blade.php
├── components/
│   ├── navbar.blade.php
│   └── footer.blade.php
├── login.blade.php
├── dashboard.blade.php
├── profile.blade.php
└── pengelolaan.blade.php
public/asset/        (CSS, JS, dan gambar)
```

## Cara Menjalankan

Butuh PHP 8.3 atau lebih baru dan Composer.

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan serve
```

Lalu buka http://localhost:8000 dan login dengan username `fauzi`.

## Screenshot

### Login

| | Light | Dark |
|---|---|---|
| PC | <img src="docs/Login%20pc%20light.png" width="380" alt="Login PC light"> | <img src="docs/Login%20pc%20dark.png" width="380" alt="Login PC dark"> |
| HP | <img src="docs/Login%20hp%20light.png" width="170" alt="Login HP light"> | <img src="docs/Login%20hp%20dark.png" width="170" alt="Login HP dark"> |

### Login dengan Username Salah

| | Light | Dark |
|---|---|---|
| PC | <img src="docs/Login%20salah%20pc%20light.png" width="380" alt="Login salah PC light"> | <img src="docs/Login%20salah%20pc%20dark.png" width="380" alt="Login salah PC dark"> |
| HP | <img src="docs/Login%20salah%20hp%20light.png" width="170" alt="Login salah HP light"> | <img src="docs/Login%20salah%20hp%20dark.png" width="170" alt="Login salah HP dark"> |

### Dashboard

| | Light | Dark |
|---|---|---|
| PC | <img src="docs/Dasboard%20pc%20light.png" width="380" alt="Dashboard PC light"> | <img src="docs/Dasboard%20pc%20dark.png" width="380" alt="Dashboard PC dark"> |
| HP | <img src="docs/Dashboard%20hp%20light.png" width="170" alt="Dashboard HP light"> | <img src="docs/Dashboard%20hp%20dark.png" width="170" alt="Dashboard HP dark"> |

### Hamburger Menu (HP)

| Light | Dark |
|---|---|
| <img src="docs/Hamburger%20hp%20light.png" width="170" alt="Hamburger HP light"> | <img src="docs/Hamburger%20hp%20dark.png" width="170" alt="Hamburger HP dark"> |

### Profile

| | Light | Dark |
|---|---|---|
| PC | <img src="docs/Profile%20pc%20light.png" width="380" alt="Profile PC light"> | <img src="docs/Profile%20pc%20dark.png" width="380" alt="Profile PC dark"> |
| HP | <img src="docs/Profile%20hp%20light.png" width="170" alt="Profile HP light"> | <img src="docs/Profile%20hp%20dark.png" width="170" alt="Profile HP dark"> |

### Pengelolaan

| | Light | Dark |
|---|---|---|
| PC | <img src="docs/Pengelolaan%20pc%20light.png" width="380" alt="Pengelolaan PC light"> | <img src="docs/Pengelolaan%20pc%20dark.png" width="380" alt="Pengelolaan PC dark"> |
| HP | <img src="docs/Pengelolaan%20hp%20light.png" width="170" alt="Pengelolaan HP light"> | <img src="docs/Pengelolaan%20hp%20dark.png" width="170" alt="Pengelolaan HP dark"> |
