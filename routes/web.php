<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // carico da config l'array di prodotti da mostrare
    $products = config('products');

    return view('home' ,compact('products'));
})->name('home');

Route::get('/dettagli-prodotto', function () {
    return view('detail');
})->name('detail');

Route::get('/prodotti-uomo', function () {
    return view('uomo');
})->name('uomo');

Route::get('/prodotti-donna', function () {
    return view('donna');
})->name('donna');

Route::get('/prodotti-bambino', function () {
    return view('bambino');
})->name('bambino');
