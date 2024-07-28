<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends BaseAdminController
{
  protected string $viewPath = 'admin.blogs';
  protected string $routePrefix = 'admin.blogs';
  protected string $modelClass = Blog::class;

  public function store(Request $request): \Illuminate\Http\RedirectResponse
  {
    $blog = $request->all();
    $blog['admin_id'] = Auth::id();

    Blog::create($blog);
    return $this->redirectWithSuccess('created');
  }

  public function update(Blog $blog, Request $request): \Illuminate\Http\RedirectResponse
  {
    $blog->update($request->all());

    return $this->redirectWithSuccess('updated');
  }
}
