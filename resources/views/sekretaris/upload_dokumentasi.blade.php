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
<div class="text-center mt-5 mb-5">
    <input type="submit" value="Input submit button" align="center" class="pull-center mb-2 mx-auto">
</div>
<div class="text-center mt-5 mb-5">
    <form method="GET">
        <a href="deletePelatihan/" class="btn btn-danger" align="center" onclick="return confirm('Apakah anda yakin untuk membatalkan pengajuan pelatihan ini?');">Save Changes</a>
        <a href="goEditPelatihan/" class="btn btn-light" align="center">Cancel</a>
    </form>
</div>
</div>

<!-- end of konten -->
@endsection