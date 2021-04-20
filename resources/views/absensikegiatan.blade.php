@extends('layout')
@section('title', 'Absensi Kegiatan')
@section('konten')
<!-- konten -->
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<h3 class="card-title" align="center">Absensi Kegiatan</h3>
<br>
<table class="table table-responsive-sm table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kegiatan</th>
            <th scope="col">Jenis Kegiatan</th>
            <th scope="col">Tanggal Kegiatan</th>
            <th scope="col">Kehadiran</th>
        </tr>
    </thead>
    
</table>
<!-- end of konten -->
@endsection