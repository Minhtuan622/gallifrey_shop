<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseAdminController
{
  protected string $viewPath = 'admin.products';
  protected string $routePrefix = 'admin.products';
  protected string $modelClass = Product::class;

  public function store(Request $request)
  {
    // Add any Product-specific validation or logic here if needed
    return parent::store();
  }

  public function update(Request $request, Product $product)
  {
    // Add any Product-specific validation or logic here if needed
    return parent::update($product);
  }
}
