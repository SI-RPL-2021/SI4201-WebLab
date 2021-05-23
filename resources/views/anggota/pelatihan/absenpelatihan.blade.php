@extends('layout')
@section('title', 'Absensi Pelatihan')
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
            {{-- <th scope="col">No</th> --}}
            <th scope="col">No</th>
            <th scope="col">Nama Pelatihan</th>
            <th scope="col">Tanggal Pelatihan</th>
            <th scope="col">Jam Pelatihan</th>
            <th scope="col">Status Validasi Absen</th>
            {{-- <th scope="col">Jam Absen</th> --}}
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($absen as $x)    
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $x->nama_pelatihan }}</td>
                <td>{{ $x->tgl_pelatihan }}</td>
                <td>{{ $x->jam_pelatihan }}</td>
                <td>{{ $x->status_validasi }}</td>
            </tr>
            @endforeach
        </tr>
    </tbody>
</table>
<!-- end of konten -->
@endsection