@extends('layout')
@section('title', 'Daftar Foto Dokumentasi')
@section('konten')
<!-- konten -->
@if (\Session::has('rapat_berhasil'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('rapat_berhasil') !!}</li>
            @php
                header('Location: http://localhost:8000/daftarDokumentasi');
            @endphp
        </ul>
    </div>
@endif
@if (\Session::has('pelatihan_berhasil'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('pelatihan_berhasil') !!}</li>
            @php
                header('Location: http://localhost:8000/daftarDokumentasi');
            @endphp
        </ul>
    </div>
@endif

<div>
    <div class="px-3 mb-3 border rounded">
        <h3 style="text-align: center">Dokumentasi Rapat</h3>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Rapat</th>
                    <th scope="col">Tanggal Rapat</th>
                    <th scope="col">Foto Dokumentasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rapat as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nama_rapat }}</td>
                        <td>{{ $p->tgl_rapat }}</td>
                        <td><a href="{{ asset('file/' . $p->file) }}" target="_blank">Foto Dokumentasi</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="px-3 border rounded">
        <h3 style="text-align: center">Dokumentasi Pelatihan</h3>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pelatihan</th>
                    <th scope="col">Tanggal Pelatihan</th>
                    <th scope="col">Foto Dokumentasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelatihan as $pe)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pe->nama_pelatihan }}</td>
                        <td>{{ $pe->tgl_pelatihan }}</td>
                        <td><a href="{{ asset('file/' . $pe->file) }}" target="_blank">Foto Dokumentasi</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection