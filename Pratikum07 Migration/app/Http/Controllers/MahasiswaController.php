<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $arrMahasiswa = [
            "Luhut Panjahitan", "Jokowi", "Vladimir putin", "Lisa Pertama",
        ];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
    public function dosen()
    {
        $arrDosen = [
            "Luhut Panjahitan", "Jokowi", "Vladimir putin", "Lisa Pertama",
        ];
        return view('dosen')->with('dosen', $arrDosen);
    }
    public function gallery()
    {

        return view('gallery');
    }

    public function info($jurusan, $prodi)
    {
        $data = ['Di Informasikan Pada Saat Ramadhan Kuliah Hanya Libur Dua Minggu', 'Di Informasikan Pada Saat Ramadhan Kuliah Hanya Libur Dua Minggu Dan Menurut Dosen Nya'];
        return view('informasi')->with('data', $data);
    }

}
