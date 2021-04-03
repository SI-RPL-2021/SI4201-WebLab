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
<h3 class="card-title" align="center">Daftar Akun Anggota</h3>
<br>
<table class="table table-responsive-sm table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th class="align-middle" scope="col">No. </th>
            <th class="align-middle" scope="col">Nama</th>
            <th class="align-middle" scope="col">NIM</th>
            <th class="align-middle" scope="col">Kelas</th>
            <th class="align-middle" scope="col">Divisi</th>
            <th class="align-middle" scope="col">StudyGroup</th>
            <th class="align-middle" scope="col">Email</th>
            <th class="align-middle" scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($anggota as $data) { ?> --}}
        <?php $index = 1; ?>
        @foreach ($angg as $data)
            
        <tr>
            <td>{{$index++}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->nim}}</td>
            <td>{{$data->kelas}}</td>
            <td>{{$data->divisi}}</td>
            <td>{{$data->study_group}}</td>
            <td>{{$data->email}}</td>
            <td>
                <div class="row">
                    <div class="col"><a href="/updateakun/{{$data->id}}" class="btn btn-warning btn-block" onclick="return confirm('Apakah anda yakin ingin mengedit akun?');">Edit</a></div>
                    <div class="col"><a href="/delete/{{$data->id}}"  class="btn btn-danger btn-block" onclick="return confirm('Apakah anda yakin ingin menghapus akun?');">Delete</a></div>
                </div>
            </td>
        </tr>
        @endforeach
        {{-- @endforeach --}}
    </tbody>
</table>
<!-- end of konten -->
@endsection