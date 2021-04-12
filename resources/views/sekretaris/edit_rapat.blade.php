@extends('layout')
@section('title', 'Edit Rapat')
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
<form action="editRapat/{{ $go->id }}" method="get">
    {{-- @csrf --}}
    <div class="form-group ml-3">
        <label>Nama Rapat</label>
        <input type="text" class="form-control" name="nama_rapat" style="width:95%" value="{{ $go->nama_rapat }}">
    </div>
    <div class="form-group ml-3">
        <label>NIM Pemohon</label>
        <input type="number" class="form-control" name="pemohon" style="width:95%" value="{{ $go->pemohon }}">
    </div>
    <div class="form-group ml-3">
        <label>Tanggal Rapat</label>
        <input type="date" class="form-control" name="tgl_rapat" style="width:95%" value="{{ $go->tgl_rapat }}">
    </div>
    <div class="form-group ml-3">
        <label>Jam Rapat</label>
        <input type="time" class="form-control" name="jam_rapat" style="width:95%" value="{{ $go->jam_rapat }}">
    </div>
    <div class="form-group ml-3">
        <label>Link</label>
        <input type="text" class="form-control" name="link" style="width:95%" value="{{ $go->link }}">
    </div>
    <div class="form-group ml-3">
        <input type="submit" class="btn btn-primary mb-2" value="Edit">
        <a href="javascript:history.back()" class="btn btn-primary mb-2">Cancel</a>
    </div>
</form>

<!-- end of konten -->
@endsection