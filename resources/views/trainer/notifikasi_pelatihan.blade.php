@extends('layout')
@section('title', 'Notifikasi Pelatihan')
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
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelatihan</th>
                <th scope="col">Study Group</th>
                <th scope="col">Tanggal Pelatihan</th>
                <th scope="col">Jam Pelatihan</th>
                <th scope="col">Link</th>
                <th scope="col">Aproval</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelatihan as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama_pelatihan }}</td>
                    <td>{{ $p->study_group }}</td>
                    <td>{{ $p->tgl_pelatihan }}</td>
                    <td>{{ $p->jam_pelatihan }}</td>
                    <td>{{ $p->link }}</td>
                    <td>
                        @if (($p->status_aproval) == 'waiting')
                            <button type="button" class="btn btn-block btn-warning">Waiting</button>
                        @endif
                        @if (($p->status_aproval) == 'aproved')
                            <button type="button" class="btn btn-block btn-success">Aproved</button>
                        @endif
                        @if (($p->status_aproval) == 'disaproved')
                            <button type="button" class="btn btn-block btn-danger">Disaproved</button>
                        @endif
                    </td>
                    <td>
                        <form method="GET">
                            <a href="goEditRapat/{{ $p->id }}" class="btn btn-warning">Edit</a>
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