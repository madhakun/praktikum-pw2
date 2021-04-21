<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('beranda'); //Lokasi file : resources/views/beranda.php
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

    public function listDosen($tahun)
    {
        echo "Ini adalah halaman list dosen $tahun";
    }
}
