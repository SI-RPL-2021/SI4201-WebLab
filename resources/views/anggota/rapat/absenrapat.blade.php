@extends('layout')
@section('title', 'Absensi Rapat')
@section('konten')
<!-- konten -->
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<h3 class="card-title" align="center">Absensi Rapat</h3>
<br>
<table class="table table-responsive-sm table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Rapat</th>
            <th scope="col">Tanggal Rapat</th>
            <th scope="col">Jam Rapat</th>
            <th scope="col">Status Validasi Absen</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($absens as $hr)    
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $hr->nama_rapat }}</td>
                <td>{{ $hr->tgl_rapat }}</td>
                <td>{{ $hr->jam_rapat }}</td>
                <td>{{ $hr->status_validasi }}</td>
            </tr>
            @endforeach
        </tr>
    </tbody>
</table>
<!-- end of konten -->
@endsection