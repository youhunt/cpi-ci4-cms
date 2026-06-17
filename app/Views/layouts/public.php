<!doctype html>
<html lang="<?= esc($langCode ?? 'en') ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($metaTitle ?? 'PT. Chugoku Paints Indonesia') ?></title>
  <meta name="description" content="<?= esc($metaDescription ?? 'Modern corporate website demo for PT. Chugoku Paints Indonesia') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="alternate" hreflang="en" href="<?= site_url('en') ?>">
  <link rel="alternate" hreflang="id" href="<?= site_url('id') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/chugoku/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/chugoku/css/logo.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/chugoku/css/corporate.css') ?>">
</head>
<body data-lang="<?= esc($langCode ?? 'en') ?>">
  <?php $nav = $t['nav'] ?? []; $buttons = $t['buttons'] ?? []; $langCode = $langCode ?? 'en'; ?>
  <header class="topbar site-header">
    <div class="container nav corporate-nav">
      <a href="<?= site_url($langCode) ?>" class="logo logo-image header-logo" aria-label="Chugoku Paints Indonesia">
        <picture>
          <source media="(max-width: 768px)" srcset="<?= base_url('assets/chugoku/img/logo_small.png') ?>">
          <img src="<?= base_url('assets/chugoku/img/logo.png') ?>" alt="CMP Chugoku Paints Indonesia Worldwide CMP Group">
        </picture>
      </a>

      <button class="mobile-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="main-menu">
        <span></span><span></span><span></span>
      </button>

      <nav id="main-menu" class="menu nav-menu">
        <a href="#about"><?= esc($nav['about'] ?? 'About Us') ?></a>
        <a href="#products"><?= esc($nav['products'] ?? 'Products') ?></a>
        <a href="#solutions"><?= esc($nav['solutions'] ?? 'Solutions') ?></a>
        <a href="#projects"><?= esc($nav['projects'] ?? 'Projects') ?></a>
        <a href="#news"><?= esc($nav['news'] ?? 'News') ?></a>
        <a href="#contact"><?= esc($nav['contact'] ?? 'Contact') ?></a>
        <div class="mobile-panel-actions">
          <div class="lang-switch">
            <a href="<?= site_url('id') ?>" class="lang-item <?= $langCode === 'id' ? 'active' : '' ?>"><img src="<?= base_url('assets/chugoku/img/flag-id.svg') ?>" alt="Indonesia"><span>ID</span></a>
            <a href="<?= site_url('en') ?>" class="lang-item <?= $langCode === 'en' ? 'active' : '' ?>"><img src="<?= base_url('assets/chugoku/img/flag-en.svg') ?>" alt="English"><span>EN</span></a>
          </div>
          <a href="#contact" class="btn dark"><?= esc($buttons['contact'] ?? 'Contact Us') ?></a>
        </div>
      </nav>

      <div class="nav-actions desktop-actions">
        <div class="lang-switch">
          <a href="<?= site_url('id') ?>" class="lang-item <?= $langCode === 'id' ? 'active' : '' ?>"><img src="<?= base_url('assets/chugoku/img/flag-id.svg') ?>" alt="Indonesia"><span>ID</span></a>
          <a href="<?= site_url('en') ?>" class="lang-item <?= $langCode === 'en' ? 'active' : '' ?>"><img src="<?= base_url('assets/chugoku/img/flag-en.svg') ?>" alt="English"><span>EN</span></a>
        </div>
        <a href="#contact" class="btn dark contact-btn"><?= esc($buttons['contact'] ?? 'Contact Us') ?></a>
      </div>
    </div>
  </header>

  <?= $this->renderSection('content') ?>

  <div class="cpi-social-dock" aria-label="Social media links">
    <a class="facebook" href="#" target="_blank" rel="noopener" aria-label="Facebook">f</a>
    <a class="twitter" href="#" target="_blank" rel="noopener" aria-label="X / Twitter">𝕏</a>
    <a class="linkedin" href="#" target="_blank" rel="noopener" aria-label="LinkedIn">in</a>
  </div>
  <a class="cpi-whatsapp" href="https://wa.me/6281287833400" target="_blank" rel="noopener" aria-label="WhatsApp">☏</a>
  <a class="cpi-backtop" href="#top" aria-label="Back to top"><span>⌃</span> Back To Top</a>

  <script src="<?= base_url('assets/chugoku/js/app.js') ?>"></script>
</body>
</html>
