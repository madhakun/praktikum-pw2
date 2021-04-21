<?php

use App\Http\Controllers\SiteController;
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

Route::get('/beranda',[SiteController::class, 'beranda']);
Route::get('/tentang', [SiteController::class, 'tentang']);
Route::get('/kontak', [SiteController::class, 'kontak']);
Route::get('/layanan', [SiteController::class, 'layanan']);
Route::get('/list-dosen/{tahun}', [SiteController::class, 'listDosen']);
Route::get('/coba-langsung', function(){
    echo "ini dari route secara langsung <br>";
    echo "ini juga adalah statement<br>";
});