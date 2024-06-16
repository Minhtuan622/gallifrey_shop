<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function show()
    {
        return view('user.contact');
    }
}
