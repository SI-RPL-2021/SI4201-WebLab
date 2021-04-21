@extends('layout')
@section('title', 'Cek Aproval Pelatihan')
@section('konten')
<!-- konten -->
@if (\Session::has('aprove'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('aprove') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('disaprove'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('disaprove') !!}</li>
        </ul>
    </div>
@endif
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pemohon</th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">Jenis kegiatan</th>
                </tr>
        </thead>
        <tbody>