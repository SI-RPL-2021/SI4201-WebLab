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

class DokumentasiController extends Controller
{
    //
    // public function index()
    // {
    //     return view('upload_dokumentasi');
    // }

    public function uploadDokumentasiRapat(Request $request){
        $rapat = Rapat::all();
        // $fotos = DokumentasiRapat::all();
        return view ('sekretaris.upload_dokumentasiRapat', ['rapat' => $rapat]);
        // return view ('sekretaris.upload_dokumentasiRapat', compact('fotos'));
            // $rapat = Rapat::findorfail($id);
    //     return view ('sekretaris.upload_dokumentasiRapat', ['rapat' => $rapat]);
    }

    // public function goEditPelatihan($id, Request $request){
    //     $go = Pelatihan::findorfail($id);
    //     return view ('trainer.edit_pelatihan', ['go' => $go]);
    // }

    public function uploadDokumentasiPelatihan(Request $request){
        // $fotos = DokumentasiPelatihan::all();
        $pelatihan = Pelatihan::all();
        return view ('sekretaris.upload_dokumentasiPelatihan', ['Pelatihan' => $pelatihan]);
        // return view ('sekretaris.upload_dokumentasiPelatihan', compact('fotos'));
            // $pelatihan = Pelatihan::findorfail($id);
    //     return view ('sekretaris.upload_dokumentasiPelatihan', ['Pelatihan' => $pelatihan]);
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
