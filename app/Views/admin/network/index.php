<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<section class="panel">
  <h2>Domestic Network Management</h2>
  <p style="color:#60738f;font-weight:700">Kelola kantor, distributor, sales area, customer support point, atau project location untuk ditampilkan pada peta.</p>
  <table class="table">
    <thead><tr><th>Point</th><th>Type</th><th>City</th><th>Status</th></tr></thead>
    <tbody><tr><td>Jakarta Office</td><td>Office</td><td>Jakarta</td><td><span class="badge">Active</span></td></tr><tr><td>Industrial Area Coverage</td><td>Coverage</td><td>Indonesia</td><td><span class="badge">Active</span></td></tr></tbody>
  </table>
</section>
<?= $this->endSection() ?>
