@extends('layout')
@section('title', 'Upload Dokumentasi Pelatihan')
@section('konten')
<!-- konten -->
<a href="javascript:window.close();" class="btn btn-success pull-left mb-2 "><-- Kembali</a><br>
<div class="col-md-15 mt-5 mb-5">
    <h1 align="center">Upload Dokumentasi</h1>
    @foreach ($pelatihan as $p)
        <h5 align="center">{{ $p->nama_pelatihan }}</h5>
    @endforeach
</div>

<div class="container mx-auto">
    <h5 align="center" class="mx-auto">File Submission</h5>
    @foreach ($pelatihan as $p)
        <form action="addfotoPelatihan/{{ $p->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-center mt-5 mb-5">
                <input type="file" name="file" align="center" class="pull-center mb-2 mx-auto">
            </div>
            <div class="text-center mt-5 mb-5">
                <input type="submit" value="Save Changes" class="btn btn-danger" align="center" onclick="return confirm('Apakah anda yakin untuk mengupload dokumentasi ini?');">
                <a href="javascript:history.back()" class="btn btn-light" align="center">Cancel</a>
        </form>
    @endforeach
</div>
</div>

<!-- end of konten -->
@endsection