@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="row p-5">
        <div class="col-7">
            <h1 class="display-5 page-header">Selamat datang di Website
                Pusat Pelayanan dan Pengaduan Terpadu
                Dinas Pemberdayaan Perempuan
                dan Perlindungan Anak (DP3A)
                Kabupaten Tapin</h1>
        </div>
        <div class="col-5">
            <p class="lead text-left page-sub-header">Untuk menikmati layanan atau membuat aduan,
                silahkan tekan tombol yang ada di bawah. </p>
            <div class="d-flex justify-content-start">
                @guest
                @if (Route::has('login'))
                <a class="btn btn-light" href="{{ route('login') }}" role="button">Masuk</a>
                @endif

                @if (Route::has('register'))
                <a class="btn btn-dark" href="{{ route('register') }}" role="button">Daftar</a>
                @endif

                @else
                <a class="btn btn-light" href="{{ url('/layanan') }}" role="button">Layanan</a>
                <a class="btn btn-dark" href="{{ url('/aduan') }}" role="button">Aduan</a>

                @endguest
            </div>
        </div>
    </div>
</div>

<div class="berita">
    <h1 class="text-center">Berita</h1>
</div>

<div class="galeri">
    <h1 class="text-center">Galeri</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets/kantor.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First Slide Label</h5>
                    <p>Mock Slide</p>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/kantor.jpg') }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First Slide Label</h5>
                        <p>Mock Slide</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/kantor.jpg') }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First Slide Label</h5>
                        <p>Mock Slide</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="hubungi-kami">

        </div>
        @endsection