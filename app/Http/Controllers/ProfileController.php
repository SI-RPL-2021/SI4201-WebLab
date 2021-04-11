<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function editProfile($id, Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'nim' => 'required',
            'kelas' => 'required',
            'divisi' => 'required',
            'study_group' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4|confirmed',
            'password_confirmation'  => 'required',
        ]);

        $pass = $request->password;
        $conf_pass = $request->password_confirmation;

        $users = User::find($id);
        $users->nama = $request->nama;
        $users->nim = $request->nim;
        $users->kelas = $request->kelas;
        $users->divisi = $request->divisi;
        $users->study_group = $request->study_group;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        // $users->update($request->all());

        
        if ($pass == $conf_pass) {
            $users->save();
            return redirect()->back()->with('success', 'Profil berhasil diupdate');
        } else {
            return redirect()->back()->with('failed', 'Prodil gagal diupdate');
        }
        
    }
}
