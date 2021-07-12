@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid jumbotron-custom-profil">
    <div class="row p-5">
        <div class="col-7 profil-caption">
            <div class="container p-2">
                <h1 class="display-4 page-header">Mari berkenalan dengan tim kami!</h1>
            </div>
            <div class="container p-2">
                <p class="lead page-sub-header">Cari tahu lebih banyak tentang DP3A Kab. Tapin di sini.</p>
            </div>
        </div>
        <div class="col-5">
            <!-- Put picture here -->
            <img src="{{ asset('assets/profil.png') }}" alt="Profil" class="profil-img">
        </div>
    </div>
</div>

<div class="tentang">
    <div class="text-center p-3 jarak">
        <q class="font-weight-bold sambutan">Morbi sagittis ultricies ex, a tempus lorem suscipit <br>
            non. Donec semper leo ut lobortis condimentum. Orci <br>
            varius natoque penatibus et magnis</q>
            <div class="rcorners-a"></div>
        <p class="hj-lili">Hj Lailian Noor, S.Sos, M.M • Kepala DInas DP3A Tapin</p>
    </div>   

    <div class="kotak tentang">
    <div class="p-2">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="tentang-logo">
    </div>
    <div class="p-3 text-center tentang-jarak">
        <h2 class="font-weight-bold tentang-caption">Tentang DP3A Tapin</h2>
        <div class="rcorners"></div>
        <div class="isi-caption">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo <br>
            elit facilisi volutpat quis euismod. Magna sed velit volutpat <br>
            pellentesque enim, dui nunc. Nisi sodales dignissim vulputate.</p>

        </div>
    </div>
    <div class="p-3">
        <img src="{{ asset('assets/quality.png') }}" alt="Quality" class="quality">
    </div>
</div>

<div class="struktur p-3 text-center struktur">
    <h2 class="p-2 tentang-caption">Struktur Organisasi</h2>
    <div class="rcorners-b"></div>
    <div class="isi-caption">
        <p>Meet the team that  makes the process of this system fast and <br>
        painless as possible to provide you with good result .</p>
    </div>
    <div>
        <div class="kotak-bidang">
            <div class="bendahara">
            </div>
            <div class="sekre">
            </div>
            <div class="staff2">
            </div>
            <div class="staff1">
            </div>
            <div class="kadin">
                <h2>Kepala Dinas</h2>
                <h3> Hj. Lailian Noor, S.Sos., MM.</h3>
            </div> 
        </div>
        <div class="KHPK">
            <div class="p-2 bidang">
                <h3>Bidang Kualitas Hidup Perempuan dan Keluarga</h3>
            </div> 
            <div class="kotak-2">
                 <div class="bendahara"></div>
                 <div class="sekre"></div>
                 <div class="staff2"></div>
                 <div class="staff1"></div>
                 <div class="kadin">
                    <h2>Kepala Bidang</h2>
                    <h3>Noorhalimah S.KM., MM.</h3>
                 </div> 
            </div>
        </div>
        <div class="PHA">
            <div class="p-2 bidang">
                <h3>Bidang Pemenuhan Hak Anak</h3>
            </div>
            <div class="kotak-3">
                 <div class="bendahara"></div>
                 <div class="sekre"></div>
                 <div class="staff2"></div>
                 <div class="staff1"></div>
                 <div class="kadin">
                    <h2>Kepala Bidang</h2>
                    <h3>Henny Herlena, S.Pd., MA.</h3>
                 </div> 
            </div>
        </div>
        <div class="PPAD">
             <div class="p-2 bidang">
             <h3>Bidang Perlindungan Perempuan Anak dan Data Informasi</h3>
             </div>
             <div class="kotak-4">
                 <div class="bendahara"></div>
                 <div class="sekre"></div>
                 <div class="staff2"></div>
                 <div class="staff1"></div>
                 <div class="kadin">
                     <h2>Kepala Bidang</h2>
                     <h3>Hermadiansyah, S.Sos.</h3>
                 </div> 
            </div>
        </div>
    </div>
</div>
<!-- <div class="jarak-footer"></div> -->
@endsection