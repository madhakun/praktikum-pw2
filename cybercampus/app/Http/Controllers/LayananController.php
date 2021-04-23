<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('layanan.index', compact('layanan'));
    }

    public function detail($id)
    {
        $layanan = Layanan::find($id);

        return view('layanan.detail', compact('layanan'));
    }

    public function tambah()
    {
        echo 'Fungsi Tambah';
        $layanan = new Layanan();
        $layanan->nama_layanan = 'Antar Jemput Anak Sekolah';
        $layanan->deskripsi_layanan = 'Mengantar dan menjemput anak sekolah yang ada';
        $layanan->save();
    }

    public function ubah($id)
    {
        echo 'Sudah diubah';
        $layanan = Layanan::find($id);
        $layanan->nama_layanan = 'Penelitian dan Pengembangan';
        $layanan->save();
    }

    public function hapus($id)
    {
        echo 'Sudah dihapus';
        $layanan = Layanan::find($id);
        $layanan->delete();
    }
}
