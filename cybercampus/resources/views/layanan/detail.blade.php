@extends('layouts.frontend.main')

@section('content')
    <h1 class="mt-4">Detail Layanan</h1>
    Nama Layanan : {{$layanan->nama_layanan}} <br>
    Deskriptsi Layanan : {{$layanan->deskripsi_layanan}} <br>

    <a href="../index">back</a>
@endsection
