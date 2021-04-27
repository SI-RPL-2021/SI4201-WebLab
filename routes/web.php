<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\PelatihanController;
use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    return view('home');
}) -> name('home') -> middleware('auth');

Route::get('editprofile', function () {
    return view('editprofile');
});


Route::get('edit/profile/{id}', 'App\Http\Controllers\ProfileController@editProfile');

// Routing admin
Route::get('/akunanggota',[AnggotaController::class,'index']); 
Route::get('/updateakun/{Anggota:id}',[AnggotaController::class,'updateanggota']); 
Route::post('/update/{Anggota:id}',[AnggotaController::class,'updatestore']);
Route::get('/delete/{Anggota:id}',[AnggotaController::class,'destroy']);
Route::get('cek_aprovalRapat',[RapatController::class, 'cek_aprovalRapat']);
Route::get('aprove/{Rapat:id}',[RapatController::class, 'aprove']);
Route::get('disaprove/{Rapat:id}',[RapatController::class, 'disaprove']);
Route::get('notifikasiKegiatan', [RapatController::class, 'notifikasiKegiatan']);

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
Route::get('deleteRapat/{Rapat:id}', [RapatController::class, 'deleteRapat']);
Route::get('goEditRapat/{Rapat:id}', [RapatController::class, 'goEditRapat']);
Route::get('goEditRapat/editRapat/{Rapat:id}', [RapatController::class, 'editRapat']);
Route::get('dokumentasiValidasi', [RapatController::class, 'dokumentasiValidasi']);
Route::get('validasiKehadiranKegiatan', [RapatController::class, 'validasiKehadiranKegiatan']);
Route::get('uploadDokumentasi', [RapatController::class, 'uploadDokumentasi']);
Route::get('combineData', [RapatController::class, 'combineData']);

// Routing trainer
Route::get('pelatihan', [PelatihanController::class, 'pelatihan']);
Route::get('pelatihan/create', [PelatihanController::class, 'createPelatihan']);
Route::get('readPelatihan', [PelatihanController::class, 'readPelatihan']);
Route::get('deletePelatihan/{Pelatihan:id}', [PelatihanController::class, 'deletePelatihan']);
Route::get('goEditPelatihan/{Pelatihan:id}', [PelatihanController::class, 'goEditPelatihan']);
Route::get('goEditPelatihan/editPelatihan/{Pelatihan:id}', [PelatihanController::class, 'editPelatihan']);

//routing anggota
Route::get('mengikutiKegiatan', [AnggotaController::class, 'mengikutiKegiatan']);
Route::get('absensiKegiatan', [AnggotaController::class, 'absensiKegiatan']);