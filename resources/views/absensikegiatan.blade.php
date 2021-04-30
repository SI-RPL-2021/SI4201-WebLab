@extends('layout')
@section('title', 'Absensi Kegiatan')
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
            <th scope="col">No</th>
            <th scope="col">Nama Kegiatan</th>
            <th scope="col">Jenis Kegiatan</th>
            <th scope="col">Tanggal Kegiatan</th>
            <th scope="col">Kehadiran</th>
        </tr>
    </thead>
    {{-- <tbody>
        @foreach 
        @if ($hadirPelatihan as $hp)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $hp->nama_pelatihan }}</td>
                <td>{{ $hp->jenis_kegiatan }}</td>
                <td>{{ $hp->tgl_pelatihan }}</td>
                <td>{{ $hp->jam_pelatihan }}</td>
                <td>
                        <a href="{{ $hp-> }}" >Hadir</a>
                    @endif
                </td>
            </tr>
        @endif
        @if ($hadirRapat as $hr)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $hr->nama_rapat }}</td>
            <td>{{ $hr->jenis_kegiatan }}</td>
            <td>{{ $hr->tgl_rapat }}</td>
            <td>{{ $hr->jam_rapat }}</td>
            <td>
                    <a href="{{ $hp-> }}" >Hadir</a>
                @endif
            </td>
        </tr>
    @endif
        @endforeach
    </tbody> --}}
</table>
<!-- end of konten -->
@endsection