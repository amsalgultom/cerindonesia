<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Support\Facades\Artisan;
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

    public function generateKey()
    {
        try {
            Artisan::call('key:generate');
            return response()->json(['message' => 'Application key generated successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error generating key', 'error' => $e->getMessage()], 500);
        }
    }

    public function clearCache()
    {
        try {
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('route:clear');
            Artisan::call('view:clear');
            return response()->json(['message' => 'Cache cleared successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error clearing cache', 'error' => $e->getMessage()], 500);
        }
    }

    public function storageLink()
    {
        try {
            Artisan::call('storage:link');
            return response()->json(['message' => 'Storage link created successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating storage link', 'error' => $e->getMessage()], 500);
        }
    }
}
