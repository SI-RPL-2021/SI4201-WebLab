@extends('layout')
@section('title', 'Cek Aproval Rapat')
@section('konten')
<!-- konten -->
@if (\Session::has('aprove'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('aprove') !!}</li>
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
        </ul>
    </div>
@endif
@if (\Session::has('edit_gagal'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('edit_gagal') !!}</li>
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
                <th scope="col">NamaPemohon</th>
                <th scope="col">NamaRapat</th>
                <th scope="col">TanggalRapat</th>
                <th scope="col">JamRapat</th>
                <th scope="col">Link</th>
                <th scope="col">StatusAproval</th>
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
                                    <a href="aprove/{{$p->id}}" class="btn mb-2 btn-block btn-success">Aprove Pengajuan</a>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    <a href="disaprove/{{$p->id}}" class="btn mb-2 btn-block btn-danger">Disaprove Pengajuan</a>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    <a href="goEditRapatAdmin/{{ $p->id }}" class="btn mb-2 btn-block btn-warning">Edit Pengajuan</a>
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