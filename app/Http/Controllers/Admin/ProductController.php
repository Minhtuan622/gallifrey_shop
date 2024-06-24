<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application as ContractsApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): View|Application|Factory|ContractsApplication
    {
        return view('admin.products.index')
            ->with('products', Product::paginate(10));
    }

    public function create(): Factory|Application|View|ContractsApplication
    {
        return view('admin.products.create');
    }

    public function edit(Product $product): View|Application|Factory|ContractsApplication
    {
        return view('admin.products.edit')
            ->with('product', $product);
    }

    public function store(Request $request): RedirectResponse
    {
        Product::create($request->all());
        return redirect()
            ->route('admin.products.show')
            ->with('success', 'Product created successfully.');
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $product->update($request->all());
        return redirect()
            ->route('admin.products.show')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return redirect()
            ->route('admin.products.show')
            ->with('success', 'Product deleted successfully.');
    }
}
