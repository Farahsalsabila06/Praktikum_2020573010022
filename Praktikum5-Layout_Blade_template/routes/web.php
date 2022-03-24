<?php

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


//Route Bawaan Laravel

Route::get('/', function () {
return view('welcome');
});

/*
//  menampilkan data
Route::get('/mahasiswa', function(){
    $nama='Farah Salsabila';
    $nilai=75;
    return view('mahasiswa',compact('nama','nilai'));
});


Route::get('/mahasiswa', function(){
    $nama='<u>Farah Salsabila';
    $nilai=75;
    return view('mahasiswa',compact('nama','nilai'));
});

Route::get('/mahasiswa', function(){
    $nama='Farah Salsabila';
    $nilai=75;
    return view('mahasiswa',compact('nama','nilai'));
});

//perulangan foreach
Route::get('/mahasiswa', function(){
    $nama='Farah Salsabila';
    $nilai=[80,64,30,76,95];
    return view('mahasiswa',compact('nama','nilai'));
});


//perintah continue dan break
Route::get('/mahasiswa', function(){
    $nama='Farah Salsabila';
    $nilai=[80,64,30,76,95];
    return view('mahasiswa',compact('nama','nilai'));
});
*/


// Layout blade 
Route::get('mahasiswa1',function(){
    $arrMahasiswa = ["Farah Salsabila", "Sarah Ayu", "Fika Adila"];
    return view('mahasiswa1')->with('mahasiswa',$arrMahasiswa);
});

Route::get('dosen',function(){
    $arrDosen = ["Maya Fitrianti,M.M", "Prof.Silvia Nst, M.Farm", "Dr.Umar Agustinus","Dr. Syahrial, M.kom"];
    return view('dosen')->with('dosen',$arrDosen);
});

Route::get('gallery',function(){
    return view('gallery');
});

Route::get('admin', function () {
    return view('admin');
});


