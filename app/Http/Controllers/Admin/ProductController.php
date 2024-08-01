<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends BaseAdminController
{
  public function __construct()
  {
    parent::__construct(
      'admin.products',
      'admin.products',
      Product::class,
    );
  }

  public function store(Request $request): RedirectResponse
  {
    $params = $request->all();

    if ($request->hasFile('image')) {
      $params['image'] = $this->uploadImage($request->file('image'));
    }

    return parent::store(new Request($params));
  }

  public function update(Request $request, $id): RedirectResponse
  {
    $params = $request->all();

    $product = Product::findOrFail($id);

    if ($request->hasFile('image')) {
      if ($product->image) {
        Storage::disk('public')->delete($product->image);
      }
      $params['image'] = $this->uploadImage($request->file('image'));
    }

    return parent::update(new Request($params), $id);
  }

  public function destroy($id): RedirectResponse
  {
    $product = Product::findOrFail($id);

    if ($product->image) {
      Storage::disk('public')->delete($product->image);
    }

    return parent::destroy($id);
  }

  private function uploadImage($image): string
  {
    return $image->store('product_images', 'public');
  }
}
