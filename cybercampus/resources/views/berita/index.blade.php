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
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Berita</h6>
                    <a href="{{route('admin.berita.formtambah')}}" class="btn btn-sm btn-primary float-right">Tambah Berita</a>
                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Berita</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($berita as $brt)
                            <tr>
                                <td>{{$brt->id}}</td>
                                <td>{{$brt->judul}}</td>
                                <td>{{$brt->kategori->nama_kategori}}</td>
                                <td>
                                    <a href="{{route('admin.berita.detail', ['id'=>$brt->id])}}" class="btn btn-sm btn-info">detail</a>
                                    <a href="{{route('admin.berita.formubah', ['id'=>$brt->id])}}" class="btn btn-sm btn-warning">edit</a>
                                    <a href="{{route('admin.berita.hapus', ['id'=>$brt->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus ?')">hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$berita->links()}}
                </div>
            </div>
       </div>
    </div>
</div>
@endsection