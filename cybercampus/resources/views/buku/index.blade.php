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
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Buku</h6>
                    <a href="{{route('admin.buku.formtambah')}}" class="btn btn-sm btn-primary float-right">Tambah Buku</a>
                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Buku</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($buku as $brt)
                            <tr>
                                <td>{{$brt->id}}</td>
                                <td>{{$brt->judul}}</td>
                                <td>{{$brt->kategori->nama_kategori}}</td>
                                <td>{{$brt->penulis->nama_penulis}}</td> 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$buku->links()}}
                </div>
            </div>
       </div>
    </div>
</div>
@endsection