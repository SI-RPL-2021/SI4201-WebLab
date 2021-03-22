@extends('layout')
@section('title', 'Edit Profile Anggota')
@section('konten')
<!-- konten -->
    <legend><b>Edit Profil</b></legend>

    <form action="" methode="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="nama" style="width:100%"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="number" class="form-control" name="nim" style="width:100%"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                            <select class="form-control" id="exampleFormControlSelect1" style="width:100%">
                            <option>SI-42-01</option>
                            <option>SI-42-02</option>
                            <option>SI-42-03</option>
                            <option>SI-42-04</option>
                            <option>SI-42-05</option>
                            <option>SI-42-06</option>
                            </select>
                </td>
            </tr>
            <tr>
                <td>Divisi</td>
                    <td>:</td>
                    <td>
                            <select class="form-control" id="exampleFormControlSelect1" style="width:100%">
                                <option>Trainer</option>
                                <option>Sekretaris</option>
                                <option>Anggota</option>
                            </select>
                    </td>
            </tr>
            <tr>
                <td>Study Group</td>
                    <td>:</td>
                    <td>
                            <select class="form-control" id="exampleFormControlSelect1" style="width:100%">
                            <option>Data Engineer</option>
                            <option>Data Scientist</option>
                            </select>
                    </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" class="form-control" name="email" style="width:100%"></td>
            </tr>
            <tr>
                <td>Kata Sandi</td>
                <td>:</td>
                <td><input type="password" class="form-control" name="password" style="width:100%"></td>
            </tr>
            <tr>
                <td>Konfirmasi Kata Sandi</td>
                <td>:</td>
                <td><input type="password" class="form-control" name="konfirmasi_password" style="width:100%"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" class="button" name="edit" value="Edit" /> <input type="reset" value="Cancel" /></td>
            </tr>

        </table>
    </form>
<!-- end of konten -->
@endsection