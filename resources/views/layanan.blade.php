@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid jumbotron-custom-layanan">
    <div class="row p-5">
        <div class="col-7">
            <div class="container p-2">
                <h1 class="layanan-caption">Layanan DP3A Tapin</h1>
            </div>
        </div>
    </div>
</div>
<div class="div-layanan d-flex justify-content-center">
    <div class="uptd">
        <img src="{{ asset('assets/uptd.png')}}" class="uptd-img" alt="uptd">
        <h3>Buat Aduan Online</h3>
    </div>
    <a href="{{ url('/aduan') }}"><div class="puspaga">
        <img src="{{ asset('assets/puspaga.png')}}" class="puspaga-img" alt="puspaga">
        <h3>Pendaftaran Puspaga</h3>
    </div></a>
</div>
@endsection