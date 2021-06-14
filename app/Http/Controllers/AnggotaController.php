<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Kehadiran;
use App\Models\Pelatihan;
use App\Models\Rapat;
use App\Models\Absenrapat;
use App\Models\Absenpelatihan;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    
    public function index(){
        
        $angg = Anggota::get();
        
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
    public function homeAnggota(){
        $cNIM = Auth::user()->nim;
        $sgroup = Auth::user()->study_group;
        $data = [];
        for ($month = 1; $month <= 12; $month++) {

            $date = Carbon::create(date('Y'), $month);
            $date_end = $date->copy()->endOfMonth();
        
            $hadirRapat = Absenrapat::select('*')
                ->where('nim','=',$cNIM)
                ->where('created_at', '>=', $date)
                ->where('created_at', '<=', $date_end)
                ->where('status_validasi', '=', 'valid')
                ->count();
                
            $nRapat = Rapat::select('*')
                ->whereMonth('tgl_rapat', '=' , $month)
                ->where('status_aproval', '=', 'aproved')
                ->count();
            
            $hadirPelatihan = Absenpelatihan::select('*')
                ->where('nim','=',$cNIM)
                ->where('created_at', '>=', $date)
                ->where('created_at', '<=', $date_end)
                ->where('status_validasi', '=', 'valid')
                ->count();
            
            $nPelatihan = Pelatihan::select('*')
                ->whereMonth('tgl_pelatihan', '=' , $month)
                ->where('status_aproval', '=', 'aproved')
                ->where('study_group', '=', $sgroup)
                ->count();

            $data[$month] = array('rapat' => $hadirRapat, 'pelatihan' => $hadirPelatihan, 'nRapat' => $nRapat, 'nPelatihan' => $nPelatihan);
        }
        return view('home', ['hadir' => $data]);
    }

}
