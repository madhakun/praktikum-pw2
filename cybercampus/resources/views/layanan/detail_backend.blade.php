@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h2 mb-4 text-gray-800">Detail Layanan</h1>
    <div class="row">
        <div class="col-lg-12">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <h3 class="mb-4">{{$layanan->nama_layanan}}</h3>
                    <p>
                        {!!html_entity_decode($layanan->deskripsi_layanan)!!} 
                    </p>

                    <a href="{{route('admin.layanan')}}" class="btn btn-primary">Back</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
