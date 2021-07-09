<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Berita;

class GaleriController extends Controller
{
    public function index() {
        $galeris = Galeri::all();
        $beritas = Berita::all();

        return view('welcome', compact(['galeris', 'beritas']));
    }

    public function displayAll() {
        $galeris = Galeri::all();

        return view('galeri', ['galeris' => $galeris]);
    }
}
