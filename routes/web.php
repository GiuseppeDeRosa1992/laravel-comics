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

    //RICHIAMO ARRAY ASSOCIATIVO DA STORE.PHP config("store") E LO METTO NELLA VARIABILE ARRAY
    $array = config("store");
    //CARICO LA VARIABILE DATA IN HOMEPAGE.BLADE.PHP 
    return view('homepage', $array);
});

Route::get('/home', function () {

    //RICHIAMO ARRAY ASSOCIATIVO DA STORE.PHP config("store") E LO METTO NELLA VARIABILE DATA
    $data = config("store");
    return view('homepage', $data);
});

Route::get('/all', function () {

    $data = config("store");
    return view('about', $data);
});

Route::get('/comic-book', function () {

    $data = config("store");
    return view('comic', $data);
});

Route::get('/graphic-novel', function () {

    $data = config("store");
    return view('graphic', $data);
});
