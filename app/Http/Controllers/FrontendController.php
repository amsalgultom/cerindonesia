<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function whoWeAre()
    {
        return view('frontend.pages.who-we-are');
    }
}
