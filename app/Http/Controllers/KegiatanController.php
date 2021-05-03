<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pelatihan;
use App\Models\Rapat;
// use App\Models\Anggota;
use App\Models\Kehadiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    //
    public function showalldata(){
        $pelatihan = Pelatihan::get();
        $rapat = Rapat::get();

        return view('mengikutiKegiatan',compact('pelatihan','rapat'));

    }
    public function absensikegiatan(){
        $id_anggota = Auth::user()->id;
        $kehadirans = Kehadiran::orderBy('id','ASC')->get();
        return view('absensikegiatan',compact('kehadirans'));
    }
}
