<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application as ContractsApplication;

class BlogController extends Controller
{
    public function show(): View|Application|Factory|ContractsApplication
    {
        return view('admin.posts.index');
    }

    public function create(): View|Application|Factory|ContractsApplication
    {
        return view('admin.posts.edit');
    }

    public function edit(): View|Application|Factory|ContractsApplication
    {
        return view('admin.posts.edit');
    }

    public function store(): View|Application|Factory|ContractsApplication
    {
        return view('admin.posts.edit');
    }

    public function update(): View|Application|Factory|ContractsApplication
    {
        return view('admin.posts.edit');
    }

    public function destroy(): View|Application|Factory|ContractsApplication
    {
        return view('admin.posts.edit');
    }
}
