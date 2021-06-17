@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Buku</h1>
    <div class="row">
        <div class="col-lg-12">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Buku</h6>
                    <a href="{{route('admin.buku.index')}}" class="btn btn-sm btn-success float-right">Kembali</a>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="{{route('admin.buku.tambah')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="isi">ISBN</label>
                            <input type="text" name="isbn" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kategori_id">Kategori Buku</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                @foreach($kategori as $kat)
                                <option value="{{$kat->id}}">{{$kat->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="penulis_id">Penulis</label>
                            <select name="penulis_id" id="penulis_id" class="form-control">
                                @foreach($penulis as $pnl)
                                <option value="{{$pnl->id}}">{{$pnl->nama_penulis}}</option>
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