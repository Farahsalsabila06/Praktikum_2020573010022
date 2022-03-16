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
// view
Route::get('/home', function () {
    return view('halaman_home');
});

Route::get('/mahasiswa', function () {
    return View('kampus.mahasiswa');
});
Route::get('/mahasiswa', function () {
    return View('kampus.mahasiswa',["mahasiswa01" => "Farah Salsabila"]);
});


Route::get('/mahasiswa', function () {
    return View('kampus.mahasiswa',[
        "mahasiswa01" => "Farah Salsabila",
        "mahasiswa02" => "Doni Salmanan",
        "mahasiswa03" => "Ulfi Rizkia",
        "mahasiswa04" => "Deliana Putri",
    ]);
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = [
        "mahasiswa01" => "Farah Salsabila",
        "mahasiswa02" => "Doni Salmanan",
        "mahasiswa03" => "Ulfi Rizkia",
        "mahasiswa04" => "Deliana Putri",
    ];
return view('kampus.mahasiswa',$arrMahasiswa);
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Farah Salsabila", "Syadzwina Sahara","Deliana Putri","Indra Kenz"];
    return view('kampus.mahasiswa',['mahasiswa'=> $arrMahasiswa]);
});

Route::get('/mahasiswa', function () {
    return view('kampus.mahasiswa')->with ('mahasiswa01','Risa Lestari');
});



Route::get('/mahasiswa', function () {
    $arrMahasiswa=["Doni sadikin","Syadzwina sahara","Deliana Putri","Indra Kenz"];
    return view('kampus.mahasiswa')->with ('mahasiswa',$arrMahasiswa);
});


    Route::get('/mahasiswa', function () {
        return view('kampus.mahasiswa')
        ->with('mahasiswa01','Farah salsabila')
        ->with('mahasiswa02','Syadzwina Sahara')
        ->with('mahasiswa03','Deliana Putri');
    });
    

    Route::get('/mahasiswa', function () {
        return view('kampus.mahasiswa')
        ->withmahasiswa01,('Farah Salsabila')
        ->withmahasiswa02,'Syadzwina Sahara')
        ->withmahasiswa03,'Deliana Putri');
    });
    

Route::get('/home', function () {
    return view('home',[
        'title'=>'Home',
        'nama' => 'Farah Salsabila'
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        'title'=>'Profile'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title'=>'about'
    ]);
});

//Route
Route::get('/hello',function(){
    return'Hello Word';
});

Route::get('/belajar',function(){
echo'<h1>Hello Word</h1>';
echo'<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/profil/coba',function(){
    echo'<h2 style="text-align: center"><u>Welcome Profil Coba</u></h2>';
});


//Router parameter
Route::get('/mahasiswa/{nama}',function($nama){
    return"Tampilkan data mahasiswa bernama $nama";
});


//Route parameter dengan 2 parameter
Route::get('/stok_barang/{jenis}/{merek}',function($jenis,$merek){
    return"Cek sisa stok untuk $jenis $merek";
});


Route::get('/stok_barang/{jenis}/{merek}',function($a,$b){
    return"Cek sisa stok untuk $a $b";
});


//Route dengan optional parameter
Route::get('/stok_barang/{jenis?}/{merek?}',
function($a = 'smartphone',$b = 'samsung'){
    return"Cek sisa stok untuk $a $b";
});

//Route parameter dengan regula expression
Route::get('/user/{id}',function ($id){
    return"Tampilkan user dengan id = $id";
});


route::get('/user/{id}',function($id){
    return"Tampilkan user dengan id=$id";
})->where('id', '[0-9]+');


route::get('/user/{id}',function($id){
    return"Tampilkan user dengan id=$id";
})->where('id', '[A-Z]{2}[0-9]+');


//Route Redirect
Route::get('/hubungi-kami', function(){
    return'<h1>Hubungi-Kami</h1>';
});
route::redirect('/contact-us','/hubungi-kami');


//Router Group
Route::get('/admin/mahasiswa',function(){
    return"<h1>Daftar Mahasiswa</h1>";
});
Route::get('/admin/dosen',function(){
    return"<h1>Daftar Dosen</h1>";
});
Route::get('/admin/karyawan',function(){
    return"<h1>Daftar Karyawan</h1>";
});

Route::prefix('/admin')->group(function(){
    Route::get('/mahasiswa',function(){
        echo"<h1>Daftar Mahasiswa</h1>";
    });
    Route::get('/dosen',function(){
        echo"<h1>Daftar Dosen</h1>";
    });
    Route::get('/karyawan',function(){
        echo"<h1>Daftar Karyawan</h1>";
    });
});

//Route Fallback
Route::fallback(function(){
    return"Maaf,alamat tidak ditemukan";
});

//Route Priority
Route::get('/buku/1',function(){
    return"Buku ke-1";
});

Route::get('/buku/1',function(){
    return"Buku saya-1";
});


Route::get('/buku/1',function(){
    return"Buku kita-1";
});

Route::get('/buku/{a}',function($a){
    return"Buku ke-$a";
});


Route::get('/buku/{b}',function($b){
    return"Buku saya ke-$b";
});

Route::get('/buku/{c}',function($c){
    return"Buku kita ke-$c";
});

Route::get('mahasiswa/andi',function(){
    echo"Halaman mahasiswa andi";
});

Route::get('/mahasiswa/andi',function(){
    echo"Halaman mahasiswa andi";
});
*/

//  Blade template engine
Route::get('/mahasiswa', function(){
    $nama='Farah Salsabila';
    $nilai=75;
    return view('kampus.mahasiswa',compact('nama','nilai'));
});