@extends('layout')
@section('title', 'Edit Pelatihan')
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
<form action="editPelatihan/{{ $go->id }}" method="get">
    {{-- @csrf --}}
    <div class="form-group ml-3">
        <label>Nama Pelatihan</label>
        <input type="text" class="form-control" name="nama_pelatihan" style="width:95%" value="{{ $go->nama_pelatihan }}">
    </div>
    <div class="form-group ml-3">
        <label>NIM Pemohon</label>
        <input type="number" class="form-control" name="pemohon" style="width:95%" value="{{ $go->pemohon }}">
    </div>
    <div class="form-group ml-3">
        <label>Study Group</label>
        <div class="form-group ml-3">
            <select class="form-control" id="exampleFormControlSelect1" style="width:95%" name="study_group">
            <option value="Data Engineer"  @if ((Auth::user()->study_group) == "Data Engineer") {{ 'selected' }} @endif>Data Engineer</option>
            <option value="Data Scientist"  @if ((Auth::user()->study_group) == "Data Scientist") {{ 'selected' }} @endif>Data Scientist</option>
            </select>
        </div>
    </div>
    <div class="form-group ml-3">
        <label>Tanggal Pelatihan</label>
        <input type="date" class="form-control" name="tgl_pelatihan" style="width:95%" value="{{ $go->tgl_pelatihan }}">
    </div>
    <div class="form-group ml-3">
        <label>Jam Pelatihan</label>
        <input type="time" class="form-control" name="jam_pelatihan" style="width:95%" value="{{ $go->jam_pelatihan }}">
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