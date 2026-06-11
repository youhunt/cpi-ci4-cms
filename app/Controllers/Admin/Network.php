<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Network extends BaseController
{
    public function index()
    {
        return view('admin/network/index', ['title' => 'Domestic Network']);
    }
}
