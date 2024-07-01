{{-- ESTENDO IL LAYOUT A QUESTA PAGINA --}}
@extends('layouts.layout')

{{-- SCRIVO SU YIELDS(MAIN-CONTENT) CON @SECTION(MAIN - CONTENT) E DENTRO SCRIVO O INCLUDO QUELLO CHE MI SERVE PER QUELLA PAGINA --}}
@section('main-content')
    <div class="card p-0 mt-3">
        <div class="row g-0 m-0">
            <div class="col-md-4">
                <img src="{{ $movies[0]['thumb'] }}" class="w-100 rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><b>Titolo:</b> {{ $movies[0]['title'] }}</h5>
                    <p class="card-text"><b>Descrizione:</b> {{ $movies[0]['description'] }}</p>
                    <p class="card-text"><b>Prezzo:</b> {{ $movies[0]['price'] }}</p>
                    <p class="card-text"><b>Serie:</b> {{ $movies[0]['series'] }}</p>
                    <p class="card-text"><b>Genere:</b> {{ $movies[0]['type'] }}</p>
                    <p class="card-text"><b>Data Di Uscita:</b>
                        {{ $movies[0]['sale_date'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
