<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<section class="panel">
  <h2>Project Records Management</h2>
  <p style="color:#60738f;font-weight:700">Kelola project/application records untuk memperkuat credibility dan visual showcase.</p>
  <table class="table">
    <thead><tr><th>Project</th><th>Location</th><th>Application</th><th>Status</th></tr></thead>
    <tbody><tr><td>Akashi Kaikyo Bridge</td><td>Japan</td><td>Infrastructure Coating</td><td><span class="badge">Published</span></td></tr><tr><td>Offshore Platform</td><td>Malaysia</td><td>Marine / Offshore</td><td><span class="badge">Published</span></td></tr></tbody>
  </table>
</section>
<?= $this->endSection() ?>
