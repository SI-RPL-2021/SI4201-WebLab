<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Kehadiran;
use App\Models\Pelatihan;
use App\Models\Rapat;
use DateTime;
use DateTimeZone;
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
    public function indexs(){
        //bikin variabel baru untuk nampung data dari tabel tb_anggota
        $angg = Anggota::get();
        //compact = pecah data
        return view('tempanggota',compact('angg'));
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
    public function destroytemp($id){
        $delete = Anggota::findorfail($id);
        $delete->delete();
        return redirect()->back();
    }
    public function approveanggota($id){

        $approve = Anggota::findorfail($id);
        $approve->status = 'Diterima';
        $approve->save();

        return redirect()->back();

    }
    public function mengikutiKegiatan($id){
        $hadirPelatihan = Pelatihan::findorfail($id);
        return view('mengikutiKegiatan',compact('hadirPelatihan'));

        $hadirRapat = Rapat::findorfail($id);
        return view('mengikutiKegiatan',compact('hadirRapat'));
    }
    public function absen(Request $request){
        $timezone = 'Asia/Pontianak';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        // $localtime = $date->format('H-i-s');
        $hadir = 'Hadir';

        // $kehadiran = Kehadiran::where([
        //     ['id_anggota','=' ,auth()->user()->id],
        //     ['Nim','=', auth()->user()->nim],
        //     ['tanggal','=',$tanggal],
        // ])->first();
        // if($kehadiran){
        //     dd("Data udah ada!");
        // }else{
            Kehadiran::create([
                'id_anggota'=> auth()->user()->id,
                'Nim' => auth()->user()->nim,
                'tanggal' => $tanggal,
                'kehadiran' => $hadir,
                // 'jamabsen' => $localtime,
            ]);
        // }
        return redirect()->back();
    }
}
