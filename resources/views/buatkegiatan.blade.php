@extends('layout')
@section('title', 'Membuat Daftar Kegiatan')
@section('konten')
<!-- konten -->
<form class="mb-3">
    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kegiatan</label>
        <input type="text" class="form-control" placeholder="Masukkan Jenis Kegiatan">
    </div>
    <button type="button" class="btn btn-primary">Tambah</button>
</form>
<table class="table table-hover table-striped table-responsive">
    <thead class="table-light bg-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Jenis Kegiatan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Lomba</td>
            <td>
                <div class="row">
                    <div class="col"><button type="button" class="btn btn-warning" style="width: 70.75px">Edit</button></div>
                    <div class="col"><button type="button" class="btn btn-primary btn-block">Buat Absensi</button></div>
                    <div class="col"><button type="button" class="btn btn-danger">Hapus</button></div>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Pelatihan</td>
            <td>
                <div class="row">
                    <div class="col"><button type="button" class="btn btn-warning btn-block">Edit</button></div>
                    <div class="col"><button type="button" class="btn btn-primary btn-block">Buat Absensi</button></div>
                    <div class="col"><button type="button" class="btn btn-danger btn-block">Hapus</button></div>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Rapat</td>
            <td>
                <div class="row">
                    <div class="col"><button type="button" class="btn btn-warning" style="width: 70.75px">Edit</button></div>
                    <div class="col"><button type="button" class="btn btn-primary btn-block">Buat Absensi</button></div>
                    <div class="col"><button type="button" class="btn btn-danger">Hapus</button></div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<!-- end of konten -->
@endsection
{{-- Layout membuat jenis kegiatan masih on-progress --}}