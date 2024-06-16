<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function show()
    {
        return view('user.about-us');
    }
}
