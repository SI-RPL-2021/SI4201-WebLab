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
            <th scope="col">Status Validasi</th>
            {{-- <th scope="col">Jam Absen</th> --}}
        </tr>
    </thead>
    <tbody> 
        @foreach ($absens as $hadir)
        <tr>
        <td>{{$loop->iteration }}</td>
        <td>{{$hadir->nama_rapat}}</td>
        <td>{{$hadir->tgl_rapat}}</td>
        <td>{{$hadir->jam_rapat}}</td>
        <td>{{$hadir->status_validasi}}</td>
        </tr>
        @endforeach
    </tbody>
    
</table>
<!-- end of konten -->
@endsection