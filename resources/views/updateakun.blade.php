@extends('layout')
@section('title', 'Update Akun Anggota')
@section('konten')
<!-- konten -->
<div class="container my-3">
        <div class="card my-4 mx-auto px-3" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title" align="center">Update Akun Anggota</h5>
                <hr></hr>
                <form method="" action="">
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
                          <option>SI-42-07</option>
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
                        <button type="cancel" name="register" class="btn btn-primary mb-2" href="javascript:history.back()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- end of konten -->

<?
$updateGET = $_GET['update'];
?>

<body>
  <?php
  if(isset($_GET['nama'])  ||  isset($_GET['nim']) ||  isset($_GET['kelas']) || isset($_GET['divisi']) || isset($_GET['study_group']) ) {
  $nama = $_GET['nama'];
  $nim = $_GET['nim'];
  $kelas = $_GET['kelas'];
  $divisi = $_GET['divisi'];
  $study_group = $_GET['study_group'];
  }
  ?>
  <div class="container-sm">
     <h2 style="text-align: center;"> Update Akun Anggota (GET)</h2>
      <fieldset>
        <table class="table">
            <tr>
                <td>Nama: </td>
                <td><?= $nama ?> </td>
            </tr>
            <tr>
                <td>NIM: </td>
                <td><?= $nim ?> </td>
            </tr>
            <tr>
                <td>Kelas: </td>
                <td><?= $kelas ?> </td>
            </tr>
            <tr>
                <tr>Divisi: </td>
                <tr><?= $divisi ?> </td>
            </tr>
            <tr>
                <tr>StudyGrup: </td>
                <tr><?= $study_group ?> </td>
            </tr>
        </table>
        <div style="text-align: center;">
          <a href="input_get.php" class="btn btn-primary mb-2"> kembali</a>
      </div>
    </fieldset>
  </dev>
</body>  

@endsection