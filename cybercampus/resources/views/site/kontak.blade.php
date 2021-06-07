@extends('layouts.frontend.main')

@section('content')
    <h1 class="mt-4">Kontak Kami</h1>
    <form>
        <div class="form-group">
            <label for="nama">Nama </label>
            <input class="form-control" type="text" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="tanggapan">Tanggapan</label>
            <textarea class="form-control" name="tanggapan" id="tanggapan" cols="30" rows="10"></textarea>
        </div>
        <input class="btn btn-primary" type="button" value="Kirim" name="kirim">
    </form>
@if(Auth::user()->hasRole('member'))
    <h1>Teks ini cuma boleh dibaca oleh member</h1>
@endif
@endsection