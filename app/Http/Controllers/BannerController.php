<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
  public function index()
  {
    $banners = Banner::all();
    return view('admin.banners.index', compact('banners'));
  }

  public function create()
  {
    return view('admin.banners.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'image_url' => 'required',
      'link_url' => 'required',
      'position' => 'required'
    ]);

    Banner::create($request->all());
    return redirect()->route('admin.banners.index')->with('success', 'Banner created successfully.');
  }

  public function edit(Banner $banner)
  {
    return view('admin.banners.edit', compact('banner'));
  }

  public function update(Request $request, Banner $banner)
  {
    $request->validate([
      'title' => 'required',
      'image_url' => 'required',
      'link_url' => 'required',
      'position' => 'required'
    ]);

    $banner->update($request->all());
    return redirect()->route('admin.banners.index')->with('success', 'Banner updated successfully.');
  }

  public function destroy(Banner $banner)
  {
    $banner->delete();
    return redirect()->route('admin.banners.index')->with('success', 'Banner deleted successfully.');
  }
}
