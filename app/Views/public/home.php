<?= $this->extend('layouts/public') ?>
<?= $this->section('content') ?>
<?php
$hero = $t['hero'];
$buttons = $t['buttons'];
$img = static fn (string $name): string => base_url('assets/chugoku/img/' . $name);
?>
<main id="top">
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-watermark"><?= nl2br(esc($hero['watermark'])) ?></div>
    <div class="container hero-inner">
      <div>
        <div class="eyebrow"><?= esc($hero['eyebrow']) ?></div>
        <h1><?= esc($hero['title']) ?></h1>
        <p><?= esc($hero['description']) ?></p>
        <div class="hero-buttons">
          <a href="#products" class="btn"><?= esc($buttons['viewProducts']) ?> →</a>
          <a href="#contact" class="btn light"><?= esc($buttons['productInquiry']) ?></a>
        </div>
        <div class="hero-metrics">
          <div class="metric"><strong><?= esc($hero['metric1Number']) ?></strong><?= esc($hero['metric1Text']) ?></div>
          <div class="metric"><strong><?= esc($hero['metric2Number']) ?></strong><?= esc($hero['metric2Text']) ?></div>
        </div>
      </div>
      <aside class="hero-card fade-up">
        <div class="bar"></div>
        <h3><?= esc($hero['cardTitle']) ?></h3>
        <p><?= esc($hero['cardText']) ?></p>
        <a href="#about"><?= esc($hero['cardLink']) ?> →</a>
      </aside>
    </div>
  </section>

  <section class="features">
    <div class="container features-grid">
      <?php foreach ($t['features'] as $feature): ?>
        <div class="feature"><span class="icon"><?= esc($feature['icon']) ?></span><div><h4><?= esc($feature['title']) ?></h4><p><?= esc($feature['text']) ?></p></div></div>
      <?php endforeach ?>
    </div>
  </section>

  <section class="section" id="solutions">
    <div class="container solutions">
      <div class="solutions-intro fade-up">
        <div class="kicker"><?= esc($t['productsIntro']['kicker']) ?></div>
        <h2><?= esc($t['productsIntro']['title']) ?></h2>
        <p><?= esc($t['productsIntro']['text']) ?></p>
        <a href="#contact" class="btn"><?= esc($buttons['viewProducts']) ?> →</a>
      </div>
      <?php foreach ($t['products'] as $product): ?>
        <article class="solution-card fade-up">
          <img src="<?= $img($product['image']) ?>" alt="<?= esc($product['title']) ?>">
          <div class="solution-content">
            <div class="num"><?= esc($product['number']) ?></div>
            <h3><?= esc($product['title']) ?></h3>
            <p><?= esc($product['text']) ?></p>
            <a class="small-link" href="#contact"><?= esc($buttons['learnMore']) ?> →</a>
          </div>
        </article>
      <?php endforeach ?>
    </div>
  </section>

  <section class="section soft" id="products">
    <div class="container">
      <div class="section-head fade-up">
        <div><div class="kicker"><?= esc($t['applications']['kicker']) ?></div><h2><?= esc($t['applications']['title']) ?></h2></div>
        <p class="section-desc"><?= esc($t['applications']['description']) ?></p>
      </div>
      <div class="application-grid">
        <?php foreach ($t['applications']['items'] as $app): ?>
          <article class="app-card <?= esc($app['class']) ?> fade-up">
            <img src="<?= $img($app['image']) ?>" alt="<?= esc($app['title']) ?>">
            <div class="app-copy"><h3><?= esc($app['title']) ?></h3><p><?= esc($app['text']) ?></p></div>
          </article>
        <?php endforeach ?>
        <article class="app-card fade-up"><img src="<?= $img('brochure-marine.jpg') ?>" alt="Brochure"></article>
        <article class="app-card wide fade-up"><img src="<?= $img('hero-marine.jpg') ?>" alt="Underwater Coating"></article>
      </div>
    </div>
  </section>

  <section class="section" id="about">
    <div class="container">
      <div class="section-head fade-up">
        <div><div class="kicker"><?= esc($t['aboutCompany']['kicker']) ?></div><h2><?= esc($t['aboutCompany']['title']) ?></h2></div>
        <p class="section-desc"><?= esc($t['aboutCompany']['description']) ?></p>
      </div>
      <div class="value-grid">
        <?php foreach ($t['aboutCompany']['cards'] as $card): ?>
          <div class="value-card fade-up"><div class="mini-icon"><?= esc($card['icon']) ?></div><h3><?= esc($card['title']) ?></h3><p><?= esc($card['text']) ?></p></div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <section class="section soft" id="network">
    <div class="container">
      <div class="section-head fade-up">
        <div><div class="kicker"><?= esc($t['network']['kicker']) ?></div><h2><?= esc($t['network']['title']) ?></h2></div>
        <p class="section-desc"><?= esc($t['network']['description']) ?></p>
      </div>
      <div class="network-grid">
        <div class="map-card fade-up"><div class="map-line"></div><span class="pin p1"></span><span class="pin p2"></span><span class="pin p3"></span><span class="pin p4"></span><span class="pin p5"></span><div class="map-copy"><h3><?= esc($t['network']['mapTitle']) ?></h3><p><?= esc($t['network']['mapText']) ?></p></div></div>
        <div class="network-list fade-up">
          <?php foreach ($t['network']['items'] as $item): ?>
            <div class="network-item"><h3><?= esc($item['title']) ?></h3><p><?= esc($item['text']) ?></p></div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="meeting-note fade-up"><?= esc($t['network']['note']) ?></div>
    </div>
  </section>

  <section class="projects-band" id="projects">
    <div class="projects-intro fade-up"><div class="kicker"><?= esc($t['projects']['kicker']) ?></div><h2><?= esc($t['projects']['title']) ?></h2><p><?= esc($t['projects']['description']) ?></p><a href="#contact" class="small-link"><?= esc($buttons['viewAllProjects']) ?> →</a></div>
    <div class="project-cards">
      <?php foreach ($t['projects']['items'] as $project): ?>
        <article class="project-card fade-up"><img src="<?= $img($project['image']) ?>" alt="<?= esc($project['title']) ?>"><div><h3><?= esc($project['title']) ?></h3><p><?= esc($project['location']) ?></p></div></article>
      <?php endforeach ?>
    </div>
  </section>

  <section class="section" id="news">
    <div class="container news-grid">
      <div class="fade-up"><div class="kicker"><?= esc($t['news']['kicker']) ?></div><h2><?= esc($t['news']['title']) ?></h2></div>
      <?php foreach ($t['news']['items'] as $news): ?>
        <article class="news-card fade-up"><img src="<?= $img($news['image']) ?>" alt="<?= esc($news['title']) ?>"><div><time><?= esc($news['date']) ?></time><h3><?= esc($news['title']) ?></h3><a href="#"><?= esc($buttons['readMore']) ?> →</a></div></article>
      <?php endforeach ?>
      <a href="#" class="btn light"><?= esc($buttons['viewAllNews']) ?> →</a>
    </div>
  </section>

  <section class="section soft" id="contact">
    <div class="container inquiry fade-up">
      <div><div class="kicker"><?= esc($t['inquiry']['kicker']) ?></div><h2><?= esc($t['inquiry']['title']) ?></h2><p><?= esc($t['inquiry']['description']) ?></p></div>
      <form class="form" data-demo-form>
        <input name="name" placeholder="<?= esc($t['inquiry']['name']) ?>" required>
        <input name="email" placeholder="<?= esc($t['inquiry']['email']) ?>" type="email" required>
        <input name="phone" placeholder="<?= esc($t['inquiry']['phone']) ?>">
        <select name="interest"><option><?= esc($t['inquiry']['interest']) ?></option><?php foreach ($t['inquiry']['options'] as $option): ?><option><?= esc($option) ?></option><?php endforeach ?></select>
        <textarea name="message" placeholder="<?= esc($t['inquiry']['message']) ?>"></textarea>
        <button class="btn light" type="submit"><?= esc($buttons['submitInquiry']) ?></button>
      </form>
    </div>
  </section>

  <footer class="footer corporate-footer">
    <div class="container">
      <div class="footer-grid corporate-footer-grid">
        <div class="footer-brand">
          <a href="#top" class="logo logo-image footer-logo" aria-label="Chugoku Paints Indonesia">
            <picture>
              <source media="(max-width: 768px)" srcset="<?= base_url('assets/chugoku/img/logo_small.png') ?>">
              <img src="<?= base_url('assets/chugoku/img/logo.png') ?>" alt="CMP Chugoku Paints Indonesia Worldwide CMP Group">
            </picture>
          </a>
          <p><?= esc($t['footer']['tagline']) ?></p>
        </div>
        <div><h4><?= esc($t['footer']['quickLinks']) ?></h4><a href="#about"><?= esc($t['nav']['about']) ?></a><a href="#products"><?= esc($t['nav']['products']) ?></a><a href="#solutions"><?= esc($t['nav']['solutions']) ?></a><a href="#projects"><?= esc($t['nav']['projects']) ?></a><a href="#news"><?= esc($t['nav']['news']) ?></a></div>
        <div><h4><?= esc($t['footer']['ourProducts']) ?></h4><?php foreach ($t['products'] as $product): ?><a><?= esc($product['title']) ?></a><?php endforeach ?></div>
        <div><h4><?= esc($t['footer']['sustainability']) ?></h4><a>Environment</a><a>Sustainability Approach</a><a>Responsible Care</a><a><?= esc($t['nav']['news']) ?></a></div>
        <div><h4><?= esc($t['footer']['contactUs']) ?></h4><p><?= nl2br(esc($t['footer']['address'])) ?></p><p><?= nl2br(esc($t['footer']['contact'])) ?></p></div>
      </div>
      <div class="footer-bottom">
        <span><?= esc($t['footer']['copyright']) ?></span>
        <span class="footer-bottom-links"><a href="<?= site_url('admin') ?>" rel="nofollow">CMS Login</a><span><?= esc($t['footer']['privacy']) ?></span></span>
      </div>
    </div>
  </footer>
</main>
<?= $this->endSection() ?>
