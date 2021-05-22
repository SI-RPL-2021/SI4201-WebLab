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
            <th scope="col">NIM</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Kehadiran</th>
            {{-- <th scope="col">Jam Absen</th> --}}
        </tr>
    </thead>
    <tbody> 
        @foreach ($kehadirans as $hadir)
        <tr>
        <td>{{$hadir->Nim}}</td>
        <td>{{$hadir->tanggal}}</td>
        <td>{{$hadir->kehadiran}}</td>
        </tr>
        @endforeach
    </tbody>
    
</table>
<!-- end of konten -->
@endsection