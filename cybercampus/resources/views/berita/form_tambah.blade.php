@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Berita</h1>
    <div class="row">
        <div class="col-lg-12">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Berita</h6>
                    <a href="{{route('admin.berita.index')}}" class="btn btn-sm btn-success float-right">Kembali</a>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="{{route('admin.berita.tambah')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="judul">Judul Berita</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea name="isi" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cover_img">Gambar Cover Berita</label>
                            <input type="file" class="form-control" name="cover_img">
                        </div>
                        <div class="form-group">
                            <label for="kategori_id">Kategori Berita</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                @foreach($kategori as $kat)
                                <option value="{{$kat->id}}">{{$kat->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" value="Kirim" class="btn btn-primary">
                    </form>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection