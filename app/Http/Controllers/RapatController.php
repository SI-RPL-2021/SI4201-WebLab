<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rapat;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RapatController extends Controller
{   
    // Bagian Sekertaris
    public function rapat(){
        return view('sekretaris.form_rapat');
    }

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

    public function dokumentasiValidasi(Request $request){
        $rapat = Rapat::all();
        return view ('sekretaris.dokumentasi_validasi_kegiatan', ['rapat' => $rapat]);
    }

    function data()
    {
        $data = DB::table('tb_rapat')
        ->join('tb_pelatihan','tb_rapat.id',"=", 'tb_pelatihan.id')
        ->get();
    }

    public function validasiKehadiranKegiatan(Request $request){
        $rapat = Rapat::all();
        return view ('sekretaris.validasi_kehadiran_kegiatan', ['rapat' => $rapat]);
    }

    public function uploadDokumentasi(Request $request){
        $rapat = Rapat::all();
        return view ('sekretaris.upload_dokumentasi', ['rapat' => $rapat]);
    }

    // Bagian Admin
    public function cek_aprovalRapat(Request $request){
        $rapat = Rapat::leftJoin('tb_anggota', 'tb_anggota.nim', '=', 'tb_rapat.pemohon')
        ->select('tb_anggota.nama', 'tb_rapat.*')->get();
        return view ('admin.cek_aprovalRapat', ['rapat' => $rapat]);
    }

    public function aprove($id, Request $request){
        $aprove = "aproved";
        $status = Rapat::findorfail($id);
        $status->status_aproval = $aprove;
        $status->save();
        return redirect()->back()->with('aprove', 'Status rapat telah diaprove');
    }

    public function disaprove($id, Request $request){
        $disaprove = "disaproved";
        $status = Rapat::findorfail($id);
        $status->status_aproval = $disaprove;
        $status->save();
        return redirect()->back()->with('disaprove', 'Status rapat disaproved');
    }

    public function goEditRapatAdmin($id, Request $request){
        $go = Rapat::findorfail($id);
        return view ('admin.edit_rapat', ['go' => $go]);
    }

    public function editRapatAdmin($id, Request $request){
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
            return redirect('cek_aprovalRapat')->with('edit', 'Data telah berhasil diupdate');
        }else {
            return redirect('cek_aprovalRapat')->with('edit_gagal', 'Data gagal disimpan');
        }
    }
    
    public function notifikasiKegiatan(Request $request){
        $rapat = Rapat::all();
        return view ('admin.notifikasi_kegiatan', ['rapat' => $rapat]);
    }

}
