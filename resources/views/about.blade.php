{{-- ESTENDO IL LAYOUT BASE --}}
@extends('layouts.layout')

{{-- SCRIVO SU YIELDS(MAIN-CONTENT) CON @SECTION(MAIN - CONTENT) E DENTRO SCRIVO O INCLUDO QUELLO CHE MI SERVE PER QUELLA PAGINA --}}
@section('main-content')
    @include('partials.card')
@endsection
