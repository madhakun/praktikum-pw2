@extends('layouts.frontend.main')

@section('content')
<div class="mt-4">
    <form action="{{route('layanan.tambah')}}" method="post">
    @csrf
        <div class="form-group">
            <label for="nama_layanan">Nama Layanan</label>
            <input type="text" name="nama_layanan" class="form-control">
        </div>
        <div class="form-group">
            <label for="deskripsi_layanan">Deskripsi Layanan</label>
            <textarea name="deskripsi_layanan" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Kirim" class="btn btn-primary">
    </form>
</div>
@endsection