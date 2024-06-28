<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style.css">
    <title>LARAVEL COMICS</title>
</head>

<body>
    <div class="text-center">
        {{-- STAMPO SOLO IL PRIMO FILM --}}
        <h1>QUI STAMPO SOLO IL PRIMO FILM</h1>
        <p>PER IL CICLO CLICCA SU ABOUT <a href="/about">ABOUT</a></p>
        {{-- VARIABILE TITLE DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
        {{-- <h2 class="m-0">Nome: {{ $movies[0]['title'] }}</h2> --}}
        {{-- VARIABILE DESCRIPTION DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
        {{-- <p>Descrizione: {{ $movies[0]['description'] }}</p> --}}
        {{-- VARIABILE PRICE DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
        {{-- <p>Prezzo: {{ $movies[0]['price'] }}</p> --}}
        {{-- VARIABILE SERIES DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
        {{-- <p>Serie: {{ $movies[0]['series'] }}</p> --}}
        {{-- VARIABILE TYPE DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
        {{-- <p>Data Di Uscita: {{ $movies[0]['sale_date'] }}</p> --}}

        {{-- STAMPO SOLO LA PRIMA CARD --}}
        <div class="card mb-3 p-0">
            <div class="row g-0 m-0">
                <div class="col-md-4">
                    <img src="{{ $movies[0]['thumb'] }}" class="w-100 rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $movies[0]['title'] }}</h5>
                        <p class="card-text">Descrizione: {{ $movies[0]['description'] }}</p>
                        <p class="card-text">Prezzo: {{ $movies[0]['price'] }}</p>
                        <p class="card-text">Serie: {{ $movies[0]['series'] }}</p>
                        <p class="card-text">Genere: {{ $movies[0]['type'] }}</p>
                        <p class="card-text"><small class="text-muted">Data Di Uscita:
                                {{ $movies[0]['sale_date'] }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
