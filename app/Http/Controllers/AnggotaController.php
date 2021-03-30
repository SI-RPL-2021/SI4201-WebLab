<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    public function anggota()
    {
        $anggota = DB::table('tb_anggota')->get();
        
        return view('anggota',['anggota'=>$anggota]);
    }
}
?>