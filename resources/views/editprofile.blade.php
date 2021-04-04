@extends('layout')
@section('title', 'Profile Anggota')
@section('konten')
<!-- konten -->
<div class="container my-3">
        <div class="card my-4 mx-auto px-3" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title" align="center">Profile</h5>
                <hr></hr>
                <form method="GET" action="">
                @csrf
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
                    <div class="form-group ml-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" style="width:95%" placeholder="Masukkan Alamat E-mail">
                    </div>
                    <div class="form-group ml-3">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" name="password" style="width:95%" placeholder="Buat Kata Sandi">
                    </div>
                    <div class="form-group ml-3">
                        <label>Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" name="konfirmasi_password" style="width:95%" placeholder="Konfirmasi Kata Sandi">
                    </div>
                    <div class="form-group ml-3">
                        <button type="submit" name="submit" class="btn btn-primary mb-2" value="submit"a href="profile" >Edit</button>
                        <button type="reset" name="cancel" class="btn btn-primary mb-2" align="left">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- end of konten -->
@endsection