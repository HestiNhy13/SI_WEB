<!DOCTYPE html>
<html lang="{{ str_replace('_','_', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv-"X-UA-Compatible" content-"ie-edge">
    <title>{{ config('app.name') }}</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluide">
    <div class="container">
        <h1 class="display-4">Home Page</h1>
        <p class="lead"> Ini adalah halaman home</p>
    </div>
    <p>Nama : {{ $nama }}</p>
    <p>Nim : {{ $nim }}</p>
    <p>Program Studi : {{ $prodi }}</p>
    <ul>
        @foreach ($nim as $prodi )
        <li>{{ $prodi }}</li>
        
        @endforeach
    </ul>
</div>
@endsection

</body>
</html>