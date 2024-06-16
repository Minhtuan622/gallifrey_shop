<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show()
    {
        return view('admin.users.index');
    }

    public function showEdit()
    {
        return view('admin.users.edit');
    }
}
