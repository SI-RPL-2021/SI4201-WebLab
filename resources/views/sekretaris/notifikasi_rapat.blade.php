@extends('layout')
@section('title', 'Notifikasi Rapat')
@section('konten')
<!-- konten -->
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- end of konten -->
@endsection