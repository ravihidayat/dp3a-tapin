<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\GaleriController;
use Intervention\Image;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/aduan', function () {
    return view('aduan');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/', [App\Http\Controllers\GaleriController::class, 'index'])->name('/');

// Route::get('/', [App\Http\Controllers\BeritaController::class, 'index'])->name('/');

Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'displayAll'])->name('/galeri');

Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'displayAll'])->name('/berita');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->name('auth.login');

Route::post('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store']);

Route::get('storage/{path}/{filename}', function ($path,$filename)
{

    $path = storage_path('app/public/'.$path.'/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
