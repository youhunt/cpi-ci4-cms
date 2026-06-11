<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<section class="panel">
  <h2>Customer Inquiry Inbox</h2>
  <p style="color:#60738f;font-weight:700">Semua inquiry dari website masuk ke halaman ini. Bisa dikembangkan menjadi basic inquiry tracking.</p>
  <table class="table">
    <thead><tr><th>Name / Company</th><th>Email</th><th>Interest</th><th>Status</th></tr></thead>
    <tbody><tr><td>PT Marine Sample</td><td>contact@example.com</td><td>Marine Coatings</td><td><span class="badge">New</span></td></tr><tr><td>Industrial Plant User</td><td>factory@example.com</td><td>Flooring System</td><td><span class="badge">Review</span></td></tr></tbody>
  </table>
</section>
<?= $this->endSection() ?>
