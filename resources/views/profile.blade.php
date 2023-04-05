@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1>Profile</h1>
@endsection

@section('content')
@foreach($dataTotal as $baris)
<ul>
    <li>NIM : {{ $baris['id'] }}</li>
    <li>Nama : {{ $baris['nama'] }}</li>
</ul>
@endforeach
@endsection

@section('footer')
<p class="text-center">
    2141720032 | <a class="text-body" href="https://github.com/lukasvalentino971">Lukas Valentino</a>
</p>
@endsection