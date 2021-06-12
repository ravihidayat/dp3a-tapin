@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid jumbotron-custom">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <div class="carousel slide" id="slider" data-ride="carousel">
  <!--indicators-->
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item carousel-item-custom active">
      <img src="https://picsum.photos/1000/600/">
      <div class="carousel-caption carousel-caption-custom">
        <h4>Welcome</h4>
        <p>Travel! Enjoy!</p>
      </div>
    </div>

    <div class="carousel-item carousel-item-custom" id="slide2">
      <img src="https://picsum.photos/1000/600/">
      <div class="carousel-caption carousel-caption-custom">
        <h4>Welcome</h4>
        <p>Travel! Enjoy!</p>
      </div>
    </div>

    <div class="carousel-item carousel-item-custom" id="slide3">
      <img src="https://picsum.photos/1000/600/">
      <div class="carousel-caption carousel-caption-custom">
        <h4>Welcome</h4>
        <p>Travel! Enjoy!</p>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>     
<div class="hubungi-kami">

</div>
@endsection