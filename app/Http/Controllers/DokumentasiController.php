<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rapat;
use App\Models\Pelatihan;
use App\Models\Anggota;
use App\Models\Absenrapat;
use Illuminate\Http\Request;
use App\Models\DokumentasiRapat;
use App\Models\DokumentasiPelatihan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DokumentasiController extends Controller
{
    //
    public function index()
    {
        return view('upload_dokumentasi');
    }

    public function uploadDokumentasiRapat(Request $request){
        $rapat = Rapat::all();
        return view ('sekretaris.upload_dokumentasiRapat', ['rapat' => $rapat]);
    }

    public function uploadDokumentasiPelatihan(Request $request){
        $pelatihan = Pelatihan::all();
        return view ('sekretaris.upload_dokumentasiPelatihan', ['Pelatihan' => $pelatihan]);
    }

    public function storeRapat(Request $request)
    {

        $size = $request->file('foto')->getSize();
        $name = $request->file('foto')->getClientOriginalName();

        $request->file('foto')->storeAs('public/images/', $name);
        $foto = new DokumentasiRapat();
        $foto->name = $name;
        $foto->size = $size;
        $foto->save();
        return redirect()->back();

        // $dokumentasi = new Dokumentasi();

        // $dokumentasi->name = $request->input('foto');

        // if ($request->hasfile('foto'))
        // {
        //     $file = $request->file('foto');
        //     $extension = $file->getClientOriginalExtension(); //mendapatkan image extension
        //     $filename = time() . '.' . $extension;
        //     $file->move('uploads/dokumentasi/', $filename);
        //     $dokumentasi->foto = $filename;
        // }   else {
        //     return $request;
        //     $dokumentasi->foto = '';
        // }

        // $dokumentasi->save();

        // return view('dokumentasi')->with('dokumentasi',$dokumentasi);


    }

    public function storePelatihan(Request $request)
    {

        $size = $request->file('foto')->getSize();
        $name = $request->file('foto')->getClientOriginalName();

        $request->file('foto')->storeAs('public/images/', $name);
        $foto = new DokumentasiPelatihan();
        $foto->name = $name;
        $foto->size = $size;
        $foto->save();
        return redirect()->back();
    }

}
