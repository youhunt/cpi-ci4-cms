<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="grid-2">
<section class="panel">
  <h2>SEO Metadata</h2>
  <form class="cms-form">
    <input value="PT. Chugoku Paints Indonesia - Marine & Industrial Coatings">
    <textarea>Corporate website for marine paints, heavy duty coatings, protective coatings, flooring systems, and industrial protection solutions.</textarea>
    <button class="btn" type="button">Save Demo</button>
  </form>
</section>
<section class="panel">
  <h2>Bilingual Settings</h2>
  <form class="cms-form">
    <select><option>Default Language: English</option><option>Default Language: Bahasa Indonesia</option></select>
    <select><option>Enabled: English + Bahasa Indonesia</option></select>
    <button class="btn" type="button">Save Demo</button>
  </form>
</section>
</div>
<?= $this->endSection() ?>
