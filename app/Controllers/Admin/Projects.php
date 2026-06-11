<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Projects extends BaseController
{
    public function index()
    {
        return view('admin/projects/index', ['title' => 'Project Records']);
    }
}
