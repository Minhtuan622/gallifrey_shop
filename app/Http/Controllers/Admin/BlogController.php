<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function show()
    {
        return view('admin.posts.index');
    }

    public function showEdit()
    {
        return view('admin.posts.edit');
    }
}
