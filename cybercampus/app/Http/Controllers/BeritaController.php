<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::simplePaginate(5);
        return view('berita.index', compact('berita'));
    }

    public function detail($id)
    {
        $berita = Berita::find($id);

        return view('berita.detail', compact('berita'));
    }

    public function formTambah()
    {
        $kategori = Kategori::all();
        return view('berita.form_tambah', compact('kategori'));
    }

    public function tambah(Request $request)
    {
        $target_directory = 'gambar';
        $request->validate([
            'cover_img'=>'mimes:png,jpg|max:1024',
        ]);
        $file = $request->file('cover_img');
        $filename= time(). '-' .$file->getClientOriginalName();
        $request->cover_img->move(public_path('gambar'), $filename);

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->cover_img = $filename;
        $berita->kategori_id = $request->kategori_id;
        $berita->user_id = Auth::id();
        $berita->save();
        return redirect()->route('admin.berita.index');
    }

    public function formUbah($id)
    {
        $kategori = Kategori::all();
        $berita = Berita::find($id);
        return view('berita.form_ubah', compact('kategori', 'berita'));
    }

    public function ubah(Request $request, $id)
    {
        $target_directory = 'gambar';
        $request->validate([
            'cover_img'=>'mimes:png,jpg|max:1024',
        ]);
        $file = $request->file('cover_img');
        $filename= time(). '-' .$file->getClientOriginalName();
        $request->cover_img->move(public_path('gambar'), $filename);

        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->cover_img = $filename;
        $berita->kategori_id = $request->kategori_id;
        $berita->user_id = Auth::id();
        $berita->save();
        return redirect()->route('admin.berita.detail', ['id' => $berita->id]);
    }

    public function hapus($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->route('admin.berita.index');
    }
}
