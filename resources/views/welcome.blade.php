@extends('layouts.main')
@section('content')
<body>
<div class="jumbotron jumbotron-fluid jumbotron-custom ">
    <img src="{{ asset('assets/grkhd.jpg') }}" alt="Dp3a">

    <div class="row align-items-center p-5 ukuran">
        <div class="p-2">
            <h1 class="display-5 page-header welc">Selamat datang di Website
                <br> Pusat Pelayanan dan Pengaduan Terpadu
                <br>Dinas Pemberdayaan Perempuan
                <br>dan Perlindungan Anak (DP3A)
                Kabupaten Tapin</h1>
        </div>
        <div class="col-5" style="top:250px;left:490px;">
            <p class="lead text-center page-sub-header font-welc">Untuk menikmati layanan atau membuat aduan,
                silahkan tekan tombol yang ada di bawah. </p>
            <div class="d-flex justify-content-center">
                @guest
                @if (Route::has('login'))
                <a class="btn btn-first mr-4" href="{{ route('login') }}" role="button">Masuk</a>
                @endif

                @if (Route::has('register'))
                <a class="btn btn-second" href="{{ route('register') }}" role="button">Daftar</a>
                @endif

                @else
                <a class="btn btn-first mr-4" href="{{ url('/layanan') }}" role="button">Layanan</a>
                <a class="btn btn-second" href="{{ url('/aduan') }}" role="button">Aduan</a>

                @endguest
            </div>
        </div>
    </div>
</div>

<div class="berita">
  <h1 class="text-center">Berita</h1>
  <br>
  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox" style="height:550px;">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="col-md-3" style="float:left">
       <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>
      
       <div class="col-md-3" style="float:left">
       <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>

    </div>
    <!--/.Second slide-->

   

  </div>
  <!--/.Slides-->

</div>
</div>

<div class="galeri hubungi-margin">
  <br>
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
  <div class="carousel-inner carousel-inner-custom justify-content-center berita2-img">
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

<div class="hubungi-margin"></div>

<div class="hub">
<br>
  <br>
    <h1 class="text-center">Hubungi Kami</h1>
    <p class="text-center">Mohon perhatian, pesan akan kami balas dalam jangka waktu 12 jam kerja</p>
    <div class="form text-center">
        <form action="#">
            <input type="text" name="nama" class="isi" id="nama" placeholder="Nama" required>
            <input type="email" name="email" class="isi" id="email" placeholder="Email " required><br><br>
            <textarea name="pesan" class="isi-2" id="pesan" cols="44" rows="5" placeholder="Pesan "></textarea><br><br>
            <input type="submit" class="round-btn" value="KIRIM">
        </form>
    </div>
    <div class="map-dp3a" style="margin-top:28%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3984.5848480501677!2d115.167828!3d-2.934969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc746953d71095a9!2sDinas%20Pemberdayaan%20Perempuan%20dan%20Perlindungan%20Anak!5e0!3m2!1sen!2sus!4v1623869249346!5m2!1sen!2sus" 
      width="600" height="450" style="border:0; border-radius:5px;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="hubungi-margin"></div>
</div>
</body>
@endsection