<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Pelatihan;
use App\Models\Rapat;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    //
    public function index(){
        //bikin variabel baru untuk nampung data dari tabel tb_anggota
        $angg = Anggota::get();
        //compact = pecah data
        return view('akunanggota',compact('angg'));
    }
    public function updateanggota($id){
        $angg = Anggota::findorfail($id);
        return view('/updateakun',compact('angg'));
    }
    public function updatestore(Request $request, $id){

        $angg = Anggota::findorfail($id);
        $angg->update($request->all());
        return redirect('akunanggota')->with('success', 'Profil berhasil diupdate');
    }
    public function destroy($id){
        $delete = Anggota::findorfail($id);
        $delete->delete();
        return redirect('akunanggota')->with('success', 'Profil berhasil dihapus');
    }
    public function mengikutiKegiatan($id){
        $hadirPelatihan = Pelatihan::findorfail($id);
        return view('/mengikutiKegiatan',compact('hadirPelatihan'));

        $hadirRapat = Rapat::findorfail($id);
        return view('/mengikutiKegiatan',compact('hadirRapat'));
    }
    public function absensiKegiatan(){
        return view('absensiKegiatan');
    }
}
