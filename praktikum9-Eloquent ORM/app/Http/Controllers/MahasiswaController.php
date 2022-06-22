<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // //kode program akan kita tulis disini
    //     public function cekObject(){
    //     $mahasiswa = new Mahasiswa;
    //     dump($mahasiswa);
    //     }

    // //method all()
    // public function all(){
    // $result = Mahasiswa::all();
    // dump($result);
    // }

    //     public function all(){
    //         $result = Mahasiswa::all(); 

    //         echo($result[0]->id). '<br>';
    //         echo($result[0]->nim). '<br>';
    //         echo($result[0]->nama). '<br>';
    //         echo($result[0]->tanggal_lahir). '<br>';
    //         echo($result[0]->ipk). '<br>';
    //     }
    //     public function all(){
    //         $result = Mahasiswa::all();  

    //         foreach ($result as $mahasiswa)
    //         echo($result[0]->id). '<br>';
    //         echo($result[0]->nim). '<br>';
    //         echo($result[0]->nama). '<br>';
    //         echo($result[0]->tanggal_lahir). '<br>';
    //         echo($result[0]->ipk). '<br>';
    //         echo "<hr>";
    // }

    // //mass update
    // public function massUpdate(){
    //     Mahasiswa::where('nim','2020573010022')->first()->update([
    //         'tanggal_lahir'=>'2002-06-19',
    //         'ipk'=> 2.1
    //     ]);
    //     return"Berhasil di proses";
    // }

    // //Menghapus data
    // public function delete(){
    //     $mahasiswa=Mahasiswa::find(1);
    //     $mahasiswa->delete();
    //     dump($mahasiswa);
    // }

    // //mass delete
    // public function massDelete(){
    //     $mahasiswa=Mahasiswa::where('ipk','>',2)->delete;
    //     dump($mahasiswa);
    // }

    public function allview(){
        $mahasiswas = Mahasiswa::all();
        return view('tampil_mahasiswa',['mahasiswas'=>$mahasiswas]);
    }
}

    
