@extends('layout')
@section('title', 'Dokumentasi & Validasi Kegiatan')
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
        <h1 align="center">Dokumentasi & Validasi Kegiatan</h1>
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
            {{--  Untuk menggabungkan data antara pelatihan dan rapat  --}}
            @foreach ($combineData as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->nama_rapat }}</td>
                    <td>{{ $p->jenis_kegiatan }}</td>
                    <td>
                        <form method="GET">
                            <a href="uploadDokumentasiRapat/{{ $p->id }}" class="btn btn-primary mb-2" target="_blank">Dokumentasi</a>
                            <br>
                            <a href="validasiKehadiranRapat/{{ $p->id }}" class="btn btn-primary ml-4" target="_blank">Validasi</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            {{--  Untuk menampilkan data pelatihan  --}}
            @foreach ($pelatihan as $pe)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pe->nama }}</td>
                    <td>{{ $pe->nama_pelatihan }}</td>
                    <td>{{ $pe->jenis_kegiatan }}</td>
                    <td>
                        <form method="GET">
                            <a href="uploadDokumentasiPelatihan/{{ $pe->id_pelatihan }}" class="btn btn-primary mb-2" target="_blank">Dokumentasi</a>
                            <br>
                            <a href="validasiKehadiranPelatihan/{{ $pe->id_pelatihan }}" class="btn btn-primary ml-4" target="_blank">Validasi</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- end of konten -->
@endsection