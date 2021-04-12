@extends('layout')
@section('title', 'Cek Aproval Rapat')
@section('konten')
<!-- konten -->
@if (\Session::has('aprove'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('aprove') !!}</li>
            {{-- @php
                header('Location: http://localhost:8000/readRapat');
            @endphp --}}
        </ul>
    </div>
@endif
@if (\Session::has('disaprove'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('disaprove') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('edit'))
    <div class="alert alert-warning">
        <ul>
            <li>{!! \Session::get('edit') !!}</li>
            {{-- @php
                header('Location: http://localhost:8000/readRapat');
            @endphp --}}
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
                <th scope="col">Nama Pemohon</th>
                <th scope="col">Nama Rapat</th>
                <th scope="col">Tanggal Rapat</th>
                <th scope="col">Jam Rapat</th>
                <th scope="col">Link</th>
                <th scope="col">Status Aproval</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rapat as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->nama_rapat }}</td>
                    <td>{{ $p->tgl_rapat }}</td>
                    <td>{{ $p->jam_rapat }}</td>
                    <td>{{ $p->link }}</td>
                    <td>{{ $p->status_aproval }}</td>
                    <td>
                        <form method="GET">
                            <div class="row">
                                <div class="col">
                                    <a href="aprove/{{$p->id}}" class="btn btn-sm btn-block btn-success">Aprove Pengajuan</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="disaprove/{{$p->id}}" class="btn btn-sm btn-block btn-danger">Disaprove Pengajuan</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-sm btn-block btn-warning">Edit Pengajuan</button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- end of konten -->
@endsection