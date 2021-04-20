@extends('layout')
@section('title', 'Notifikasi Kegiatan')
@section('konten')
<!-- konten -->
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<div class="table-responsive">
    <div class="col-md-15 mt-5 mb-5">
        <h3 align="center">Notifikasi Kegiatan</h3>
    </div>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">Jenis Kegiatan</th>
                <th scope="col">Tanggal Kegiatan</th>
                <th scope="col">Jam Kegiatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
       
    </table>
</div>
<!-- end of konten -->
@endsection