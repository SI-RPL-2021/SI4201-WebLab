<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rapat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RapatController extends Controller
{
    public function createRapat(Request $request){
        $this->validate($request,[
            'nama_rapat' => 'required',
            'pemohon' => 'required',
            'tgl_rapat' => 'required',
            'jam_rapat' => 'required',
            'link' => 'required',
        ]);

        $rapat = Rapat::create([
            'nama_rapat' => $request->nama_rapat,
            'pemohon' => $request->pemohon,
            'tgl_rapat' => $request->tgl_rapat,
            'jam_rapat' => $request->jam_rapat,
            'link' => $request->link,
        ]);
        
        if ($rapat) {
            return redirect()->back()->with('success', 'Data telah berhasil disimpan');
        }else {
            return redirect()->back()->with('failed', 'Data telah berhasil disimpan');
        }
    }
}
