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

    //RICHIAMO ARRAY ASSOCIATIVO DA STORE.PHP config("store") E LO METTO NELLA VARIABILE DATA
    $data = config("store");
    //CARICO LA VARIABILE DATA IN HOMEPAGE.BLADE.PHP 
    return view('homepage', $data);
});

Route::get('/home', function () {

    $data = config("store");
    return view('homepage', $data);
});
