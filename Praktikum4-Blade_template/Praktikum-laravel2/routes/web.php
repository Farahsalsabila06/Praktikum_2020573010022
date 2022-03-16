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

//  Blade template engine
Route::get('/mahasiswa', function(){
    $nama='Farah Salsabila';
    $nilai=75;
    return view('kampus.mahasiswa',compact('nama','nilai'));
});