<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<section class="panel">
  <div style="display:flex;justify-content:space-between;gap:16px;align-items:flex-start;margin-bottom:18px">
    <div>
      <h2><?= esc($title ?? 'Product Form') ?></h2>
      <p style="color:#60738f;font-weight:700">Isi konten produk versi English dan Bahasa Indonesia. Image sementara berupa path file di public/assets/chugoku/img.</p>
    </div>
    <a class="btn light" href="<?= site_url('admin/products') ?>">Back</a>
  </div>

  <?php if (session('errors')): ?>
    <div class="cms-alert danger">
      <?php foreach (session('errors') as $error): ?><div><?= esc($error) ?></div><?php endforeach ?>
    </div>
  <?php endif ?>

  <form action="<?= $action ?>" method="post" class="cms-form cms-form-wide">
    <?= csrf_field() ?>
    <div class="grid-2">
      <div><label>Title EN *</label><input name="title_en" value="<?= old('title_en', $product['title_en'] ?? '') ?>" required></div>
      <div><label>Title ID</label><input name="title_id" value="<?= old('title_id', $product['title_id'] ?? '') ?>"></div>
    </div>
    <div class="grid-2">
      <div><label>Slug</label><input name="slug" value="<?= old('slug', $product['slug'] ?? '') ?>" placeholder="auto generated if empty"></div>
      <div><label>Category</label><select name="category_id"><option value="">- Select Category -</option><?php foreach (($categories ?? []) as $cat): ?><option value="<?= esc($cat['id']) ?>" <?= (string) old('category_id', $product['category_id'] ?? '') === (string) $cat['id'] ? 'selected' : '' ?>><?= esc($cat['title_en']) ?></option><?php endforeach ?></select></div>
    </div>
    <div class="grid-2">
      <div><label>Excerpt EN</label><textarea name="excerpt_en"><?= old('excerpt_en', $product['excerpt_en'] ?? '') ?></textarea></div>
      <div><label>Excerpt ID</label><textarea name="excerpt_id"><?= old('excerpt_id', $product['excerpt_id'] ?? '') ?></textarea></div>
    </div>
    <div class="grid-2">
      <div><label>Description EN</label><textarea name="description_en" rows="7"><?= old('description_en', $product['description_en'] ?? '') ?></textarea></div>
      <div><label>Description ID</label><textarea name="description_id" rows="7"><?= old('description_id', $product['description_id'] ?? '') ?></textarea></div>
    </div>
    <div class="grid-2">
      <div><label>Image Path</label><input name="image" value="<?= old('image', $product['image'] ?? '') ?>" placeholder="product-marine.jpg"></div>
      <div><label>Brochure File Path</label><input name="brochure_file" value="<?= old('brochure_file', $product['brochure_file'] ?? '') ?>" placeholder="brochures/marine.pdf"></div>
    </div>
    <div class="grid-2">
      <div><label>Sort Order</label><input name="sort_order" type="number" value="<?= old('sort_order', $product['sort_order'] ?? 0) ?>"></div>
      <div><label>Status</label><select name="status"><?php $status = old('status', $product['status'] ?? 'published'); ?><option value="published" <?= $status === 'published' ? 'selected' : '' ?>>Published</option><option value="draft" <?= $status === 'draft' ? 'selected' : '' ?>>Draft</option></select></div>
    </div>
    <h3 style="margin-top:24px">SEO Metadata</h3>
    <div class="grid-2">
      <div><label>Meta Title EN</label><input name="meta_title_en" value="<?= old('meta_title_en', $product['meta_title_en'] ?? '') ?>"></div>
      <div><label>Meta Title ID</label><input name="meta_title_id" value="<?= old('meta_title_id', $product['meta_title_id'] ?? '') ?>"></div>
    </div>
    <div class="grid-2">
      <div><label>Meta Description EN</label><textarea name="meta_description_en"><?= old('meta_description_en', $product['meta_description_en'] ?? '') ?></textarea></div>
      <div><label>Meta Description ID</label><textarea name="meta_description_id"><?= old('meta_description_id', $product['meta_description_id'] ?? '') ?></textarea></div>
    </div>
    <button class="btn" type="submit"><?= esc($methodLabel ?? 'Save') ?></button>
  </form>
</section>
<?= $this->endSection() ?>
