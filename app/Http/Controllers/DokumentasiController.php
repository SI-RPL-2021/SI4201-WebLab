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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DokumentasiController extends Controller
{

    public function uploadDokumentasiRapat($id, Request $request){
        $rapat= DB::table('tb_rapat')
        ->select('tb_rapat.nama_rapat', 'tb_rapat.id')
        ->where([ 'id' => $id ])
        ->get();

        return view ('sekretaris.upload_dokumentasiRapat', ['rapat' => $rapat]);
    }

    public function uploadDokumentasiPelatihan($id, Request $request){
        $pelatihan= DB::table('tb_pelatihan')
        ->select('tb_pelatihan.nama_pelatihan', 'tb_pelatihan.id')
        ->where([ 'id' => $id ])
        ->get();

        return view ('sekretaris.upload_dokumentasiPelatihan', ['pelatihan' => $pelatihan]);
    }

    public function storeRapat($id, Request $request)
    {
        $id_rapat = $id;
        
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,bmp,png'
        ]);

        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('file'), $fileName);
        DokumentasiRapat::create([
            'file' => $fileName,
            'id_rapat' => $id_rapat
        ]);
        return back();
    }

    public function storePelatihan($id, Request $request)
    {
        $id_pelatihan = $id;

        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,bmp,png'
        ]);

        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('file'), $fileName);
        DokumentasiPelatihan::create([
            'file' => $fileName,
            'id_pelatihan' => $id_pelatihan
        ]);
        return back();
    }

}
