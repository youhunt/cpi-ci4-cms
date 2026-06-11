<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<section class="panel">
  <div style="display:flex;justify-content:space-between;gap:16px;align-items:flex-start;margin-bottom:18px">
    <div>
      <h2>Product Showcase Management</h2>
      <p style="color:#60738f;font-weight:700">Kelola produk bilingual, kategori, gambar, brochure path, status, dan SEO metadata.</p>
    </div>
    <a class="btn" href="<?= site_url('admin/products/new') ?>">+ Add Product</a>
  </div>

  <?php if (session('message')): ?><div class="cms-alert success"><?= esc(session('message')) ?></div><?php endif ?>
  <?php if (session('error')): ?><div class="cms-alert danger"><?= esc(session('error')) ?></div><?php endif ?>

  <table class="table">
    <thead><tr><th>Product</th><th>Category</th><th>Image</th><th>Sort</th><th>Status</th><th style="width:170px">Action</th></tr></thead>
    <tbody>
      <?php foreach (($products ?? []) as $item): ?>
      <tr>
        <td><strong><?= esc($item['title_en'] ?? '-') ?></strong><br><small><?= esc($item['title_id'] ?? '') ?></small></td>
        <td><?= esc($item['category_title'] ?? '-') ?></td>
        <td><?= esc($item['image'] ?? '-') ?></td>
        <td><?= esc($item['sort_order'] ?? '0') ?></td>
        <td><span class="badge"><?= esc($item['status'] ?? 'draft') ?></span></td>
        <td>
          <a class="cms-link" href="<?= site_url('admin/products/' . $item['id'] . '/edit') ?>">Edit</a>
          <form action="<?= site_url('admin/products/' . $item['id'] . '/delete') ?>" method="post" style="display:inline" onsubmit="return confirm('Delete this product?')">
            <?= csrf_field() ?>
            <button class="cms-link danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      <?php endforeach ?>
      <?php if (empty($products)): ?>
      <tr><td colspan="6" style="text-align:center;color:#60738f;font-weight:700;padding:24px">No product yet. Click Add Product to create one.</td></tr>
      <?php endif ?>
    </tbody>
  </table>
</section>
<?= $this->endSection() ?>
