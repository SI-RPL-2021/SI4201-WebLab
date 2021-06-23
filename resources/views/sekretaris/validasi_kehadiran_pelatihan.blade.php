@extends('layout')
@section('title', 'Validasi Kehadiran Pelatihan')
@section('konten')
<!-- konten -->
@if (\Session::has('hapus_berhasil'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('hapus_berhasil') !!}</li>
            @php
                header('Location: http://localhost:8000/readRapat');
            @endphp
        </ul>
    </div>
@endif
@if (\Session::has('hapus_gagal'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('hapus_gagal') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('edit_berhasil'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('edit_berhasil') !!}</li>
            @php
                header('Location: http://localhost:8000/readRapat');
            @endphp
        </ul>
    </div>
@endif
@if (\Session::has('edit_gagal'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('edit_gagal') !!}</li>
        </ul>
    </div>
@endif
<div class="table-responsive">
    <div class="col-md-15 mt-5 mb-5">
        <h1 align="center">Validasi Kehadian Pelatihan</h1>
        {{-- @foreach ($absenpelatihananggota as $pe)
        <h5 align="center">{{ $pe->nama_pelatihan }}</h5>
        @endforeach --}}
    </div>
    
    <a href="goEditPelatihan/" class="btn btn-success pull-right mb-2 ">Validasi Semua</a>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">NIM</th>
                <th scope="col">Kelas</th>
                <th scope="col">Divisi</th>
                <th scope="col">Study Group</th>
                <th scope="col">Email</th>
                <th scope="col">Status Validasi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absenpelatihananggota as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->nim }}</td>
                    <td>{{ $p->kelas }}</td>
                    <td>{{ $p->divisi }}</td>
                    <td>{{ $p->study_group }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->status_validasi }}</td>
                    <td>
                        <form method="GET">
                            <a href="goEditPelatihan/{{ $p->id }}" class="btn btn-warning btn-sm ml-2 mb-2" onclick="return confirm('Apakah anda yakin untuk mengedit pengajuan pelatihan ini?');">Edit</a><br>
                            <a href="deletePelatihan/{{ $p->id }}" class="btn btn-danger btn-sm mb-2">Hapus</a><br>
                            <a href="validasiAnggotaPelatihan/{{ $p->id }}" class="btn btn-success btn-sm ml-1">Valid</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- end of konten -->
@endsection