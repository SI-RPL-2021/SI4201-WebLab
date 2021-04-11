<?php

use App\Http\Controllers\AnggotaController;
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

Route::get('buatkegiatan', function () {
    return view('buatkegiatan');
});

Route::get('edit/profile/{id}', 'App\Http\Controllers\ProfileController@editProfile');

//Routing anggota
Route::get('/akunanggota',[AnggotaController::class,'index']); 
Route::get('/updateakun/{Anggota:id}',[AnggotaController::class,'updateanggota']); 
Route::post('/update/{Anggota:id}',[AnggotaController::class,'updatestore']);
Route::get('/delete/{Anggota:id}',[AnggotaController::class,'destroy']);