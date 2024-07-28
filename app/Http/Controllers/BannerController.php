<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Admin\BaseAdminController;
use Illuminate\Support\Facades\Storage;

class BannerController extends BaseAdminController
{
  protected string $viewPath = 'admin.banners';
  protected string $routePrefix = 'admin.banners';
  protected string $modelClass = Banner::class;

  public function store(Request $request): RedirectResponse
  {
    $request->validate([
      'title' => 'required',
      'link_url' => 'required',
      'position' => 'required',
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
      'title' => 'required',
      'image_url' => 'required_without:upload_image',
      'link_url' => 'required',
      'position' => 'required',
      'upload_image' => 'sometimes|image'
    ]);

    $data = $request->all();

    if ($request->hasFile('upload_image')) {
      $imagePath = $request
        ->file('upload_image')
        ->store('banners', 'public');
      $data['image'] = Storage::url($imagePath);
    }

    return parent::update(new Request($data), $id);
  }
}
