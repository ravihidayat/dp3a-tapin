@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid jumbotron-galeri">
    <div class="row p-5">
        <div class="col-7 kontak-caption">
            <div class="container p-2">
                <h1 class="display-4 page-header">Hubungi Kami</h1>
            </div>
            <div class="container p-2">
                <p class="lead page-sub-header">Jika anda memiliki pertanyaan atau membutuhkan informasi seputar layanan kami, silahkan menghubungi kami.</p>
            </div>
        </div>
        <div class="col-5 kontak-img">
            <!-- Put picture here -->
            <img src="{{ asset('assets/kontak.png') }}" alt="Kontak" class="">
        </div>
    </div>
    <div class="row gelombang"><img src="{{ asset('assets/gelombang.png') }}" alt="Gelombang"></div>
</div>

<div class="hubungi galeri-p2">
    <h1 class="text-center">Hubungi Kami</h1>
    <p class="text-center">Mohon perhatian, pesan akan kami balas dalam jangka waktu 12 jam kerja</p>
    <div class="form text-center">
        <form action="#">
            <input type="text" name="nama" class="isi" id="nama" placeholder="Nama" required>
            <input type="email" name="email" class="isi" id="email" placeholder="Email " required><br><br>
            <textarea name="pesan" id="pesan" class="isi-2" cols="44" rows="5" placeholder="Pesan "></textarea><br><br>
            <input type="submit" class="round-btn" value="KIRIM">
        </form>
    </div>
    <div class="map-dp3a" style="margin-top:28%;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3984.5848480501677!2d115.167828!3d-2.934969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc746953d71095a9!2sDinas%20Pemberdayaan%20Perempuan%20dan%20Perlindungan%20Anak!5e0!3m2!1sen!2sus!4v1623869249346!5m2!1sen!2sus" 
          width="600" height="450" style="border:0;border-radius:5px;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
@endsection