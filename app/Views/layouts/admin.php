<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($title ?? 'CMS Admin') ?> - Chugoku CMS</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/chugoku/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/chugoku/css/admin.css') ?>">
</head>
<body class="admin-body cms-admin-body">
<div class="admin-shell cms-admin-shell">
  <aside class="sidebar cms-sidebar">
    <a href="<?= site_url('admin') ?>" class="cms-brand">
      <img src="<?= base_url('assets/chugoku/img/logo_small.png') ?>" alt="CMP">
      <span>Chugoku CMS<small>Admin Platform</small></span>
    </a>
    <nav class="admin-menu cms-menu">
      <a href="<?= site_url('admin') ?>" class="<?= current_url() === site_url('admin') ? 'active' : '' ?>">Dashboard</a>
      <a href="<?= site_url('admin/products') ?>">Product Showcase</a>
      <a href="<?= site_url('admin/projects') ?>">Project Records</a>
      <a href="<?= site_url('admin/network') ?>">Domestic Network</a>
      <a href="<?= site_url('admin/news') ?>">News & Updates</a>
      <a href="<?= site_url('admin/inquiries') ?>">Inquiry Inbox</a>
      <a href="<?= site_url('admin/settings') ?>">SEO & Bilingual Settings</a>
      <a href="<?= site_url('/') ?>" target="_blank">View Website</a>
      <a href="<?= site_url('logout') ?>">Logout</a>
    </nav>
  </aside>
  <main class="admin-main cms-main">
    <div class="admin-top cms-topbar">
      <div>
        <span class="cms-page-label">Content Management System</span>
        <h1><?= esc($title ?? 'Dashboard') ?></h1>
        <p>Manage corporate website content, product showcase, project records, and customer inquiry.</p>
      </div>
      <a class="btn" href="<?= site_url('/') ?>" target="_blank">Preview Website</a>
    </div>
    <?= $this->renderSection('content') ?>
  </main>
</div>
</body>
</html>
