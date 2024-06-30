<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function show()
    {
        return view('user.blogs.index')->with('blogs', Blog::paginate(6));
    }

    public function showDetail(Blog $blog)
    {
        return view('user.blogs.detail', compact('blog'));
    }
}
