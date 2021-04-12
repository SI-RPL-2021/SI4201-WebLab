@extends('layout')
@section('title', 'Home Page')
@section('konten')
<!-- konten -->
<h5>Selamat Datang, {{ Auth::user()->nama }}</h5>

<!-- end of konten -->
@endsection