@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="row p-5">
        <div class="col-7">
            <div class="container p-2">
                <h1 class="display-4">Hubungi Kami</h1>
            </div>
            <div class="container p-2">
                <p class="lead">Jika anda memiliki pertanyaan atau membutuhkan informasi seputar layanan kami, silahkan menghubungi kami.</p>
            </div>
        </div>
        <div class="col-5">
            <!-- Put Picture Here -->
        </div>
    </div>
</div>

<div class="hubungi">
    <h1 class="text-center">Hubungi Kami</h1>
    <p class="text-center">Mohon perhatian, pesan akan kami balas dalam jangka waktu 12 jam kerja</p>
    <div class="form text-center">
        <form action="#">
            <input type="text" name="nama" id="nama" placeholder="Nama" required>
            <input type="email" name="email" id="email" placeholder="Email " required><br><br>
            <textarea name="pesan" id="pesan" cols="44" rows="5" placeholder="Pesan "></textarea><br><br>
            <input type="submit" value="KIRIM">
        </form>
    </div>
</div>
@endsection