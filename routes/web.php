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
    return view('welcome');
});

Route::get("/about", function () {
    return view('about');
});

Route::get("/admin", function () {
    return view('admin');
});

Route::get("/contact", function () {
    return view('contact');
});

Route::get("/our team", function () {
    return view('our team');
});

Route::get("/privacy policy", function () {
    return view('privacy policy');
});
