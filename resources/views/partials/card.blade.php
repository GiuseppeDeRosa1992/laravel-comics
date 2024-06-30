<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CARD</title>
</head>

<body>
    <div class="text-center px-2 row m-0">
        {{-- CICLO DENTRO MOVIES CHE STA DENTRO STORE.PHP --}}
        @foreach ($movies as $movie)
            <div class="col-4 mt-3">
                <div class="card p-0 h-100">
                    <div class="row g-0 m-0">
                        <div class="col-md-4">
                            <img src="{{ $movie['thumb'] }}" class="w-100 rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Titolo: {{ $movie['title'] }}</h5>
                                <p class="card-text">Descrizione: {{ $movie['description'] }}</p>
                                <p class="card-text">Prezzo: {{ $movie['price'] }}</p>
                                <p class="card-text">Serie: {{ $movie['series'] }}</p>
                                <p class="card-text">Genere: {{ $movie['type'] }}</p>
                                <p class="card-text"><small class="text-muted">Data Di Uscita:
                                        {{ $movie['sale_date'] }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- VARIABILE TITLE DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
            {{-- <h2 class="m-0">Nome: {{ $movie['title'] }}</h2> --}}
            {{-- VARIABILE DESCRIPTION DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
            {{-- <p>Descrizione: {{ $movie['description'] }}</p> --}}
            {{-- VARIABILE PRICE DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
            {{-- <p>Prezzo: {{ $movie['price'] }}</p> --}}
            {{-- VARIABILE SERIES DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
            {{-- <p>Serie: {{ $movie['series'] }}</p> --}}
            {{-- VARIABILE TYPE DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
            {{-- <p>Data Di Uscita: {{ $movie['sale_date'] }}</p> --}}
        @endforeach
    </div>
</body>

</html>
