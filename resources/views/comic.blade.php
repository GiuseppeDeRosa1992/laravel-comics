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
    <title>COMIC MOVIE</title>
</head>

<body>

    {{-- STAMPO SOLO I FILM DELLA CATEGORIA COMIC BOOK  --}}

    @include('partials.header')

    @include('partials.jumbo')

    <main>
        <div class="text-center px-2 row m-0">
            @foreach ($movies as $movie)
                @if ($movie['type'] == 'comic book')
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
                @endif
            @endforeach
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
