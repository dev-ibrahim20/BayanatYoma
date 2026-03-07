<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\OurWorkController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');



// Language switch routes
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Services routes
    Route::resource('services', ServiceController::class);
    Route::resource('our-work', OurWorkController::class);
    Route::resource('client', ClientController::class);
    Route::resource('site-settings', SiteSettingController::class);
    Route::resource('social-media', SocialMediaController::class);
    Route::resource('about-us', AboutUsController::class);
    Route::resource('analytics', AnalyticsController::class);
    




});

require __DIR__.'/auth.php';
