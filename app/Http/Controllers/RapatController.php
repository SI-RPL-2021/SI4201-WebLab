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

    public function readRapat(Request $request){
        $rapat = Rapat::all();
        return view ('sekretaris.notifikasi_rapat', ['rapat' => $rapat]);
    }

    public function deleteRapat($id){
        $delete = Rapat::findorfail($id);
        $delete->delete();
        return redirect('readRapat')->with('hapus_berhasil', 'Pengajuan rapat berhasil dihapus');
    }

    public function goEditRapat($id, Request $request){
        $go = Rapat::findorfail($id);
        return view ('sekretaris.edit_rapat', ['go' => $go]);
    }

    public function editRapat($id, Request $request){
        $this->validate($request,[
            'nama_rapat' => 'required',
            'pemohon' => 'required',
            'tgl_rapat' => 'required',
            'jam_rapat' => 'required',
            'link' => 'required',
        ]);

        $edit = Rapat::findorfail($id);
        $edit->nama_rapat = $request->nama_rapat;
        $edit->pemohon = $request->pemohon;
        $edit->tgl_rapat = $request->tgl_rapat;
        $edit->jam_rapat = $request->jam_rapat;
        $edit->link = $request->link;

        if ($edit) {
            $edit->save();
            return redirect('readRapat')->with('edit_berhasil', 'Data telah berhasil diupdate');
        }else {
            return redirect('readRapat')->with('edit_gagal', 'Data gagal disimpan');
        }
    }
}
