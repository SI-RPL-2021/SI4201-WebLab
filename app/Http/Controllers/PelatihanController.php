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

    public function readPelatihan(Request $request){
        $pelatihan = Pelatihan::all();
        return view ('trainer.notifikasi_pelatihan', ['pelatihan' => $pelatihan]);
    }

    public function goEditPelatihan($id, Request $request){
        $go = Pelatihan::findorfail($id);
        return view ('trainer.edit_pelatihan', ['go' => $go]);
    }

    public function editPelatihan($id, Request $request){
        $this->validate($request,[
            'nama_pelatihan' => 'required',
            'pemohon' => 'required',
            'study_group' => 'required',
            'tgl_pelatihan' => 'required',
            'jam_pelatihan' => 'required',
            'link' => 'required',
        ]);

        $edit = Pelatihan::findorfail($id);
        $edit->nama_pelatihan = $request->nama_pelatihan;
        $edit->pemohon = $request->pemohon;
        $edit->study_group = $request->study_group;
        $edit->tgl_pelatihan = $request->tgl_pelatihan;
        $edit->jam_pelatihan = $request->jam_pelatihan;
        $edit->link = $request->link;

        if ($edit) {
            $edit->save();
            return redirect('readPelatihan')->with('edit_berhasil', 'Data telah berhasil diupdate');
        }else {
            return redirect('readPelatihan')->with('edit_gagal', 'Data gagal disimpan');
        }
    }

    public function deletePelatihan($id){
        $delete = Pelatihan::findorfail($id);
        $delete->delete();
        return redirect('readPelatihan')->with('hapus_berhasil', 'Pengajuan pelatihan berhasil dihapus');
    }

    // Bagian Sekertaris
    // public function dokumentasiValidasi(Request $request){
    //     $pelatihan = Pelatihan::findorfail();
    //     return view ('sekretaris.dokumentasi_validasi_kegiatan', ['pelatihan' => $pelatihan]);
    // }

    // Bagian Admin
    public function cek_aprovalPelatihan(Request $request){
        $pelatihan = Pelatihan::leftJoin('tb_anggota', 'tb_anggota.nim', '=', 'tb_pelatihan.pemohon')
        ->select('tb_anggota.nama', 'tb_pelatihan.*')->get();
        return view ('admin.cek_aprovalPelatihan', ['pelatihan' => $pelatihan]);
    }

    public function aprovePelatihan($id, Request $request){
        $aprove = "aproved";
        $status = Pelatihan::findorfail($id);
        $status->status_aproval = $aprove;
        $status->save();
        return redirect()->back()->with('aprove', 'Status pelatihan telah diaprove');
    }

    public function disaprovePelatihan($id, Request $request){
        $disaprove = "disaproved";
        $status = Pelatihan::findorfail($id);
        $status->status_aproval = $disaprove;
        $status->save();
        return redirect()->back()->with('disaprove', 'Status pelatihan disaproved');
    }

    public function goEditPelatihanAdmin($id, Request $request){
        $go = Pelatihan::findorfail($id);
        return view ('admin.edit_pelatihan', ['go' => $go]);
    }

    public function editPelatihanAdmin($id, Request $request){
        $this->validate($request,[
            'nama_pelatihan' => 'required',
            'pemohon' => 'required',
            'study_group' => 'required',
            'tgl_pelatihan' => 'required',
            'jam_pelatihan' => 'required',
            'link' => 'required',
        ]);

        $edit = Pelatihan::findorfail($id);
        $edit->nama_pelatihan = $request->nama_pelatihan;
        $edit->pemohon = $request->pemohon;
        $edit->study_group = $request->study_group;
        $edit->tgl_pelatihan = $request->tgl_pelatihan;
        $edit->jam_pelatihan = $request->jam_pelatihan;
        $edit->link = $request->link;

        if ($edit) {
            $edit->save();
            return redirect('cek_aprovalPelatihan')->with('edit', 'Data telah berhasil diupdate');
        }else {
            return redirect('cek_aprovalPelatihan')->with('edit_gagal', 'Data gagal disimpan');
        }
    }
}
