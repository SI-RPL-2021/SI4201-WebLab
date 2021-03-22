@extends('layout')
@section('title', 'Update Akun Anggota')
@section('konten')
<!-- konten -->
<div class="container my-3">
        <div class="card my-4 mx-auto px-3" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title" align="center">Update Akun Anggota</h5>
                <hr></hr>
                <form method="post" action="">
                    <div class="form-group ml-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" style="width:95%" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group ml-3">
                        <label>NIM</label>
                        <input type="number" class="form-control" name="nim" style="width:95%" placeholder="Masukkan NIM">
                    </div>
                    <div class="form-group ml-3">
                        <label for="exampleFormControlSelect1">Kelas</label>
                        <select class="form-control" id="exampleFormControlSelect1" style="width:95%">
                          <option>SI-42-01</option>
                          <option>SI-42-02</option>
                          <option>SI-42-03</option>
                          <option>SI-42-04</option>
                          <option>SI-42-05</option>
                          <option>SI-42-06</option>
                        </select>
                      </div>
                      <div class="form-group ml-3">
                        <label for="exampleFormControlSelect1">Divisi</label>
                        <select class="form-control" id="exampleFormControlSelect1" style="width:95%">
                            <option>Trainer</option>
                            <option>Sekretaris</option>
                            <option>Anggota</option>
                        </select>
                      </div>
                      <div class="form-group ml-3">
                        <label for="exampleFormControlSelect1">Study Group</label>
                        <select class="form-control" id="exampleFormControlSelect1" style="width:95%">
                          <option>Data Engineer</option>
                          <option>Data Scientist</option>
                        </select>
                      </div>
                    <div class="form-group ml-3" align="center">
                        <button type="submit" name="register" class="btn btn-primary mb-2">Update</button>
                        <br>
                        <button type="cancel" name="register" class="btn btn-primary mb-2" a href="profile">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- end of konten -->
@endsection