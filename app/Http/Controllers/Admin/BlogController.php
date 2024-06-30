<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application as ContractsApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(): View|Application|Factory|ContractsApplication
    {
        return view('admin.blogs.index')->with('blogs', Blog::paginate(10));
    }

    public function create(): View|Application|Factory|ContractsApplication
    {
        return view('admin.blogs.create');
    }

    public function edit(Blog $blog): View|Application|Factory|ContractsApplication
    {
        return view('admin.blogs.edit')->with('blog', $blog);
    }

    public function store(Request $request): RedirectResponse
    {
        $blog = $request->all();
        $blog['admin_id'] = Auth::id();

        Blog::create($blog);
        return redirect()
            ->route('admin.blogs.show')
            ->with('success', 'Blog created successfully');
    }

    public function update(Blog $blog, Request $request): RedirectResponse
    {
        $blog->update($request->all());

//        if ($request->hasFile('image')) {
//            $imagePath = $request
//                ->file('image')
//                ->store('blogs', 'public');
//            $blog->image = $imagePath;
//            $blog->save();
//        }

        return redirect()
            ->route('admin.blogs.show')
            ->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog): RedirectResponse
    {
        $blog->delete();
        return redirect()
            ->route('admin.blogs.show')
            ->with('success', 'Blog deleted successfully');
    }
}
