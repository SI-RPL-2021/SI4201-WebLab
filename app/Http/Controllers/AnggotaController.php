<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
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
        return redirect('akunanggota');
    }
    public function destroy($id){
        $delete = Anggota::findorfail($id);
        $delete->delete();
        return redirect('akunanggota');
    }
}
