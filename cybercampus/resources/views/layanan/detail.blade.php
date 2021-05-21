@extends('layouts.frontend.main')

@section('content')
<h1 class="mt-4">Detail Layanan</h1>
Nama Layanan : {{$layanan->nama_layanan}} <br>
Deskriptsi Layanan : {!!html_entity_decode($layanan->deskripsi_layanan)!!} <br>

<a href="{{route('layanan.index')}}" class="btn btn-primary">Back</a>
@endsection
