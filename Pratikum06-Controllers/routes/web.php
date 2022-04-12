<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\MahasiswaController;
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

// controller manual
Route::get('/', [PageController::class, 'index']);
Route::get('/mahasiswa', [PageController::class, 'tampil']);

//Route Facades
Route::get('/facades', [PageController::class, 'cobaFacades']);

// external class
Route::get('coba-class', [PageController::class, 'cobaClass']);

// route Tugas
Route::get('data-mahasiswa', [MahasiswaController::class, 'mahasiswa']);
Route::get('data-dosen', [MahasiswaController::class, 'dosen']);
Route::get('data-gallery', [MahasiswaController::class, 'gallery']);

Route::get('informasi/{jurusan}/{prodi}', [MahasiswaController::class, 'info']);

