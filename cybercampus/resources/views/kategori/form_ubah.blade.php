@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>
    <div class="row">
        <div class="col-lg-12">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Kategori</h6>
                    <a href="{{route('admin.kategori.index')}}" class="btn btn-sm btn-success float-right">Kembali</a>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="{{route('admin.kategori.ubah', ['id' =>$kategori->id])}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nama_layanan">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="10">{{$kategori->deskripsi}}</textarea>
                        </div>
                        <input type="submit" value="Kirim" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection