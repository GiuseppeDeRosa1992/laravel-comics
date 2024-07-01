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
    {{-- CREO IL LAYOUT CHE POI PORTERO' IN TUTTE LE MIE PAGINE CON YIELD --}}

    <div class="text-center">
        {{-- INCLUDO L'HEADER --}}
        @include('partials.header')

        <main>
            {{-- INCLUDO JUMBO --}}
            @include('partials.jumbo')

            {{-- METODO YIELDS CHE RICHIAMO IN OGNI PAGINA E GLI PASSO QUELLO CHE DEVE STAMPARE MA IL RESTO DEL LAYOUT RIMANE QUESTO CAMBIA SOLO LA SEZIONE YIELDS --}}
            @yield('main-content')
        </main>

        {{-- INCLUDO IL FOOTER --}}
        @include('partials.footer')
    </div>
</body>

</html>
