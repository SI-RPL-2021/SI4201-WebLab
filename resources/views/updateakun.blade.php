@extends('layout')
@section('title', 'Update Akun Anggota')
@section('konten')
<!-- konten -->
<div class="container my-3">
        <div class="card my-4 mx-auto px-3" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title" align="center">Update Akun Anggota</h5>
                <hr></hr>
                <form method="POST" action="/update/{{$angg->id}}">
                  @csrf
                    <div class="form-group ml-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" style="width:95%" placeholder="Masukkan Nama Lengkap" value="{{$angg->nama}}">
                    </div>
                    <div class="form-group ml-3">
                        <label>NIM</label>
                        <input type="number" class="form-control" name="nim" style="width:95%" placeholder="Masukkan NIM" value="{{$angg->nim}}">
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
                    <div class="form-group ml-3" align="center">
                        <button type="submit" name="register" class="btn btn-primary mb-2">Update</button>
                        <br>
                        {{-- <button type="cancel" name="register" class="btn btn-primary mb-2" href="javascript:history.back()">Cancel</button> --}}
                        <a href="javascript:history.back()" class="btn btn-primary mb-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- end of konten -->

<body>
  <div class="container-sm">
     <h2 style="text-align: center;"> Update Akun Anggota (GET)</h2>
      <fieldset>
        <table class="table">
            <tr>
                <td>Nama: {{$angg->nama}} </td>
                <td></td>
            </tr>
            <tr>
                <td>NIM: {{$angg->nim}}</td>
                <td></td>
            </tr>
            <tr>
                <td>Kelas: {{$angg->kelas}} </td>
                <td></td>
            </tr>
            <tr>
                <td>Divisi: {{$angg->divisi}} </td>
                <td></td>
            </tr>
            <tr>
                <td>StudyGroup: {{$angg->study_group}} </td>
                <td></td>
            </tr>
        </table>
        <div style="text-align: center;">
          <a href="" class="btn btn-primary mb-2"> kembali</a>
      </div>
    </fieldset>
  </dev>
</body>  

@endsection