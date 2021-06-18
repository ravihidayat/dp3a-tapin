@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid jumbotron-galeri">
    <div class="row p-5">
        <div class="col-7 galeri-caption">
            <div class="container p-2">
                <h1 class="display-4 page-header">Tetap update, </h1>
                <h1 class="display-4 page-header">ikuti foto-foto terbaru kami</h1>
            </div>
            <div class="container p-2">
                <p class="lead page-sub-header">Nikmati foto-foto terbaru dari aktivitas dan kegiatan yang kami laksanakan di sini.</p>
            </div>
        </div>
        <div class="col-5">
            <!-- Put picture here -->
            <img src="{{ asset('assets/galeri.png') }}" alt="Galeri" class="galeri-img">
        </div>
    </div>
    <div class="row gelombang"><img src="{{ asset('assets/gelombang.png') }}" alt="Gelombang"></div>
</div>


<div class="galeri galeri-p2">
    <div class="row p-5">
        <div class="col-3">Galeri1</div>

        <div class="col-3">Galeri2</div>

        <div class="col-3">Galeri3</div>

        <div class="col-3">Galeri4</div>

        <div class="col-3">Galeri5</div>

        <div class="col-3">Galeri6</div>

        <div class="col-3">Galeri7</div>

        <div class="col-3">Galeri8</div>
    </div>
</div>
@endsection