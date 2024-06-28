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

    $data = [
        "titolo" => "Le stringhe scelte sono:",
        "nome" => "Giuseppe",
        "cognome" => "De Rosa",
        "città" => "Napoli"
    ];
    return view('homepage', $data);
});

Route::get('/home', function () {
    $data = [
        "titolo" => "Le stringhe scelte sono:",
        "nome" => "Giuseppe",
        "cognome" => "De Rosa",
        "città" => "Napoli"
    ];
    return view('homepage', $data);
});
