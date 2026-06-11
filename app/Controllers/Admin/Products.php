<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;

class Products extends BaseController
{
    private ProductModel $products;
    private ProductCategoryModel $categories;

    public function __construct()
    {
        $this->products = new ProductModel();
        $this->categories = new ProductCategoryModel();
    }

    public function index()
    {
        $items = $this->products
            ->select('products.*, product_categories.title_en AS category_title')
            ->join('product_categories', 'product_categories.id = products.category_id', 'left')
            ->orderBy('products.sort_order', 'ASC')
            ->orderBy('products.id', 'DESC')
            ->findAll();

        return view('admin/products/index', [
            'title' => 'Product Showcase',
            'products' => $items,
        ]);
    }

    public function new()
    {
        return view('admin/products/form', [
            'title' => 'Add Product',
            'product' => [],
            'categories' => $this->getCategories(),
            'action' => site_url('admin/products'),
            'methodLabel' => 'Create Product',
        ]);
    }

    public function create()
    {
        $data = $this->validatedData();
        if (! $data) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data['slug'] = $this->uniqueSlug($data['slug'] ?: $data['title_en']);
        $this->products->insert($data);

        return redirect()->to(site_url('admin/products'))->with('message', 'Product created successfully.');
    }

    public function edit(int $id)
    {
        $product = $this->products->find($id);
        if (! $product) {
            return redirect()->to(site_url('admin/products'))->with('error', 'Product not found.');
        }

        return view('admin/products/form', [
            'title' => 'Edit Product',
            'product' => $product,
            'categories' => $this->getCategories(),
            'action' => site_url('admin/products/' . $id),
            'methodLabel' => 'Update Product',
        ]);
    }

    public function update(int $id)
    {
        $product = $this->products->find($id);
        if (! $product) {
            return redirect()->to(site_url('admin/products'))->with('error', 'Product not found.');
        }

        $data = $this->validatedData();
        if (! $data) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data['slug'] = $this->uniqueSlug($data['slug'] ?: $data['title_en'], $id);
        $this->products->update($id, $data);

        return redirect()->to(site_url('admin/products'))->with('message', 'Product updated successfully.');
    }

    public function delete(int $id)
    {
        if ($this->products->find($id)) {
            $this->products->delete($id);
        }

        return redirect()->to(site_url('admin/products'))->with('message', 'Product deleted successfully.');
    }

    private function validatedData(): ?array
    {
        $rules = [
            'title_en' => 'required|min_length[3]|max_length[180]',
            'title_id' => 'permit_empty|max_length[180]',
            'category_id' => 'permit_empty|integer',
            'excerpt_en' => 'permit_empty',
            'excerpt_id' => 'permit_empty',
            'description_en' => 'permit_empty',
            'description_id' => 'permit_empty',
            'image' => 'permit_empty|max_length[255]',
            'brochure_file' => 'permit_empty|max_length[255]',
            'sort_order' => 'permit_empty|integer',
            'status' => 'required|in_list[published,draft]',
            'meta_title_en' => 'permit_empty|max_length[180]',
            'meta_title_id' => 'permit_empty|max_length[180]',
            'meta_description_en' => 'permit_empty',
            'meta_description_id' => 'permit_empty',
            'slug' => 'permit_empty|max_length[160]',
        ];

        if (! $this->validate($rules)) {
            return null;
        }

        return [
            'category_id' => $this->request->getPost('category_id') ?: null,
            'slug' => (string) $this->request->getPost('slug'),
            'title_en' => (string) $this->request->getPost('title_en'),
            'title_id' => (string) $this->request->getPost('title_id'),
            'excerpt_en' => (string) $this->request->getPost('excerpt_en'),
            'excerpt_id' => (string) $this->request->getPost('excerpt_id'),
            'description_en' => (string) $this->request->getPost('description_en'),
            'description_id' => (string) $this->request->getPost('description_id'),
            'image' => (string) $this->request->getPost('image'),
            'brochure_file' => (string) $this->request->getPost('brochure_file'),
            'sort_order' => (int) ($this->request->getPost('sort_order') ?: 0),
            'status' => (string) $this->request->getPost('status'),
            'meta_title_en' => (string) $this->request->getPost('meta_title_en'),
            'meta_title_id' => (string) $this->request->getPost('meta_title_id'),
            'meta_description_en' => (string) $this->request->getPost('meta_description_en'),
            'meta_description_id' => (string) $this->request->getPost('meta_description_id'),
        ];
    }

    private function getCategories(): array
    {
        $categories = $this->categories->orderBy('sort_order', 'ASC')->findAll();
        if (! empty($categories)) {
            return $categories;
        }

        $default = [
            ['slug' => 'industrial', 'title_en' => 'Industrial', 'title_id' => 'Industri', 'sort_order' => 1, 'status' => 'published'],
            ['slug' => 'marine', 'title_en' => 'Marine', 'title_id' => 'Marine', 'sort_order' => 2, 'status' => 'published'],
            ['slug' => 'protective', 'title_en' => 'Protective', 'title_id' => 'Proteksi', 'sort_order' => 3, 'status' => 'published'],
            ['slug' => 'flooring', 'title_en' => 'Flooring', 'title_id' => 'Lantai', 'sort_order' => 4, 'status' => 'published'],
        ];

        foreach ($default as $row) {
            $this->categories->insert($row);
        }

        return $this->categories->orderBy('sort_order', 'ASC')->findAll();
    }

    private function uniqueSlug(string $text, ?int $ignoreId = null): string
    {
        $base = url_title($text, '-', true) ?: 'product';
        $slug = $base;
        $counter = 2;

        while (true) {
            $builder = $this->products->where('slug', $slug);
            if ($ignoreId) {
                $builder->where('id !=', $ignoreId);
            }
            if (! $builder->first()) {
                return $slug;
            }
            $slug = $base . '-' . $counter++;
        }
    }
}
