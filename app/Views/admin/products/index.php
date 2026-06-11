<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<section class="panel">
  <h2>Product Showcase Management</h2>
  <p style="color:#60738f;font-weight:700">Kelola kategori produk, konten bilingual, foto produk, brochure file, dan SEO metadata.</p>
  <table class="table">
    <thead><tr><th>Product</th><th>Category</th><th>Language</th><th>Status</th></tr></thead>
    <tbody>
      <?php foreach (($products ?? []) as $item): ?>
      <tr><td><?= esc($item['title_en'] ?? $item['name'] ?? '-') ?></td><td><?= esc($item['category'] ?? '-') ?></td><td>EN / ID</td><td><span class="badge"><?= esc($item['status'] ?? 'Published') ?></span></td></tr>
      <?php endforeach ?>
      <?php if (empty($products)): ?>
      <tr><td>Marine Coatings</td><td>Marine</td><td>EN / ID</td><td><span class="badge">Published</span></td></tr>
      <tr><td>Protective Coatings</td><td>Industrial</td><td>EN / ID</td><td><span class="badge">Published</span></td></tr>
      <?php endif ?>
    </tbody>
  </table>
</section>
<?= $this->endSection() ?>
