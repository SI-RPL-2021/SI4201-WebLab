@extends('layout')
@section('title', 'Daftar Akun Anggota')
@section('konten')
<!-- konten -->
<h3 class="card-title" align="center">Konfirmasi Akun Anggota</h3>
<br>
<table class="table table-responsive-sm table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th class="align-middle" scope="col">No. </th>
            <th class="align-middle" scope="col">Nama</th>
            <th class="align-middle" scope="col">NIM</th>
            <th class="align-middle" scope="col">Kelas</th>
            <th class="align-middle" scope="col">Divisi</th>
            <th class="align-middle" scope="col">Study Group</th>
            <th class="align-middle" scope="col">Email</th>
            <th class="align-middle" scope="col">Status</th>
            <th class="align-middle" scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        
        <?php $index = 1; ?>
        @foreach ($angg as $data)
        @if($data->Status == 'Pending')
            
        <tr>
            <td>{{$index++}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->nim}}</td>
            <td>{{$data->kelas}}</td>
            <td>{{$data->divisi}}</td>
            <td>{{$data->study_group}}</td>
            <td>{{$data->email}}</td>
            <td><span class="badge btn-danger">{{$data->Status}}</span>
            </td>
            <td>
                    <a href="/approveanggota/{{$data->id}}" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin ingin mengapprove akun anggota?');">Approve</a>
                    <a href="/deletetemp/{{$data->id}}"  class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus akun anggota?');">Delete</a>
            </td>
        </tr>
        @endif
        @endforeach
        {{-- @endforeach --}}
    </tbody>
</table>
<!-- end of konten -->
@endsection