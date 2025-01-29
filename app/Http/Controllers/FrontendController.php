<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $services = Service::all();
        $banners = Banner::all();
        return view('frontend.pages.home', compact('banners', 'services'));
    }

    public function whoWeAre()
    {
        $teams = Team::all();
        return view('frontend.pages.who-we-are', compact('teams'));
    }

    public function services()
    {
        $services = Service::all();
        $clients = Client::all();
        return view('frontend.pages.service', compact('services', 'clients'));
    }

    public function contactUs()
    {
        return view('frontend.pages.contact-us');
    }
}
