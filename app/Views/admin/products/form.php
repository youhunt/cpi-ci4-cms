<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<section class="cms-card product-editor">
  <div class="cms-card-head">
    <div>
      <span class="cms-page-label">Product Showcase</span>
      <h2><?= esc($title ?? 'Product Form') ?></h2>
      <p>Kelola informasi produk, konten bilingual, gambar, brochure, status publikasi, dan SEO metadata.</p>
    </div>
    <a class="btn light" href="<?= site_url('admin/products') ?>">Back to Products</a>
  </div>

  <?php if (session('errors')): ?>
    <div class="cms-alert danger">
      <?php foreach (session('errors') as $error): ?><div><?= esc($error) ?></div><?php endforeach ?>
    </div>
  <?php endif ?>

  <form action="<?= $action ?>" method="post" class="cms-editor-form">
    <?= csrf_field() ?>

    <div class="editor-layout">
      <div class="editor-main">
        <div class="editor-section">
          <div class="section-title"><span>01</span><div><h3>Product Identity</h3><p>Nama produk dan slug URL.</p></div></div>
          <div class="form-grid two">
            <div class="field"><label>Title EN *</label><input name="title_en" value="<?= old('title_en', $product['title_en'] ?? '') ?>" required placeholder="Marine Coatings"></div>
            <div class="field"><label>Title ID</label><input name="title_id" value="<?= old('title_id', $product['title_id'] ?? '') ?>" placeholder="Coating Marine"></div>
            <div class="field"><label>Slug</label><input name="slug" value="<?= old('slug', $product['slug'] ?? '') ?>" placeholder="auto generated if empty"></div>
            <div class="field"><label>Category</label><select name="category_id"><option value="">- Select Category -</option><?php foreach (($categories ?? []) as $cat): ?><option value="<?= esc($cat['id']) ?>" <?= (string) old('category_id', $product['category_id'] ?? '') === (string) $cat['id'] ? 'selected' : '' ?>><?= esc($cat['title_en']) ?></option><?php endforeach ?></select></div>
          </div>
        </div>

        <div class="editor-section">
          <div class="section-title"><span>02</span><div><h3>Bilingual Content</h3><p>Konten singkat dan detail untuk English dan Bahasa Indonesia.</p></div></div>
          <div class="form-grid two">
            <div class="field"><label>Excerpt EN</label><textarea name="excerpt_en" rows="4" placeholder="Short product description in English"><?= old('excerpt_en', $product['excerpt_en'] ?? '') ?></textarea></div>
            <div class="field"><label>Excerpt ID</label><textarea name="excerpt_id" rows="4" placeholder="Deskripsi singkat produk dalam Bahasa Indonesia"><?= old('excerpt_id', $product['excerpt_id'] ?? '') ?></textarea></div>
            <div class="field"><label>Description EN</label><textarea name="description_en" rows="8" placeholder="Detailed product content in English"><?= old('description_en', $product['description_en'] ?? '') ?></textarea></div>
            <div class="field"><label>Description ID</label><textarea name="description_id" rows="8" placeholder="Konten detail produk dalam Bahasa Indonesia"><?= old('description_id', $product['description_id'] ?? '') ?></textarea></div>
          </div>
        </div>

        <div class="editor-section">
          <div class="section-title"><span>03</span><div><h3>SEO Metadata</h3><p>Optimasi title dan description untuk search engine.</p></div></div>
          <div class="form-grid two">
            <div class="field"><label>Meta Title EN</label><input name="meta_title_en" value="<?= old('meta_title_en', $product['meta_title_en'] ?? '') ?>" placeholder="Marine Coatings | Chugoku Paints Indonesia"></div>
            <div class="field"><label>Meta Title ID</label><input name="meta_title_id" value="<?= old('meta_title_id', $product['meta_title_id'] ?? '') ?>" placeholder="Coating Marine | Chugoku Paints Indonesia"></div>
            <div class="field"><label>Meta Description EN</label><textarea name="meta_description_en" rows="4"><?= old('meta_description_en', $product['meta_description_en'] ?? '') ?></textarea></div>
            <div class="field"><label>Meta Description ID</label><textarea name="meta_description_id" rows="4"><?= old('meta_description_id', $product['meta_description_id'] ?? '') ?></textarea></div>
          </div>
        </div>
      </div>

      <aside class="editor-side">
        <div class="side-card">
          <h3>Publishing</h3>
          <div class="field"><label>Status</label><select name="status"><?php $status = old('status', $product['status'] ?? 'published'); ?><option value="published" <?= $status === 'published' ? 'selected' : '' ?>>Published</option><option value="draft" <?= $status === 'draft' ? 'selected' : '' ?>>Draft</option></select></div>
          <div class="field"><label>Sort Order</label><input name="sort_order" type="number" value="<?= old('sort_order', $product['sort_order'] ?? 0) ?>"></div>
        </div>

        <div class="side-card">
          <h3>Media</h3>
          <div class="field"><label>Image Path</label><input name="image" value="<?= old('image', $product['image'] ?? '') ?>" placeholder="product-marine.jpg"><small>File path di public/assets/chugoku/img</small></div>
          <div class="field"><label>Brochure File</label><input name="brochure_file" value="<?= old('brochure_file', $product['brochure_file'] ?? '') ?>" placeholder="brochures/marine.pdf"></div>
        </div>

        <button class="btn save-btn" type="submit"><?= esc($methodLabel ?? 'Save') ?></button>
      </aside>
    </div>
  </form>
</section>
<?= $this->endSection() ?>
