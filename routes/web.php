<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['setLocale'])->group(function () {
    Route::get('/');
    Route::get('/{lang}', [FrontendController::class, 'home'])->name('home');
    Route::get('/{lang}/who-we-are', [FrontendController::class, 'whoWeAre'])->name('who-we-are');
    Route::get('/{lang}/services', [FrontendController::class, 'services'])->name('services');
    Route::get('/{lang}/contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');
});

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/admin/register', 'register')->name('register');
    Route::post('/admin/store', 'store')->name('store');
    Route::get('/admin/login', 'login')->name('login');
    Route::post('/admin/authenticate', 'authenticate')->name('authenticate');
    Route::get('/admin/dashboards', 'dashboards')->name('dashboards');
    Route::post('/admin/logout', 'logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/admin-dashboard', 'index')->name('dashboard');
        Route::post('/admin/admin-profile', 'profile')->name('profile');
    });

    Route::controller(GeneralController::class)->group(function () {
        Route::get('/admin/admin-general', 'index')->name('general.index');
        Route::get('/admin/admin-general/create', 'create')->name('general.create');
        Route::post('/admin/admin-general/store', 'store')->name('general.store');
        Route::get('/admin/admin-general/edit/{general}', 'edit')->name('general.edit');
        Route::put('/admin/admin-general/update/{general}', 'update')->name('general.update');
        Route::post('/admin/admin-general/delete', 'delete')->name('general.delete');
    });

    Route::controller(BannerController::class)->group(function () {
        Route::get('/admin/banner', 'index')->name('banner.index');
        Route::get('/admin/banner/create', 'create')->name('banner.create');
        Route::post('/admin/banner/store', 'store')->name('banner.store');
        Route::get('/admin/banner/edit/{banner}', 'edit')->name('banner.edit');
        Route::put('/admin/banner/update/{banner}', 'update')->name('banner.update');
        Route::post('/admin/banner/delete', 'delete')->name('banner.delete');
    });

    Route::controller(TeamController::class)->group(function () {
        Route::get('/admin/team', 'index')->name('team.index');
        Route::get('/admin/team/create', 'create')->name('team.create');
        Route::post('/admin/team/store', 'store')->name('team.store');
        Route::get('/admin/team/edit/{team}', 'edit')->name('team.edit');
        Route::put('/admin/team/update/{team}', 'update')->name('team.update');
        Route::post('/admin/team/delete', 'delete')->name('team.delete');
    });

    Route::controller(ServiceController::class)->group(function () {
        Route::get('/admin/service', 'index')->name('service.index');
        Route::get('/admin/service/create', 'create')->name('service.create');
        Route::post('/admin/service/store', 'store')->name('service.store');
        Route::get('/admin/service/edit/{service}', 'edit')->name('service.edit');
        Route::put('/admin/service/update/{service}', 'update')->name('service.update');
        Route::post('/admin/service/delete', 'delete')->name('service.delete');
    });

    Route::controller(ClientController::class)->group(function () {
        Route::get('/admin/client', 'index')->name('client.index');
        Route::get('/admin/client/create', 'create')->name('client.create');
        Route::post('/admin/client/store', 'store')->name('client.store');
        Route::get('/admin/client/edit/{client}', 'edit')->name('client.edit');
        Route::put('/admin/client/update/{client}', 'update')->name('client.update');
        Route::post('/admin/client/delete', 'delete')->name('client.delete');
    });
});

Route::get('/storage/{category}/{filename}', function ($category, $filename) {
    // Make sure to validate the filename to avoid path traversal vulnerabilities
    $filePath = storage_path('app/public/' . $category . '/' . $filename);

    if (file_exists($filePath)) {
        return response()->file($filePath);
    }

    abort(404, 'File not found');
});
