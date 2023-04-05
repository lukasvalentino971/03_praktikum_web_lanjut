<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\datax;
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
//route biasa
Route::get('/home', function () {
    return view('home');
});

//route prefix
Route::prefix('product')->group(function () {
    Route::get('/productOne', function () {
        return view('productOne');
    });
});

// route param
Route::get('/news/{title}', function ($title) {
    return view('news', ['title' => $title]);
});

Route::prefix('program')->group(function () {
    Route::get('/magang', function () {
        return view('program');
    });
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::resource('contactus', ContactUsController::class)->only([
    'index'
]);
   

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// praktikum 2
// Halaman Dashboard
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//halaman profile
Route::get('/profile/{nim}', fn($nim)=> view('profile', ['nim' => $nim]));

//halaman Experience
Route::get('/experience', fn()=> view('experience'));

Route::get('test', [datax::class, 'show']);