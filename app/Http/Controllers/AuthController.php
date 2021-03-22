<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view('login');
    }
    public function ihome(){
        return view('home');
    }

    public function postLogin(Request $request){
        $credentials = $request->only('email', 'password');
        $login = Auth::attempt($credentials);
        if($login){
            // return redirect('home');
            // return view('home');
            return redirect()->route('ihome');
            // echo $user = Auth::user();
            // echo $user = Auth::user()->nama;
        }
        else{
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('get_login');
    }

    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'nim' => 'required',
            'kelas' => 'required',
            'divisi' => 'required',
            'study_group' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4|confirmed',
        ]);
        
        User::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'divisi' => $request->divisi,
            'study_group' => $request->study_group,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login');
    }
}
