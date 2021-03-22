@extends('layout')
@section('title', 'Daftar Akun Anggota')
@section('konten')
<!-- konten -->
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<h3>Daftar Akun Anggota</h3>
<table class="table table-responsive-sm table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th class="align-middle">No. </th>
            <th class="align-middle">Nama</th>
            <th class="align-middle">NIM</th>
            <th class="align-middle">Kelas</th>
            <th class="align-middle">Divisi</th>
            <th class="align-middle">StudyGroup</th>
            <th class="align-middle">Email</th>
            <th class="align-middle">Action</th>
        </tr>
    </thead>
</table>
<!-- end of konten -->
@endsection