# Chugoku CI4 CMS Demo Starter

Starter ini dibuat untuk mengubah demo modernisasi website PT. Chugoku Paints Indonesia menjadi struktur **CodeIgniter 4 + CMS Admin + CodeIgniter Shield**.

## Isi Paket

- Public homepage modern corporate mengikuti referensi visual yang dikirim.
- Layout bilingual EN / ID toggle.
- Product showcase section.
- Project records section.
- Domestic network map concept.
- Contact / product inquiry section.
- Admin CMS demo pages:
  - Dashboard
  - Product Showcase
  - Project Records
  - Domestic Network
  - Inquiry Inbox
  - SEO & Bilingual Settings
- Migration awal untuk tabel CMS.
- Seeder demo content.
- Asset CSS/JS dan placeholder image.

## Rekomendasi Development

Untuk project production, jangan hanya static HTML. Langsung gunakan:

- CodeIgniter 4
- PHP 8.x
- MySQL/MariaDB
- CodeIgniter Shield untuk auth admin
- CSRF enabled
- Validation rules untuk semua form
- File upload validation untuk media/brochure
- Bilingual fields untuk konten English + Bahasa Indonesia
- SEO metadata per halaman
- Sitemap XML dan robots.txt

## Cara Pakai pada Project CI4 Baru

1. Buat project CI4 baru.

```bash
composer create-project codeigniter4/appstarter chugoku-cms
cd chugoku-cms
```

2. Install Shield.

```bash
composer require codeigniter4/shield
php spark shield:setup
```

3. Copy folder dari paket ini ke project CI4:

```text
app/Controllers
app/Models
app/Views
app/Database/Migrations
app/Database/Seeds
app/Config/Routes.php
public/assets/chugoku
```

4. Set `.env` database.

```text
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'
database.default.database = chugoku_ci4
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

5. Jalankan migration dan seeder.

```bash
php spark migrate
php spark db:seed ChugokuDemoSeeder
```

6. Jalankan server development.

```bash
php spark serve
```

7. Buka:

```text
http://localhost:8080/
http://localhost:8080/admin
```

Admin route sudah disiapkan dengan filter `session` dari Shield. Setelah Shield aktif, user harus login untuk masuk ke `/admin`.

## Catatan Penting

Paket ini adalah starter development/demo, bukan final production build. Untuk production perlu dilanjutkan:

- CRUD lengkap produk, project, network, news, inquiry.
- Upload manager dengan validasi extension dan ukuran file.
- Role/permission admin.
- Sitemap generator.
- SMTP notification untuk inquiry.
- Deployment hardening.
- Real data produk, foto produk, project records, dan domestic network dari client.


## Bilingual Implementation Update

Bilingual sekarang sudah dibuat server-side, bukan hanya toggle visual:

- English page: `http://localhost:8080/en`
- Bahasa Indonesia page: `http://localhost:8080/id`
- Default page: `http://localhost:8080/` akan memakai session language atau fallback ke English.
- File konten bilingual:
  - `app/Language/en/Site.php`
  - `app/Language/id/Site.php`
- Layout publik memakai `hreflang`:
  - `<link rel="alternate" hreflang="en" ...>`
  - `<link rel="alternate" hreflang="id" ...>`
- Tombol `ID / EN` di header berpindah route dan render ulang seluruh konten.
- Struktur database CMS juga sudah bilingual melalui field seperti `title_en`, `title_id`, `description_en`, `description_id`, `meta_title_en`, `meta_title_id`, `meta_description_en`, dan `meta_description_id`.

Untuk CMS production, form admin tinggal dibuat dengan tab:

- Tab English: title_en, excerpt_en, description_en, meta_title_en, meta_description_en
- Tab Bahasa Indonesia: title_id, excerpt_id, description_id, meta_title_id, meta_description_id
