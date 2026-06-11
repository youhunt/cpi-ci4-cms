<!doctype html>
<html lang="<?= esc($langCode ?? 'en') ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($metaTitle ?? 'PT. Chugoku Paints Indonesia') ?></title>
  <meta name="description" content="<?= esc($metaDescription ?? 'Modern corporate website demo for PT. Chugoku Paints Indonesia') ?>">
  <link rel="alternate" hreflang="en" href="<?= site_url('en') ?>">
  <link rel="alternate" hreflang="id" href="<?= site_url('id') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/chugoku/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/chugoku/css/logo.css') ?>">
</head>
<body data-lang="<?= esc($langCode ?? 'en') ?>">
  <?php $nav = $t['nav'] ?? []; $buttons = $t['buttons'] ?? []; $langCode = $langCode ?? 'en'; ?>
  <header class="topbar">
    <div class="container nav">
      <a href="<?= site_url($langCode) ?>" class="logo logo-image" aria-label="Chugoku Paints Indonesia">
        <picture>
          <source media="(max-width: 768px)" srcset="<?= base_url('assets/chugoku/img/logo-small.png') ?>">
          <img src="<?= base_url('assets/chugoku/img/logo.png') ?>" alt="CMP Chugoku Paints Indonesia Worldwide CMP Group">
        </picture>
      </a>
      <nav class="menu">
        <a href="#about"><?= esc($nav['about'] ?? 'About Us') ?></a>
        <a href="#products"><?= esc($nav['products'] ?? 'Products') ?></a>
        <a href="#solutions"><?= esc($nav['solutions'] ?? 'Solutions') ?></a>
        <a href="#projects"><?= esc($nav['projects'] ?? 'Projects') ?></a>
        <a href="#sustainability"><?= esc($nav['sustainability'] ?? 'Sustainability') ?></a>
        <a href="#news"><?= esc($nav['news'] ?? 'News') ?></a>
        <a href="#contact"><?= esc($nav['contact'] ?? 'Contact') ?></a>
      </nav>
      <div class="nav-actions">
        <div class="lang">
          <a href="<?= site_url('id') ?>" class="<?= $langCode === 'id' ? 'active' : '' ?>">ID</a>
          <span>/</span>
          <a href="<?= site_url('en') ?>" class="<?= $langCode === 'en' ? 'active' : '' ?>">EN</a>
        </div>
        <a href="#contact" class="btn dark"><?= esc($buttons['contact'] ?? 'Contact Us') ?></a>
        <button class="mobile-toggle" type="button" aria-label="Open menu">☰</button>
      </div>
    </div>
  </header>

  <?= $this->renderSection('content') ?>

  <div class="float-social"><a href="#">f</a><a href="#">x</a><a href="#">in</a><a href="#">wa</a></div>
  <a class="backtop" href="#top"><?= esc($buttons['backTop'] ?? 'Back To Top') ?> ↑</a>
  <script src="<?= base_url('assets/chugoku/js/app.js') ?>"></script>
</body>
</html>
