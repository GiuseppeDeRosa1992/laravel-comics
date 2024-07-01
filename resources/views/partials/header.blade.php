{{-- costruisco header in un file separato --}}
<header>
    <div class="row m-0 justify-content-between align-items-center py-2 bg-white">
        <figure id="logo" class="col-12 col-sm-2 col-md-2 p-2 p-sm-0 m-0 text-center">
            <img src="/dc-logo.png" alt="" class="w-25">
            {{-- STAMPO LA ROTTA CORRENTE CON IL METODO Route::currentRouteName --}}
            <span class="text-black">{{ Route::currentRouteName() }}</span>
        </figure>
        <nav class="col-12 col-sm-9 p-0">
            <ul class="row m-0 p-0 justify-content-center">
                <li class="col-12 col-sm-3 col-md-2 p-0 text-center my-fs">
                    <a class="text-decoration-none hover" href="{{ route('home') }}">
                        <b>Home Page</b>
                    </a>
                </li>
                <li class="col-12 col-sm-3 col-md-2 p-0 text-center my-fs">
                    <a class="text-decoration-none hover" href="{{ route('all') }}">
                        <b>All Movie</b>
                    </a>
                </li>
                <li class="col-12 col-sm-3 col-md-2 p-0 text-center my-fs">
                    <a class="text-decoration-none hover" href="{{ route('comics') }}">
                        <b>Comic Book Movie</b>
                    </a>
                </li>
                <li class="col-12 col-sm-3 col-md-2 p-0 text-center my-fs">
                    <a class="text-decoration-none hover" href="{{ route('graphics') }}">
                        <b>Graphic Novel Movie</b>
                    </a>
                </li>
            </ul>
        </nav>
</header>
