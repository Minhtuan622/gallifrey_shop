<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function show()
    {
        return view('user.home');
    }

    public function privacyPolicy()
    {
        return view('user.privacy-policy');
    }

    public function termsOfService()
    {
        return view('user.terms-of-service');
    }
}
