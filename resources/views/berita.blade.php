@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid jumbotron-custom-berita">
    <div class="row p-5">
        <div class="col-7 berita-caption">
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
            <img src="{{ asset('assets/berita.png') }}" alt="Berita" class="berita-img">
        </div>
    </div>
</div>

<div class="berita-p2">
    <h1 class="text-center">Berita</h1>

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
  <div class="carousel-inner berita2-img">
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

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
@endsection