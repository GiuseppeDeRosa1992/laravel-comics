{{-- ESTENDO IL LAYOUT BASE --}}
@extends('layouts.layout')

{{-- SCRIVO SU YIELDS(MAIN-CONTENT) CON @SECTION(MAIN - CONTENT) E DENTRO SCRIVO O INCLUDO QUELLO CHE MI SERVE PER QUELLA PAGINA --}}
@section('main-content')
    <div class="card p-0 mt-3">
        <div class="row g-0 m-0">
            <div class="col-md-4">
                <img src="{{ $movie['thumb'] }}" class="w-100 rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><b>Titolo:</b> {{ $movie['title'] }}</h5>
                    <p class="card-text"><b>Descrizione:</b> {{ $movie['description'] }}</p>
                    <p class="card-text"><b>Prezzo:</b> {{ $movie['price'] }}</p>
                    <p class="card-text"><b>Serie:</b> {{ $movie['series'] }}</p>
                    <p class="card-text"><b>Genere:</b> {{ $movie['type'] }}</p>
                    <p class="card-text"><b>Data Di Uscita:</b>
                        {{ $movie['sale_date'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
