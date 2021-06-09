<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/globalCustom.css') }}">

</head>

<body class="app">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light d-flex" style="background: rgba(240, 234, 247, 0.8)">
            <div class="mr-auto order-0 p-2">
                <a class="navbar-brand mr-auto" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto order-1 p-2 d-flex">
                    @if(Route::currentRouteName() == '/')
                    <a class="nav-item nav-link p-2" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>

                    @else
                    <a class="nav-item nav-link p-2" href="{{ url('/') }}">Beranda</a>
                    @endif
                    <a class="nav-item nav-link p-2" href="{{ url('/berita') }}">Berita</a>
                    <a class="nav-item nav-link p-2" href="{{ url('/galeri') }}">Galeri</a>
                    <a class="nav-item nav-link p-2" href="{{ url('/profil') }}">Profil</a>
                    <a class="nav-item nav-link p-2" href="{{ url('/layanan') }}">Layanan</a>
                    <a class="nav-item nav-link p-2" href="{{ url('/aduan') }}">Buat Aduan</a>
                    <a class="nav-item nav-link p-2" href="{{ url('/kontak') }}">Kontak</a>
                    <a class="nav-item nav-link p-2" href="{{ url('/kontak') }}">{{ Route::currentRouteName()}}</a>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <nav class="navbar navbar-expand-lg navbar-dark" style="background: #0B0D17">
                <div class="mx-auto p-2 d-flex flex-column">
                    <div class="p-2">

                        <a class="navbar-brand justify-content-center align-middle" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltBottom" aria-controls="navbarNavAltBottom" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavAltBottom">
                        <div class="navbar-nav mx-auto p-2 d-flex">
                            <a class="nav-item nav-link active p-2" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link p-2" href="{{ url('/berita') }}">Berita</a>
                            <a class="nav-item nav-link p-2" href="{{ url('/galeri') }}">Galeri</a>
                            <a class="nav-item nav-link p-2" href="{{ url('/profil') }}">Profil</a>
                            <a class="nav-item nav-link p-2" href="{{ url('/layanan') }}">Layanan</a>
                            <a class="nav-item nav-link p-2" href="{{ url('/aduan') }}">Buat Aduan</a>
                            <a class="nav-item nav-link p-2" href="{{ url('/kontak') }}">Kontak</a>
                        </div>
                    </div>
                </div>
            </nav>
        </footer>
    </div>
</body>

</html>