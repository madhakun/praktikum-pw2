<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('beranda'); //Lokasi file : resources/views/beranda.php
    }

    public function tentang()
    {
        return view('site.tentang');
    }

    public function kontak()
    {
        return view('site.kontak');
    }

    public function layanan()
    {
        return view('site.layanan');
    }
}
