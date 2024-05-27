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
    $nav_links = config('nav');
    $comics = config('comics');
    $footer_nav = config('footer_links');

    return view('home', compact('nav_links','comics','footer_nav'));
});

Route::get('/dettaglio', function () {
    $nav_links = config('nav');
    $comics = config('comics');
    $footer_nav = config('footer_links');
    return view('detail', compact('nav_links','comics','footer_nav'));

});