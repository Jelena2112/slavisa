<?php

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
    return view('pages/home');
});

Route::get('apartments/{apartment}', function ($apartmentName) {
    return view('pages/apartment');
});

Route::get('about_us', function () {
    return view('pages/about_us');
});

Route::get('all_apartments', function () {
    return view('pages/all_apartments');
});

Route::get('contact', function () {
    return view('pages/contact');
});


Route::get('welcome/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('index');
});