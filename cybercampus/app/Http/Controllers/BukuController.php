<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = buku::simplePaginate(5);
        return view('buku.index', compact('buku'));
    }

    public function formTambah()
    {
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        return view('buku.form_tambah', compact('kategori', 'penulis'));
    }

    public function tambah(Request $request)
    {
        $buku = new buku();
        $buku->judul = $request->judul;
        $buku->isbn = $request->isbn;
        $buku->kategori_id = $request->kategori_id;
        $buku->penulis_id = $request->penulis_id;
        $buku->save();
        return redirect()->route('admin.buku.index');
    }
}
