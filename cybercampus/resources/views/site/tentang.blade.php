@extends('layouts.frontend.main')

@section('content')
    <h1 class="mt-4">Program <?php echo $nama_prodi?></h1>
    <h2>Nama Ketua Jurusan : <?php echo $kajur ?></h2>
    <p>Nama Universitas : <b>{{$universitas}} </b></p>
    <p>Program studi sistem informasi mulai beroperasi pada tahun 2014</p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque tempore dolorum repellendus quidem nihil
        similique libero fugiat, recusandae, assumenda labore voluptas! Expedita officiis soluta corrupti totam natus
        aliquam? Nam, accusamus.</p>

    @if(15 < 10)
        <h2>Berhasil</h2>
    @else
        <h2>salah</h2>
    @endif
@endsection