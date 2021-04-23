@extends('layouts.frontend.main')

@section('content')
    <h1 class="mt-4">Layanan</h1>
    <p>Layanan program studi sistem informasi meliputi :
        <ol>
        @foreach($list_layanan as $ls)
            <li>{{$ls}}</li>
        @endforeach
        </ol>
    </p>
@endsection