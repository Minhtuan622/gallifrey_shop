<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends BaseAdminController
{
  public function __construct()
  {
    parent::__construct(
      'admin.blogs',
      'admin.blogs',
      Blog::class,
    );
  }

  public function store(Request $request): RedirectResponse
  {
    $validatedData = $this->validateBlog($request);
    $validatedData['admin_id'] = Auth::id();

    if ($request->hasFile('image')) {
      $validatedData['image'] = $this->uploadImage($request->file('image'));
    }

    return parent::store(new Request($validatedData));
  }

  public function update(Request $request, $id): RedirectResponse
  {
    $validatedData = $this->validateBlog($request, false);

    $blog = Blog::findOrFail($id);

    if ($request->hasFile('image')) {
      // Delete old image
      if ($blog->image) {
        Storage::disk('public')->delete($blog->image);
      }
      $validatedData['image'] = $this->uploadImage($request->file('image'));
    }

    return parent::update(new Request($validatedData), $id);
  }

  public function destroy($id): RedirectResponse
  {
    $blog = Blog::findOrFail($id);

    // Delete associated image
    if ($blog->image) {
      Storage::disk('public')->delete($blog->image);
    }

    return parent::destroy($id);
  }

  private function validateBlog(Request $request, bool $requireImage = true): array
  {
    return $request->validate([
      'title' => 'required|max:255',
      'content' => 'required',
      'published_at' => 'required|date',
      'status' => 'required|in:1,2',
      'image' => $requireImage ? 'required|image|mimes:jpeg,png,jpg,gif|max:2048' : 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
  }

  private function uploadImage($image): string
  {
    return $image->store('blog_images', 'public');
  }
}
