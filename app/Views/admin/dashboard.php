<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="stat-grid">
  <div class="stat-card"><span>Products</span><strong><?= esc($stats['products'] ?? 4) ?></strong></div>
  <div class="stat-card"><span>Projects</span><strong><?= esc($stats['projects'] ?? 12) ?></strong></div>
  <div class="stat-card"><span>Network Points</span><strong><?= esc($stats['networks'] ?? 5) ?></strong></div>
  <div class="stat-card"><span>New Inquiries</span><strong><?= esc($stats['inquiries'] ?? 8) ?></strong></div>
</div>
<div class="grid-2">
  <section class="panel">
    <h2>CMS Direction</h2>
    <table class="table"><tbody>
      <tr><td>Homepage</td><td><span class="badge">Hero, CTA, highlights</span></td></tr>
      <tr><td>Bilingual</td><td><span class="badge">English + Bahasa</span></td></tr>
      <tr><td>Security</td><td><span class="badge">Shield auth + CSRF</span></td></tr>
      <tr><td>SEO</td><td><span class="badge">Meta, sitemap, clean URL</span></td></tr>
    </tbody></table>
  </section>
  <section class="panel">
    <h2>Latest Inquiry Demo</h2>
    <table class="table">
      <thead><tr><th>Company</th><th>Interest</th><th>Status</th></tr></thead>
      <tbody><tr><td>PT Marine Sample</td><td>Marine Coating</td><td><span class="badge">New</span></td></tr><tr><td>Factory User</td><td>Flooring System</td><td><span class="badge">Review</span></td></tr></tbody>
    </table>
  </section>
</div>
<?= $this->endSection() ?>
