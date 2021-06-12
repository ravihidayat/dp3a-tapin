@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="row p-5">
        <div class="col-7">
            <div class="container">
                <h1 class="display-4 page-header">Tetap update, </h1>
                <h1 class="display-4 page-header">ikuti berita terbaru kami</h1>
            </div>
            <div class="container">
                <p class="lead page-sub-header">Baca dan nikmati berita terbaru dari aktivitas dan kegiatan yang kami laksanakan di sini.</p>
            </div>
        </div>
        <div class="col-5">
            <!-- Put picture here -->
        </div>
    </div>
</div>

<div class="berita">
    <h1 class="text-center">Berita</h1>

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
                    <h5>Siji</h5>
                    <p>Eko</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/kantor.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/kantor.jpg') }}" alt="Third slide">
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
    <div class="row p-5">
        <div class="col-3">Berita1</div>

        <div class="col-3">Berita2</div>

        <div class="col-3">Berita3</div>

        <div class="col-3">Berita4</div>

        <div class="col-3">Berita5</div>

        <div class="col-3">Berita6</div>

        <div class="col-3">Berita7</div>

        <div class="col-3">Berita8</div>
    </div>
</div>
@endsection