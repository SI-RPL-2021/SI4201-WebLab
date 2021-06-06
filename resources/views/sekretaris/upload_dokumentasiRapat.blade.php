@extends('layout')
@section('title', 'Upload Dokumentasi')
@section('konten')
<!-- konten -->

<div class="col-md-15 mt-5 mb-5">
    <h1 align="center">Upload Dokumentasi</h1>
    <h5 align="center">#nama rapat</h5>
    {{-- <h5>{{ $tb_rapat->nama_rapat }}</h5> --}}
</div>

<div class="container mx-auto">
<h5 align="center" class="mx-auto">File Submission</h5>
<form action="/addfotoRapat" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="text-center mt-5 mb-5">
        <input type="file" name="foto" align="center" class="pull-center mb-2 mx-auto">
    </div>
    <div class="text-center mt-5 mb-5">
        <input type="submit" value="Save Changes" class="btn btn-danger" align="center" onclick="return confirm('Apakah anda yakin untuk mengupload dokumentasi ini?');">
        <a href="goEditPelatihan/" class="btn btn-light" align="center">Cancel</a>
</form>

{{-- <form action="/addfoto" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="text-center mt-5 mb-5">
        <input type="file" name="image" align="center" class="pull-center mb-2 mx-auto">
    </div>
    <div class="text-center mt-5 mb-5">
        <input type="submit" value="Save Changes" href="deletePelatihan/" class="btn btn-danger" align="center" onclick="return confirm('Apakah anda yakin untuk mengupload dokumentasi ini?');">
        <a href="goEditPelatihan/" class="btn btn-light" align="center">Cancel</a>
</form> --}}
</div>
</div>

<!-- end of konten -->
@endsection