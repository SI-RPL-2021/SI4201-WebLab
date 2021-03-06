<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\DokumentasiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('layout', function () {
    return view('layout');
});

Route::get('register', 'App\Http\Controllers\AuthController@getRegister') -> name('get_register') -> middleware('guest');
Route::post('register', 'App\Http\Controllers\AuthController@PostRegister') -> name('register') -> middleware('guest');
Route::get('login', 'App\Http\Controllers\AuthController@getLogin')-> name('get_login') -> middleware('guest');
Route::post('login', 'App\Http\Controllers\AuthController@postLogin') -> name('login') -> middleware('guest');
Route::get('logout', 'App\Http\Controllers\AuthController@logout') -> name('logout')  -> middleware('auth');

Route::get('home', [AnggotaController::class,'homeAnggota'])-> name('home') -> middleware('auth');

Route::get('editprofile', function () {
    return view('editprofile');
});


Route::get('edit/profile/{id}', 'App\Http\Controllers\ProfileController@editProfile');

// Routing admin
Route::get('/akunanggota',[AnggotaController::class,'index']); 
Route::get('/tempanggota',[AnggotaController::class,'indexs']); 
Route::get('/updateakun/{Anggota:id}',[AnggotaController::class,'updateanggota']); 
Route::post('/update/{Anggota:id}',[AnggotaController::class,'updatestore']);
Route::get('/delete/{Anggota:id}',[AnggotaController::class,'destroy']);
Route::get('/deletetemp/{Anggota:id}',[AnggotaController::class,'destroytemp']);
Route::get('/approveanggota/{Anggota:id}',[AnggotaController::class,'approveanggota']);



Route::get('cek_aprovalRapat',[RapatController::class, 'cek_aprovalRapat']);
Route::get('aprove/{Rapat:id}',[RapatController::class, 'aprove']);
Route::get('disaprove/{Rapat:id}',[RapatController::class, 'disaprove']);
Route::get('notifikasiKegiatan', [RapatController::class, 'notifikasiKegiatan']);
Route::get('combineData', [RapatController::class, 'combineData']);

Route::get('cek_aprovalPelatihan',[PelatihanController::class, 'cek_aprovalPelatihan']);
Route::get('aprovePelatihan/{Pelatihan:id}',[PelatihanController::class, 'aprovePelatihan']);
Route::get('disaprovePelatihan/{Pelatihan:id}',[PelatihanController::class, 'disaprovePelatihan']);

Route::get('goEditPelatihanAdmin/{Pelatihan:id}', [PelatihanController::class, 'goEditPelatihanAdmin']);
Route::get('goEditPelatihanAdmin/editPelatihan/{Pelatihan:id}', [PelatihanController::class, 'editPelatihanAdmin']);

Route::get('goEditRapatAdmin/{Rapat:id}', [RapatController::class, 'goEditRapatAdmin']);
Route::get('goEditRapatAdmin/editRapatAdmin/{Rapat:id}', [RapatController::class, 'editRapatAdmin']);

// Routing sekretaris
Route::get('rapat', [RapatController::class, 'rapat']);
Route::get('rapat/create', [RapatController::class, 'createRapat']);
Route::get('readRapat', [RapatController::class, 'readRapat']);
// Route::get('readRapat/{Rapat:id}', [RapatController::class, 'readRapat']);
Route::get('deleteRapat/{Rapat:id}', [RapatController::class, 'deleteRapat']);
Route::get('goEditRapat/{Rapat:id}', [RapatController::class, 'goEditRapat']);
Route::get('goEditRapat/editRapat/{Rapat:id}', [RapatController::class, 'editRapat']);
Route::get('dokumentasiValidasi', [RapatController::class, 'dokumentasiValidasi'])-> name('dokumentasiValidasi');
Route::get('validasiKehadiranRapat/dokumentasiValidasi', [RapatController::class, 'dokumentasiValidasi']);
Route::get('validasiKehadiranRapat/{Rapat:id}', [RapatController::class, 'validasiKehadiranRapat']);
Route::get('validasiKehadiranPelatihan/{Pelatihan:id}', [RapatController::class, 'validasiKehadiranPelatihan']);
Route::get('validasiKehadiranRapat/validasiAnggotaRapat/{Absenrapat:id}', [RapatController::class, 'validasiAnggotaRapat']);
Route::get('validasiKehadiranRapat/deletevalidasiAnggotaRapat/{Absenrapat:id}', [RapatController::class, 'deletevalidasiAnggotaRapat']);
Route::get('validasiKehadiranRapat/validasiAnggotaRapatAll/{Absenrapat:id}', [RapatController::class, 'validasiAnggotaRapatAll']);
Route::get('validasiKehadiranPelatihan/validasiAnggotaPelatihan/{Pelatihan:id}', [RapatController::class, 'validasiAnggotaPelatihan']);
Route::get('validasiKehadiranPelatihan/deletevalidasiAnggotaPelatihan/{Pelatihan:id}', [RapatController::class, 'deletevalidasiAnggotaPelatihan']);
// Route::get('uploadDokumentasi', [RapatController::class, 'uploadDokumentasi']);validasiAnggotaRapat
Route::get('combineData', [RapatController::class, 'combineData']);


//Routing Dokumentasi
Route::get('uploadDokumentasiRapat/{Rapat:id}', [DokumentasiController::class, 'uploadDokumentasiRapat']);
Route::get('uploadDokumentasiPelatihan/{Pelatihan:id}', [DokumentasiController::class, 'uploadDokumentasiPelatihan']);
Route::post('uploadDokumentasiRapat/addfotoRapat/{Rapat:id}', [DokumentasiController::class, 'storeRapat']);
Route::post('uploadDokumentasiPelatihan/addfotoPelatihan/{Pelatihan:id}', [DokumentasiController::class, 'storePelatihan']);
Route::get('dokumentasi', [DokumentasiController::class, 'index']);
Route::get('daftarDokumentasi', [DokumentasiController::class, 'daftarDokumentasi']);


// Routing trainer
Route::get('pelatihan', [PelatihanController::class, 'pelatihan']);
Route::get('pelatihan/create', [PelatihanController::class, 'createPelatihan']);
Route::get('readPelatihan', [PelatihanController::class, 'readPelatihan']);
// Route::get('readPelatihan/{Pelatihan:id}', [PelatihanController::class, 'readPelatihan']);
Route::get('deletePelatihan/{Pelatihan:id}', [PelatihanController::class, 'deletePelatihan']);
Route::get('goEditPelatihan/{Pelatihan:id}', [PelatihanController::class, 'goEditPelatihan']);
Route::get('goEditPelatihan/editPelatihan/{Pelatihan:id}', [PelatihanController::class, 'editPelatihan']);

//routing anggota
Route::get('notifrapat', [RapatController::class, 'notifrapat']);
Route::get('absenrapat', [RapatController::class, 'absensirapat']); 
Route::get('kehadirans/{Rapat:id}', [RapatController::class, 'kehadirans'])->name('kehadirans');

Route::get('absenpelatihan', [PelatihanController::class, 'absensipelatihan']);
Route::get('kehadiran/{Pelatihan:id}', [PelatihanController::class, 'kehadiran'])->name('kehadiran');
Route::get('notifpelatihan', [PelatihanController::class, 'notifpelatihan']);

