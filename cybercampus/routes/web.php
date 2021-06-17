<?php

use App\Http\Controllers\SiteBackendController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BukuController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/', [SiteController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [SiteController::class, 'tentang'])->name('tentang')->middleware(['auth', 'permission:menambahkan-berita']);
Route::get('/percontohan', [SiteController::class, 'percontohan']);
Route::get('/kontak', [SiteController::class, 'kontak'])->name('kontak');
Route::get('/layanan', [SiteController::class, 'layanan']);
Route::get('/list-dosen/{tahun}', [SiteController::class, 'listDosen']);
Route::get('/coba-langsung', function () {
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
Route::get('/admin/dashboard', [SiteBackendController::class, 'index'])
                                ->middleware('auth')
                                ->name('admin');
Route::get('/admin/layanan', [LayananController::class, 'indexBackend'])
                                ->middleware('auth')
                                ->name('admin.layanan');
Route::get('/admin/layanan/detail/{id}', [LayananController::class, 'detailBackend'])
                                ->middleware('auth')
                                ->name('admin.detail');
Route::get('/admin/formtambah', [LayananController::class, 'formTambahBackend'])
                                ->middleware('auth')
                                ->name('admin.formtambah');
Route::post('/admin/layanan/tambah', [LayananController::class, 'tambahBackend'])
                                ->middleware('auth')
                                ->name('admin.tambah');
Route::get('/admin/formubah/{id}', [LayananController::class, 'formUbahBackend'])
                                ->middleware('auth')
                                ->name('admin.formubah');
Route::post('/admin/layanan/ubah/{id}', [LayananController::class, 'ubahBackend'])
                                ->middleware('auth')
                                ->name('admin.ubah');
Route::get('/admin/layanan/hapus/{id}', [LayananController::class, 'hapusBackend'])
                                ->middleware('auth')
                                ->name('admin.hapus');

// Form
Route::get('/cobaform', [SiteController::class, 'cobaForm'])->name('cobaform');
Route::post('/prosesform', [SiteController::class, 'prosesForm'])->name('prosesform');
Route::get('/layanan/formtambah', [LayananController::class, 'formtambah'])->name('layanan.formtambah');
Route::get('/layanan/formubah/{id}', [LayananController::class, 'formUbah'])->name('layanan.formubah');

// Kategori
Route::get('/admin/kategori/index', [KategoriController::class, 'index'])
                                ->middleware('auth')
                                ->name('admin.kategori.index');
Route::get('/admin/kategori/detail/{id}', [KategoriController::class, 'detail'])
                                ->middleware('auth')
                                ->name('admin.kategori.detail');
Route::get('/admin/kategori/formtambah', [KategoriController::class, 'formTambah'])
                                ->middleware('auth')
                                ->name('admin.kategori.formtambah');
Route::post('/admin/kategori/tambah', [KategoriController::class, 'tambah'])
                                ->middleware('auth')
                                ->name('admin.kategori.tambah');
Route::get('/admin/kategori/formubah/{id}', [KategoriController::class, 'formUbah'])
                                ->middleware('auth')
                                ->name('admin.kategori.formubah');
Route::post('/admin/kategori/ubah/{id}', [KategoriController::class, 'ubah'])
                                ->middleware('auth')
                                ->name('admin.kategori.ubah');
Route::get('/admin/kategori/hapus/{id}', [KategoriController::class, 'hapus'])
                                ->middleware('auth')
                                ->name('admin.kategori.hapus');


// Berita
Route::get('/admin/berita/index', [BeritaController::class, 'index'])
                                ->middleware(['auth', 'permission:index-berita'])
                                ->name('admin.berita.index');
Route::get('/admin/berita/detail/{id}', [BeritaController::class, 'detail'])
                                ->middleware(['auth', 'permission:detail-berita'])
                                ->name('admin.berita.detail');
Route::get('/admin/berita/formtambah', [BeritaController::class, 'formTambah'])
                                ->middleware(['auth', 'permission:menambahkan-berita'])
                                ->name('admin.berita.formtambah');
Route::post('/admin/berita/tambah', [BeritaController::class, 'tambah'])
                                ->middleware(['auth', 'permission:menambahkan-berita'])
                                ->name('admin.berita.tambah');
Route::get('/admin/berita/formubah/{id}', [BeritaController::class, 'formUbah'])
                                ->middleware(['auth', 'permission:edit-berita'])
                                ->name('admin.berita.formubah');
Route::post('/admin/berita/ubah/{id}', [BeritaController::class, 'ubah'])
                                ->middleware(['auth', 'permission:edit-berita'])
                                ->name('admin.berita.ubah');
Route::get('/admin/berita/hapus/{id}', [BeritaController::class, 'hapus'])
                                ->middleware(['auth', 'permission:hapus-berita'])
                                ->name('admin.berita.hapus');

// Gallery
Route::get('/gallery/upload', [GalleryController::class, 'formUpload'])->name('gallery.upload');
Route::post('/gallery/proses-upload', [GalleryController::class, 'prosesUpload'])->name('gallery.prosesUpload');
Route::get('/gallery/view-gallery/{id}', [GalleryController::class, 'viewGallery'])->name('gallery.viewGallery');

// UJIAN AKHIR SEMESTER
Route::get('/admin/buku/index', [BukuController::class, 'index'])
                                ->middleware('auth')
                                ->name('admin.buku.index');
Route::get('/admin/buku/formtambah', [BukuController::class, 'formTambah'])
                                ->middleware('auth')
                                ->name('admin.buku.formtambah');
Route::post('/admin/buku/tambah', [BukuController::class, 'tambah'])
                                ->middleware('auth')
                                ->name('admin.buku.tambah');