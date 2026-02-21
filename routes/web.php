<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/next', function () {
    return view('next');
});

// Language switch routes
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');


