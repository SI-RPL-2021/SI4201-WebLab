@extends('layout')
@section('title', 'Notifikasi Rapat')
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
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Rapat</th>
                <th scope="col">Tanggal Rapat</th>
                <th scope="col">Jam Rapat</th>
                <th scope="col">Link</th>
                <th scope="col">Aproval</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rapat as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama_rapat }}</td>
                    <td>{{ $p->tgl_rapat }}</td>
                    <td>{{ $p->jam_rapat }}</td>
                    <td>{{ $p->link }}</td>
                    <td>
                        @if (($p->status_aproval) == 'waiting')
                        <button type="button" class="btn btn-warning">Waiting</button>
                        @endif
                    </td>
                    <td>
                        <form method="GET">
                            <button type="button" class="btn btn-warning">Edit</button>
                            <a href="deleteRapat/{{ $p->id }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk membatalkan pengajuan rapat ini?');">Hapus</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- end of konten -->
@endsection