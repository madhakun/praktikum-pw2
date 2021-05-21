@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Index Backend!</h1>
    <div class="row">
        <div class="col-lg-12">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <form action="{{route('layanan.ubah', ['id' =>$layanan->id])}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nama_layanan">Nama Layanan</label>
                            <input type="text" name="nama_layanan" class="form-control" value="{{$layanan->nama_layanan}}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_layanan">Deskripsi Layanan</label>
                            <textarea name="deskripsi_layanan" class="form-control" cols="30" rows="10">{{$layanan->deskripsi_layanan}}</textarea>
                        </div>
                        <input type="submit" value="Kirim" class="btn btn-primary">
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection