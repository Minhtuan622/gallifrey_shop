<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show()
    {
        return view('admin.products.index');
    }

    public function showEdit()
    {
        return view('admin.products.edit');
    }
}
