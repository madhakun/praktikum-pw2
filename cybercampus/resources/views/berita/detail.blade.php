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
                    <table class="table table-hover">
                        <tr>
                            <td>id</td>
                            <td>{{$berita->id}}</td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td>{{$berita->judul}}</td>
                        </tr>
                        <tr>
                            <td>Isi</td>
                            <td>{!!html_entity_decode($berita->isi)!!}</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>{{$berita->kategori->nama_kategori}}</td>
                        </tr>
                        <tr>
                            <td>Penulis</td>
                            <td>{{$berita->user->name}}</td>
                        </tr>

                    </table>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection