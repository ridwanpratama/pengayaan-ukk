@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Data') }}</div>
                    <div class="card-body">
                        <form action="{{ route('pendaftar.update', $pendaftar->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="nis">NIS</label>
                              <input type="number" class="form-control" id="nis" name="nis" value="{{ $pendaftar->nis }}">
                            </div>

                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama" value="{{ $pendaftar->nama }}">
                            </div>

                            <div class="form-group">
                                <label for="jk">Kelas</label>
                                <select class="form-control" id="jk" name="jk">
                                    <option value="{{ $pendaftar->jk }}">{{ $pendaftar->jk }}</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="temp_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="temp_lahir" name="temp_lahir" value="{{ $pendaftar->temp_lahir }}">
                            </div>

                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $pendaftar->tgl_lahir }}">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat">{{ $pendaftar->alamat }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="{{ $pendaftar->asal_sekolah }}">
                            </div>

                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select class="form-control" id="kelas" name="kelas">
                                    <option value="{{ $pendaftar->kelas }}">{{ $pendaftar->kelas }}</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $pendaftar->jurusan }}">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
