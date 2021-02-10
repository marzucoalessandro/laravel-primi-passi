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

Route::get('home', function () {

    return view('home', ['icon' => ["home", "about", "info", "post"]]);
});

Route::get('entusiasta', function () {

    return view('entusiasti', ['icon' => ["home", "about", "info", "post"]]);
});

Route::get('scettico', function () {

    return view("scettici", ['icon' => ["home", "about", "info", "post"]]);
});

Route::get('incazzato', function () {

    return view("incazzati", ['icon' => ["home", "about", "info", "post"]]);
});
