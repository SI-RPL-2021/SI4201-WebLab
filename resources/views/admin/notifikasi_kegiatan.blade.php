@extends('layout')
@section('title', 'Home Page')
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
        <h3 align="center">Notifikasi Kegiatan</h3>
    </div>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pemohon</th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">Jenis Kegiatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rapat as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->pemohon }}</td>
                    <td>{{ $p->nama_rapat }}</td>
                    <td>{{ $p->jam_rapat }}</td>
                    <td>
                        <form method="GET">
                            <a href="cek_aprovalRapat" class="btn btn-info mb-2">cek</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            {{-- @foreach ($pelatihan as $pe)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pe->pemohon }}</td>
                    <td>{{ $pe->nama_rapat }}</td>
                    <td>{{ $pe->jam_rapat }}</td>
                    <td>
                        <form method="GET">
                            <a href="cek_aprovalPelatihan" class="btn btn-info mb-2">cek</a>
                        </form>
                    </td>
                </tr>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
<!-- end of konten -->
@endsection