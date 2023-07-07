<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\MahasiswaModel;

class MahasiswaController extends Controller
{

    public function tambahMahasiswa()
    {
        return view('form');
    }

    public function simpanMahasiswa(Request $request)
    {
        $mahasiswa = MahasiswaModel::create([
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jurusan' => $request->jurusan,
        ]);

        return redirect()->route('tambahMahasiswa');
    }
}
