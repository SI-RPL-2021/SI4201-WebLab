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
        <tr>
            <th scope="col">1</th>
            <td>Faizal Hudya</td>
            <td>1202180000</td>
            <td>SI-42-01</td>
            <td>Trainer</td>
            <td>Data Engineer</td>
            <td>faizalhudya@gmail.com</td>
            <td>
                <div class="row">
                    <div class="col"><a href="updateakun" class="btn btn-warning btn-block" onclick="return confirm('Apakah anda yakin ingin mengedit akun?');">Edit</a></div>
                    <div class="col"><button type="button"  class="btn btn-danger btn-block" onsubmit="return confirm('Apakah anda yakin ingin menghapus akun?');">Delete</button></div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<!-- end of konten -->
@endsection