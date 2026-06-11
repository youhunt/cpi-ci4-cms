<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Inquiries extends BaseController
{
    public function index()
    {
        return view('admin/inquiries/index', ['title' => 'Inquiry Inbox']);
    }
}
