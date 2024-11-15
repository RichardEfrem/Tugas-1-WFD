<?php

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

Route::get('/', function () { 
    return view('hero');
})->name('home');

Route::get('/product', function () { 
    return view('product');
})->name('product');

Route::get('/testimoni', function () { 
    return view('testi');
})->name('testimoni');

Route::get('/pemesanan', function () { 
    return view('pemesanan');
})->name('pemesanan');