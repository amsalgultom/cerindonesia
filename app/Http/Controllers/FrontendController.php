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
        $client_nasional = Client::where('category', 'Nasional')->get();
        $client_internasional = Client::where('category', 'Internasional')->get();

        $totalClients = $client_nasional->count();

        // Menghitung jumlah untuk setiap bagian
        $firstSliceLength = ceil($totalClients / 2); // Membulatkan ke atas untuk bagian pertama
        $secondSliceLength = $totalClients - $firstSliceLength; // Sisa data untuk bagian kedua

        // Memisahkan koleksi client_nasional menjadi 2 bagian
        $client_nasional = [
            'firstClients' => $client_nasional->slice(0, $firstSliceLength),
            'secondClients' => $client_nasional->slice($firstSliceLength, $secondSliceLength),
        ];

        $totalinterClients = $client_internasional->count();

        $firstSliceLengthI = ceil($totalinterClients / 3);
        $remainingI = $totalinterClients - $firstSliceLengthI;
        $secondSliceLengthI = ceil($remainingI / 2);
        $thirdSliceLengthI = $remainingI - $secondSliceLengthI;

        $client_internasional = [
            'firstClients' => $client_internasional->slice(0, $firstSliceLengthI),
            'secondClients' => $client_internasional->slice($firstSliceLengthI, $secondSliceLengthI),
            'thirdClients' => $client_internasional->slice($firstSliceLengthI + $secondSliceLengthI, $thirdSliceLengthI),
        ];


        return view('frontend.pages.service', compact('services', 'client_nasional', 'client_internasional'));
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
