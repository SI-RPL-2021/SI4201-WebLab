<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelatihan;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelatihanController extends Controller
{
    // Bagian Trainer
    public function pelatihan(){
        return view('trainer.form_pelatihan');
    }

    public function createPelatihan(Request $request){
        $this->validate($request,[
            'nama_pelatihan' => 'required',
            'pemohon' => 'required',
            'study_group' => 'required',
            'tgl_pelatihan' => 'required',
            'jam_pelatihan' => 'required',
            'link' => 'required',
        ]);

        $pelatihan = Pelatihan::create([
            'nama_pelatihan' => $request->nama_pelatihan,
            'pemohon' => $request->pemohon,
            'study_group' => $request->study_group,
            'tgl_pelatihan' => $request->tgl_pelatihan,
            'jam_pelatihan' => $request->jam_pelatihan,
            'link' => $request->link,
        ]);
        
        if ($pelatihan) {
            return redirect()->back()->with('success', 'Data telah berhasil disimpan');
        }else {
            return redirect()->back()->with('failed', 'Data telah berhasil disimpan');
        }
    }
}
