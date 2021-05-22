@extends('layout')
@section('title', 'Notifikasi Pelatihan')
@section('konten')
<!-- konten -->
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('hadir'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('hadir') !!}</li>
            <?php
                // echo "header('Location: http://localhost:8000/readRapat');"
            ?>
        </ul>
    </div>
@endif
<div class="table-responsive">
    <div class="col-md-15 mt-5 mb-5">
        <h3 align="center">Notifikasi Pelatihan</h3>
    </div>
    
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pelatihan</th>
                <th scope="col">Study Group</th>
                <th scope="col">Tanggal Pelatihan</th>
                <th scope="col">Jam Pelatihan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelatihan as $x)    
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $x->nama_pelatihan }}</td>
                <td>{{ $x->study_group }}</td>
                <td>{{ $x->tgl_pelatihan }}</td>
                <td>{{ $x->jam_pelatihan }}</td>
                <td>
                    <a href="{{ $x->link }}" target="_blank">Link</a>
                    <a href="kehadiran/{{ $x->id }}">Absen</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection