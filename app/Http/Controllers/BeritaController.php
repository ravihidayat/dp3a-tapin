<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index() {
        $beritas = Berita::all();

        return view('welcome', ['beritas' => $beritas]);
    }

    public function displayAll() {
        $beritas = Berita::all();
        $beritasPaginate = Berita::orderBy('id')->paginate(8);

        return view('berita', compact(['beritas', 'beritasPaginate']));
    }

    
}
