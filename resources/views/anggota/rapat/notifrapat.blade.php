@extends('layout')
@section('title', 'Notifikasi Rapat')
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
        </ul>
    </div>
@endif
@if (\Session::has('failed_hadir'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('failed_hadir') !!}</li>
        </ul>
    </div>
@endif
<div class="table-responsive">
    <div class="col-md-15 mt-5 mb-5">
        <h3 align="center">Notifikasi Rapat</h3>
    </div>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Rapat</th>
                <th scope="col">Tanggal Rapat</th>
                <th scope="col">Jam Rapat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rapat as $hr)    
            <tr>
                @if($hr->status_aproval !== "waiting" and $hr->status_aproval !== "disaproved")
                <td>{{ $loop->iteration }}</td>
                <td>{{ $hr->nama_rapat }}</td>
                <td>{{ $hr->tgl_rapat }}</td>
                <td>{{ $hr->jam_rapat }}</td>
                <td>
                    <a href="{{ $hr->link }}" class="btn btn-block btn-warning" target="_blank">Link</a>
                    <a href="kehadirans/{{ $hr->id }}" class="btn btn-block btn-success">Absen</a>
                </td>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection