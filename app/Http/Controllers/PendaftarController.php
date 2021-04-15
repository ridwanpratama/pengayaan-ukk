<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
    {
        $pendaftar = Pendaftar::paginate(5);
        return view('pendaftar.index', compact('pendaftar'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pendaftar.create');
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

        return redirect('pendaftar');
    }

    public function edit($id)
    {
        $pendaftar = Pendaftar::findorFail($id);
        return view('pendaftar.edit',compact('pendaftar'));
    }

    public function update(Request $request, $id)
    {
        $this->_validation($request);
        $pendaftar = Pendaftar::findorFail($id);
        $pendaftar->update($request->all());
        return redirect('pendaftar');
    }

    public function destroy($id)
    {
        $pendaftar = Pendaftar::findorFail($id);
        $pendaftar->delete();
        return back();
    }

}
