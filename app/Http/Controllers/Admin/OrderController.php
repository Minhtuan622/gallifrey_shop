<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function show()
    {
        return view('admin.orders.index');
    }

    public function detail()
    {
        return view('admin.orders.detail');
    }
}
