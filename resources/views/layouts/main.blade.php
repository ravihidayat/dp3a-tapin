<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav Icon -->
    <link rel="icon" href="{{ URL::asset('assets/favicon.ico') }}" type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/globalCustom.css') }}">

</head>

<body class="app">
    <div id="font-nav">
        <nav class="navbar navbar-expand-lg navbar-main-custom d-flex px-4">
            <div class="mr-auto order-0 p-2 px-4">
                <a class="navbar-brand mr-auto navbar-brand-custom" href="{{ url('/') }}"> <img src="{{asset('assets/logo.png')}}" alt="Logo"> <span class="text-wrap"> {{ config('app.name', 'Laravel') }}</span> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-kotak" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto order-1 p-2 d-flex">
                    <a class="nav-item {{ Request::path() === '/' ? 'active' : ''}} nav-item-custom nav-link p-2" href="{{ url('/') }}">Beranda</a>
                    <a class="nav-item {{ Request::path() === 'berita' ? 'active' : ''}} nav-item-custom nav-link p-2" href="{{ url('/berita') }}">Berita</a>
                    <a class="nav-item {{ Request::path() === 'galeri' ? 'active' : ''}} nav-item-custom nav-link p-2" href="{{ url('/galeri') }}">Galeri</a>
                    <a class="nav-item {{ Request::path() === 'profil' ? 'active' : ''}} nav-item-custom nav-link p-2" href="{{ url('/profil') }}">Profil</a>
                    <a class="nav-item {{ Request::path() === 'layanan' ? 'active' : ''}} nav-item-custom nav-link p-2" href="{{ url('/layanan') }}">Layanan</a>
                    <a class="nav-item {{ Request::path() === 'aduan' ? 'active' : ''}} nav-item-custom nav-link p-2" href="{{ url('/aduan') }}">Buat Aduan</a>
                    <a class="nav-item {{ Request::path() === 'kontak' ? 'active' : ''}} nav-item-custom nav-link p-2" href="{{ url('/kontak') }}">Kontak</a>
                    <a class="nav-item {{ Request::path() === 'dashboard' ? 'active' : ''}} nav-item-custom nav-link p-2" href="{{ url('/dashboard') }}">
                        <div class="profile">
                            <div class="profile-circle">
                                <div class="profile-user"><img src="{{asset('assets/user.png')}}" alt="User"></div>
                            </div>
                        </div>
                    </a>
                    @if(Auth::user())
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endif
                </div>
            </div>
        </nav>

        <main class="margine-footer main-custom">
            @yield('content')
        </main>

        <footer>
            <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
                <div class="mx-auto p-2 d-flex flex-column">
                    <div class="p-2">

                        <a class="navbar-brand justify-content-center align-middle font-footer" href="{{ url('/') }}"><img src="{{asset('assets/logo.png')}}" alt="Logo" class="footer-logo"><span class="text-wrap">{{ config('app.name', 'Laravel') }}</span></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltBottom" aria-controls="navbarNavAltBottom" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavAltBottom">
                        <div class="navbar-nav mx-auto p-2 d-flex">
                            <a class="nav-item {{ Request::path() === '/' ? 'active' : ''}} nav-link p-2" href="{{ url('/') }}">Beranda</a>
                            <a class="nav-item {{ Request::path() === 'berita' ? 'active' : ''}} nav-link p-2" href="{{ url('/berita') }}">Berita</a>
                            <a class="nav-item {{ Request::path() === 'galeri' ? 'active' : ''}} nav-link p-2" href="{{ url('/galeri') }}">Galeri</a>
                            <a class="nav-item {{ Request::path() === 'profil' ? 'active' : ''}} nav-link p-2" href="{{ url('/profil') }}">Profil</a>
                            <a class="nav-item {{ Request::path() === 'layanan' ? 'active' : ''}} nav-link p-2" href="{{ url('/layanan') }}">Layanan</a>
                            <a class="nav-item {{ Request::path() === 'aduan' ? 'active' : ''}} nav-link p-2" href="{{ url('/aduan') }}">Buat Aduan</a>
                            <a class="nav-item {{ Request::path() === 'kontak' ? 'active' : ''}} nav-link p-2" href="{{ url('/kontak') }}">Kontak</a>
                        </div>
                    </div>
                </div>
            </nav>
        </footer>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>