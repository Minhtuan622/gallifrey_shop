<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class BannerController extends BaseAdminController
{
  public function __construct()
  {
    parent::__construct(
      'admin.banners',
      'admin.banners',
      Banner::class,
    );
  }

  public function store(Request $request): RedirectResponse
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'link_url' => 'required|url',
      'position' => 'required|string',
      'upload_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('upload_image') && $request->file('upload_image')->isValid()) {
      $imagePath = $request->file('upload_image')->store('banners', 'public');
      $data = $request->all();
      $data['image'] = Storage::url($imagePath);

      return parent::store(new Request($data));
    }

    return back()->with('error', 'Please upload a valid image file.');
  }

  public function update(Request $request, int $id): RedirectResponse
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'link_url' => 'required|url',
      'position' => 'required|string',
      'upload_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('upload_image') && $request->file('upload_image')->isValid()) {
      $imagePath = $request->file('upload_image')->store('banners', 'public');
      $data['image'] = Storage::url($imagePath);
    }

    return parent::update(new Request($data), $id);
  }
}
