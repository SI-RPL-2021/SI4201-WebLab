<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dokumentasi;

class DokumentasiController extends Controller
{
    //
    public function index()
    {
        return view('upload_dokumentasi');
    }

    public function store(Request $request)
    {
        $dokumentasi = new Dokumentasi();

        $dokumentasi->name = $request->input('foto');

        if ($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension(); //mendapatkan image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/dokumentasi/', $filename);
            $dokumentasi->foto = $filename;
        }   else {
            return $request;
            $dokumentasi->foto = '';
        }

        $dokumentasi->save();

        return view('dokumentasi')->with('dokumentasi',$dokumentasi);


    }

}
