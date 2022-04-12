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
//Route bawaan laravel
    Route::get('/', function () {
        return view('welcome');
    });

// Layout blade 
    Route::get('mahasiswa', function (){
    $arrMahasiswa = ["Farah Salsabila","Jokowi","Vladimir Putin",
    "Lisa Permata"];
    return view('mahasiswa')-> with ('mahasiswa',$arrMahasiswa);
    });

    Route::get('dosen', function (){
    $arrDosen = ["Farah Salsabila S.Tr.kom","Prof.Silvia Nst, M.farm",
    "Dr. Umar Agustinus","Dr.Syahrial M.kom"];
    return view('dosen')->with('dosen',$arrDosen);
    });
    
    Route::get('gallery', function (){
    return view('gallery');
    });

    Route::get('admin', function () {
        return view('admin');
    });


