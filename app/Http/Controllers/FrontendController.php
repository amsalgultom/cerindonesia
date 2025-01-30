<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = $request->all();

        Mail::to('new@cerindonesia.org')->send(new ContactFormMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
