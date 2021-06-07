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
                    <h6 class="m-0 font-weight-bold text-primary">Detail Kategori</h6>
                    <a href="{{route('admin.kategori.index')}}" class="btn btn-sm btn-success float-right">Kembali</a>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <td>id</td>
                            <td>{{$kategori->id}}</td>
                        </tr>
                        <tr>
                            <td>Nama Kategori</td>
                            <td>{{$kategori->nama_kategori}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi Kategori</td>
                            <td>{{$kategori->deskripsi}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection