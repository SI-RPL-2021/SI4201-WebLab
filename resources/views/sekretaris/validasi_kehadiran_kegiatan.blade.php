@extends('layout')
@section('title', 'Validasi Kehadiran Kegiatan')
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
        <h1 align="center">Validasi Kehadian Kegiatan</h1>
    </div>
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
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rapat as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama_rapat }}</td>
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
                            <a href="goEditPelatihan/{{ $p->id }}" class="btn btn-warning">Edit</a>
                            <a href="deletePelatihan/{{ $p->id }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk membatalkan pengajuan pelatihan ini?');">Hapus</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- end of konten -->
@endsection