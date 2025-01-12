<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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
});