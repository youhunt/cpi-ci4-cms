<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Products extends BaseController
{
    public function index()
    {
        $products = [
            ['title_en' => 'Industrial Coatings', 'category' => 'Industrial', 'status' => 'Published'],
            ['title_en' => 'Marine Coatings', 'category' => 'Marine', 'status' => 'Published'],
            ['title_en' => 'Protective Coatings', 'category' => 'Protective', 'status' => 'Published'],
            ['title_en' => 'Flooring Systems', 'category' => 'Flooring', 'status' => 'Published'],
        ];
        return view('admin/products/index', ['title' => 'Product Showcase', 'products' => $products]);
    }
}
