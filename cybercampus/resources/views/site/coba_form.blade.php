@extends('layouts.frontend.main')

@section('content')
<div class="mt-4">
    <form action="prosesform" method="POST">
        @csrf
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim"  class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <input type="submit" value="Kirim" class="btn btn-primary">
    </form>
</div>
@endsection