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
    <title>COMICS</title>
</head>

<body>
    <div class="text-center px-2">
        @foreach ($movies as $movie)
            {{-- VARIABILE TITLE DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
            <h2 class="m-0">Nome: {{ $movie['title'] }}</h2>
            {{-- VARIABILE DESCRIPTION DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
            <p>Descrizione: {{ $movie['description'] }}</p>
            {{-- VARIABILE PRICE DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
            <p>Prezzo: {{ $movie['price'] }}</p>
            {{-- VARIABILE SERIES DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
            <p>Serie: {{ $movie['series'] }}</p>
            {{-- VARIABILE TYPE DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
            <p>Data Di Uscita: {{ $movie['sale_date'] }}</p>
        @endforeach
    </div>
</body>

</html>
