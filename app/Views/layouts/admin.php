<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($title ?? 'CMS Admin') ?> - Chugoku CMS</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/chugoku/css/style.css') ?>">
</head>
<body class="admin-body">
<div class="admin-shell">
  <aside class="sidebar">
    <a href="<?= site_url('admin') ?>" class="logo"><span class="logo-mark">CMP</span><span class="logo-text">Chugoku CMS<span>Admin Platform</span></span></a>
    <nav class="admin-menu">
      <a href="<?= site_url('admin') ?>" class="<?= current_url() === site_url('admin') ? 'active' : '' ?>">Dashboard</a>
      <a href="<?= site_url('admin/products') ?>">Product Showcase</a>
      <a href="<?= site_url('admin/projects') ?>">Project Records</a>
      <a href="<?= site_url('admin/network') ?>">Domestic Network</a>
      <a href="<?= site_url('admin/inquiries') ?>">Inquiry Inbox</a>
      <a href="<?= site_url('admin/settings') ?>">SEO & Bilingual Settings</a>
      <a href="<?= site_url('/') ?>" target="_blank">View Website</a>
      <a href="<?= site_url('logout') ?>">Logout</a>
    </nav>
  </aside>
  <main class="admin-main">
    <div class="admin-top">
      <div><h1><?= esc($title ?? 'Dashboard') ?></h1><p style="margin:4px 0 0;color:#60738f;font-weight:700">CodeIgniter 4 + Shield CMS demo structure</p></div>
      <a class="btn" href="<?= site_url('/') ?>" target="_blank">Preview Website</a>
    </div>
    <?= $this->renderSection('content') ?>
  </main>
</div>
</body>
</html>
