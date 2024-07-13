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
})->name("home"); //DO IL NOME ALLA ROTTA IN MODO CHE SE CAMBIA QUALCOSA NON DEVO ANDARE A CAMBAIRE IN OGNI PAGINA DOVE E DICHIARATA QUESTA ROTTA

Route::get('/home', function () {

    //RICHIAMO ARRAY ASSOCIATIVO DA STORE.PHP config("store") E LO METTO NELLA VARIABILE DATA
    $data = config("store");
    return view('homepage', $data);
});

Route::get('/all', function () {

    $data = config("store");
    return view('about', $data);
})->name("all"); //DO IL NOME ALLA ROTTA IN MODO CHE SE CAMBIA QUALCOSA NON DEVO ANDARE A CAMBAIRE IN OGNI PAGINA DOVE E DICHIARATA QUESTA ROTTA

Route::get('/comic-book', function () {

    $data = config("store");
    return view('comic', $data);
})->name("comics"); //DO IL NOME ALLA ROTTA IN MODO CHE SE CAMBIA QUALCOSA NON DEVO ANDARE A CAMBAIRE IN OGNI PAGINA DOVE E DICHIARATA QUESTA ROTTA

Route::get('/graphic-novel', function () {

    $data = config("store");
    return view('graphic', $data);
})->name("graphics"); //DO IL NOME ALLA ROTTA IN MODO CHE SE CAMBIA QUALCOSA NON DEVO ANDARE A CAMBAIRE IN OGNI PAGINA DOVE E DICHIARATA QUESTA ROTTA

// ROTTA PER STAMPARE LA CARD DI UN SINGOLO FILM CHE PRENDO DALLA LISTA COMPLETA DI FILM TRAMITE L'INDICE
Route::get('/all/{indice}', function ($indice) {
    $movies = config("store.movies");
    // SE INDICE è UGUALE A 0 O MENO DELLA LUNGHEZZA DELLA LISTA MOVIES ALORA STAMPA SENNO STAMPA ERRORE
    if ($indice >= 0 && $indice <= count($movies)) {
        $data = [
            "movie" => $movies[$indice]
        ];
        return view('details-movie', $data);
    } else {
        return abort(404);
    };
})->name("details");
