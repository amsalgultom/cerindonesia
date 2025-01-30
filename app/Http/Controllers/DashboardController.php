<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use App\Models\Service;
use App\Models\Team;

class DashboardController extends Controller
{

    public function index()
    {
        $data = [
            'banners' => Banner::count(),
            'clients' => Client::count(),
            'services' => Service::count(),
            'teams' => Team::count()
        ];
        return view('backend.pages.dashboard.index', compact('data'));
    }
}
