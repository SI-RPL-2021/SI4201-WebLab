@extends('layout')
@section('title', 'Profile Anggota')
@section('konten')
<!-- konten -->
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('failed'))
<div class="alert alert-danger">
    <ul>
        <li>{!! \Session::get('failed') !!}</li>
    </ul>
</div>
@endif
<div class="container my-3">
        <div class="card my-4 mx-auto px-3" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title" align="center">Profile</h5>
                <hr></hr>
                <form method="GET" action="edit/profile/{{ Auth::user()->id }}">
                    <div class="form-group ml-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" style="width:95%" placeholder="Masukkan Nama Lengkap" value="{{ Auth::user()->nama }}">
                    </div>
                    <div class="form-group ml-3">
                        <label>NIM</label>
                        <input type="number" class="form-control" name="nim" style="width:95%" placeholder="Masukkan NIM" value="{{ Auth::user()->nim }}">
                    </div>
                    <div class="form-group ml-3">
                        <label for="exampleFormControlSelect1">Kelas</label>
                        <select class="form-control" id="exampleFormControlSelect1" style="width:95%" name="kelas">
                            <option value="SI-42-01" @if ((Auth::user()->kelas) == "SI-42-01") {{ 'selected' }} @endif>SI-42-01</option>
                            <option value="SI-42-02" @if ((Auth::user()->kelas) == "SI-42-02") {{ 'selected' }} @endif>SI-42-02</option>
                            <option value="SI-42-03" @if ((Auth::user()->kelas) == "SI-42-03") {{ 'selected' }} @endif>SI-42-03</option>
                            <option value="SI-42-04" @if ((Auth::user()->kelas) == "SI-42-04") {{ 'selected' }} @endif>SI-42-04</option>
                            <option value="SI-42-05" @if ((Auth::user()->kelas) == "SI-42-05") {{ 'selected' }} @endif>SI-42-05</option>
                            <option value="SI-42-06" @if ((Auth::user()->kelas) == "SI-42-06") {{ 'selected' }} @endif>SI-42-06</option>
                            <option value="SI-42-07" @if ((Auth::user()->kelas) == "SI-42-07") {{ 'selected' }} @endif>SI-42-07</option>
                            <option value="SI-42-08" @if ((Auth::user()->kelas) == "SI-42-08") {{ 'selected' }} @endif>SI-42-08</option>
                            <option value="SI-42-09" @if ((Auth::user()->kelas) == "SI-42-09") {{ 'selected' }} @endif>SI-42-09</option>
                            <option value="SI-42-INT" @if ((Auth::user()->kelas) == "SI-42-INT") {{ 'selected' }} @endif>SI-42-INT</option>
                        </select>
                    </div>
                    <div class="form-group ml-3">
                        <label for="exampleFormControlSelect1">Divisi</label>
                        <select class="form-control" id="exampleFormControlSelect1" style="width:95%" name="divisi">
                            <option value="Trainer" @if ((Auth::user()->divisi) == "Trainer") {{ 'selected' }} @endif>Trainer</option>
                            <option value="Sekertaris"  @if ((Auth::user()->divisi) == "Sekertaris") {{ 'selected' }} @endif>Sekretaris</option>
                            <option Value="Anggota"  @if ((Auth::user()->divisi) == "Anggota") {{ 'selected' }} @endif>Anggota</option>
                        </select>
                    </div>
                    <div class="form-group ml-3">
                        <label for="exampleFormControlSelect1">Study Group</label>
                        <select class="form-control" id="exampleFormControlSelect1" style="width:95%" name="study_group">
                        <option value="Data Engineer"  @if ((Auth::user()->study_group) == "Data Engineer") {{ 'selected' }} @endif>Data Engineer</option>
                        <option value="Data Scientist"  @if ((Auth::user()->study_group) == "Data Scientist") {{ 'selected' }} @endif>Data Scientist</option>
                        </select>
                    </div>
                    <div class="form-group ml-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" style="width:95%" placeholder="Masukkan Alamat E-mail" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-group ml-3">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" name="password" style="width:95%" placeholder="Buat Kata Sandi">
                    </div>
                    <div class="form-group ml-3">
                        <label>Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" name="password_confirmation" style="width:95%" placeholder="Konfirmasi Kata Sandi">
                    </div>
                    <div class="form-group ml-3">
                        <input type="submit" class="btn btn-primary mb-2" value="Update Profile">
                        <a href="home" class="btn btn-primary mb-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- end of konten -->
@endsection