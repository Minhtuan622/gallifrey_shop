<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function show()
    {
        return view('user.blogs.index');
    }

    public function showDetail()
    {
        return view('user.blogs.detail');
    }
}
