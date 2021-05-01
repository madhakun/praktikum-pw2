<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataku;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('site.beranda'); //Lokasi file : resources/views/beranda.php
    }

    public function layanan()
    {
        $list_layanan = [
            'Pendidikan dan Pengajaran',
            'Bakti pada masyarakat',
            'Penelitian'
        ];
        return view('site.layanan', compact('list_layanan'));
    }

    public function kontak()
    {
        return view('site.kontak');
    }

    public function tentang()
    {
        $nama_prodi = 'Sistem Informasi';
        $universitas = 'Universitas Tanjungpura';
        $kajur = 'Ilhamsyah';

        return view('site.tentang', compact('nama_prodi', 'universitas', 'kajur'));
    }

    public function percontohan()
    {
        $dataku = new Dataku();
        $dt = $dataku->semuaData();
        return view('site.percontohan', compact('dt'));
    }

    public function tampilLayananRaw()
    {
        $layanan = DB::select('select * from layanan');
        return view('site.tampil_layanan_raw', compact('layanan'));
    }

    public function listDosen($tahun)
    {
        echo "Ini adalah halaman list dosen $tahun";
    }

    public function cobaForm()
    {
        return view('site.coba_form');
    }

    public function prosesForm(Request $request)
    {
        $nama = $request->nama;
        // di sini ada proses masukkan nama ke database

        // setelah dipreses dilempar ke halaman lain
        return redirect()->route('kontak');
    }
}
