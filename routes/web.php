<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');


Route::get('/', [HomeController::class, 'dummy'])->name('home');

