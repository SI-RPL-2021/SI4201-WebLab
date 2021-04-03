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
                          <option value="{{$angg->kelas}}">{{$angg->kelas}}</option>
                          <option value="SI-42-01">SI-42-01</option>
                          <option value="SI-42-02">SI-42-02</option>
                          <option value="SI-42-03">SI-42-03</option>
                          <option value="SI-42-04">SI-42-04</option>
                          <option value="SI-42-05">SI-42-05</option>
                          <option value="SI-42-06">SI-42-06</option>
                          <option value="SI-42-07">SI-42-07</option>
                        </select>
                      </div>
                      <div class="form-group ml-3">
                        <label for="exampleFormControlSelect1">Divisi</label>
                        <select class="form-control" id="exampleFormControlSelect1" style="width:95%" name="divisi">
                            <option value="{{$angg->divisi}}">{{$angg->divisi}}</option>
                            <option value="Trainer">Trainer</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Anggota">Anggota</option>
                        </select>
                      </div>
                      <div class="form-group ml-3">
                        <label for="exampleFormControlSelect1">Study Group</label>
                        <select class="form-control" id="exampleFormControlSelect1" style="width:95%" name="study_group">
                          <option value="{{$angg->study_group}}">{{$angg->study_group}}</option>
                          <option value="Data Engineer">Data Engineer</option>
                          <option value="Data Scientist">Data Scientist</option>
                        </select>
                      </div>
                    <div class="form-group ml-3" align="center">
                        <button type="submit" name="register" class="btn btn-primary mb-2">Update</button>
                        <br>
                        <button type="cancel" name="register" class="btn btn-primary mb-2" href="javascript:history.back()">Cancel</button>
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