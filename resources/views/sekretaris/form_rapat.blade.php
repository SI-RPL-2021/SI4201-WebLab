@extends('layout')
@section('title', 'Buat Rapat')
@section('konten')
<!-- konten -->
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('failed'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('failed') !!}</li>
        </ul>
    </div>
@endif
<form action="rapat/create" method="get">
    {{-- @csrf --}}
    <div class="form-group ml-3">
        <label>Nama Rapat</label>
        <input type="text" class="form-control" name="nama_rapat" style="width:95%">
    </div>
    <div class="form-group ml-3">
        <label>NIM Pemohon</label>
        <input type="number" class="form-control" name="pemohon" style="width:95%" value="{{Auth::user()->nim}}">
    </div>
    <div class="form-group ml-3">
        <label>Tanggal Rapat</label>
        <input type="date" class="form-control" name="tgl_rapat" style="width:95%">
    </div>
    <div class="form-group ml-3">
        <label>Jam Rapat</label>
        <input type="time" class="form-control" name="jam_rapat" style="width:95%">
    </div>
    <div class="form-group ml-3">
        <label>Link</label>
        <input type="text" class="form-control" name="link" style="width:95%" placeholder="ex: https://meet.google.com/xxx-xxxx-xxx">
        <small class="form-text text-muted">Mohon untuk menulis alamat link dengan format https"//meet.google.com/xxx-xxxx-xxx</small>
    </div>
    <div class="form-group ml-3">
        <input type="submit" class="btn btn-primary mb-2" value="Submit">
        <a href="javascript:history.back()" class="btn btn-primary mb-2">Cancel</a>
    </div>
</form>

<!-- end of konten -->
@endsection