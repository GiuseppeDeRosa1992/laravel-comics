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
        {{-- VARIABILE TITOLO DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
        <h1 class="m-0">{{ $titolo }}</h1>
        {{-- VARIABILE NOME DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
        <p>Nome: {{ $nome }}</p>
        {{-- VARIABILE COGNOME DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
        <p>Cognome: {{ $cognome }}</p>
        {{-- VARIABILE CITTA DALL'ARRAY ASSOCIATIVO IN STORE.PHP --}}
        <p>Squadra Tifata: {{ $città }}</p>
    </div>
</body>

</html>
