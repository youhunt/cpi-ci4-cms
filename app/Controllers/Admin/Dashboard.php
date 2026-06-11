<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('admin/dashboard', [
            'title' => 'CMS Dashboard',
            'stats' => [
                'products' => 4,
                'projects' => 12,
                'networks' => 5,
                'inquiries' => 8,
            ],
        ]);
    }
}
