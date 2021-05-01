<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pelatihan;
use App\Models\Rapat;
// use App\Models\Anggota;
use App\Models\Kehadiran;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    //
    public function showalldata(){
        $pelatihan = Pelatihan::get();
        $rapat = Rapat::get();

        return view('mengikutiKegiatan',compact('pelatihan','rapat'));

    }
    public function absensikegiatan(){
        $kehadirans = Kehadiran::orderBy('id','ASC')->get();
        return view('absensikegiatan',compact('kehadirans'));
    }
}
