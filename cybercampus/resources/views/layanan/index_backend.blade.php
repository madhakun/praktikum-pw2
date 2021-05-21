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
                    <a href="{{route('admin.formtambah')}}" class="btn btn-primary">Tambah Layanan</a>
                        <ul>
                            @foreach($layanan as $lyn)
                                <li>
                                    {{$lyn->nama_layanan}}
                                    <a href="{{route('admin.detail', ['id'=>$lyn->id])}}">Detail</a>
                                    <a href="{{route('admin.formubah', ['id'=>$lyn->id])}}">Ubah</a>
                                    <a href="{{route('admin.hapus', ['id'=>$lyn->id])}}">Hapus</a>
                                </li>
                            @endforeach
                        </ul>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection