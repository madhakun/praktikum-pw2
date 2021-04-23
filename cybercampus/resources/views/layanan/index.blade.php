@extends('layouts.frontend.main')

@section('content')

    <h1 class="mt-4">Layanan Kami (Eloquent)</h1>
    <ul>
        @foreach($layanan as $lyn)
            <li><a href="detail/{{$lyn->id}}">{{$lyn->nama_layanan}}</a></li>
        @endforeach
    </ul>
@endsection