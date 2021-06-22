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

class DokumentasiController extends Controller
{

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
        // dd($request->foto);

        // $request->validate({
        //     'title' => 'required|max:255|min:3',
        //     'subject' => 'required|min:10',
        // });
            
        $imgName = $request->foto->getClientOriginalName() . '-' . time()
                                            . '.' . $request->foto->extension();
        $request->foto->move(public_path('image'), $imgName);
        

        DokumentasiRapat::create([
            'foto' => $imgName,
            // 'id_rapat' => Auth::DokumentasiRapat()->id()
        ]);     

        // $size = $request->file('foto')->getSize();
        // $name = $request->file('foto')->getClientOriginalName();

        // $request->file('foto')->storeAs('public/images/', $name);
        // $foto = new DokumentasiRapat();
        // $foto->name = $name;
        // $foto->size = $size;
        // $foto->save();
        // return redirect()->back();
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
