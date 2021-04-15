<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('pendaftar.daftarbaru.form');
    }

    public function store(Request $request)
    {
        $this->_validation($request);
        Pendaftar::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'temp_lahir' => $request->temp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/');
    }

    public function _validation(Request $request)
    {
        $validation = $request->validate([
            'nis' => 'required|unique:pendaftar',
            'noisbn' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'temp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);
    }
}
