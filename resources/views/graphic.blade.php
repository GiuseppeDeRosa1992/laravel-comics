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
    <title>GRAPHIC MOVIE</title>
</head>

<body>

    {{-- STAMPO SOLO I FILM DELLA CATEGORIA GRAPHIC NOVEL  --}}

    @include('partials.header')

    @include('partials.jumbo')

    <main>
        <div class="text-center px-2 row m-0">
            @foreach ($movies as $movie)
                @if ($movie['type'] == 'graphic novel')
                    <div class="col-4 mt-3">
                        <div class="card p-0 h-100">
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
                    </div>
                @endif
            @endforeach
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
