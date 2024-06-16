<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function show()
    {
        return view('user.cart.index');
    }
}
