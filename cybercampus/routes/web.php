<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/beranda',[SiteController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [SiteController::class, 'tentang'])->name('tentang');
Route::get('/percontohan', [SiteController::class, 'percontohan']);
Route::get('/kontak', [SiteController::class, 'kontak'])->name('kontak');
Route::get('/layanan', [SiteController::class, 'layanan']);
Route::get('/list-dosen/{tahun}', [SiteController::class, 'listDosen']);
Route::get('/coba-langsung', function(){
    echo "ini dari route secara langsung <br>";
    echo "ini juga adalah statement<br>";
});
Route::get('/layanan-raw', [SiteController::class, 'tampilLayananRaw']);
Route::get('/layanan/index', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/layanan/detail/{id}', [LayananController::class, 'detail'])->name('layanan.detail');
Route::post('/layanan/tambah', [LayananController::class, 'tambah'])->name('layanan.tambah');
Route::post('/layanan/ubah/{id}', [LayananController::class, 'ubah'])->name('layanan.ubah');
Route::get('/layanan/hapus/{id}', [LayananController::class, 'hapus'])->name('layanan.hapus');

// Backend
Route::get('/admin', [BackendController::class, 'index']);

// Form
Route::get('/cobaform',[SiteController::class, 'cobaForm'])->name('cobaform');
Route::post('/prosesform', [SiteController::class, 'prosesForm'])->name('prosesform');
Route::get('/layanan/formtambah', [LayananController::class, 'formtambah'])->name('layanan.formtambah');
Route::get('/layanan/formubah/{id}', [LayananController::class, 'formUbah'])->name('layanan.formubah');

// kode presensi : aiokk