@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Daftar Baru') }}</div>
                    <div class="card-body">
                        <form action="{{ route('daftar.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="number" class="form-control" id="nis" name="nis" @error('nis')
                                    placeholder="{{ $message }}"
                                @enderror>
                              </div>
  
                              <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" @error('nama')
                                    placeholder="{{ $message }}"
                                @enderror>
                              </div>
  
                              <div class="form-group">
                                  <label for="jk">Jenis Kelamin</label>
                                  <select class="form-control" id="jk" name="jk">
                                      <option disable></option>
                                      <option value="Laki-laki">Laki-laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                  </select>
                              </div>
  
                              <div class="form-group">
                                  <label for="temp_lahir">Tempat Lahir</label>
                                  <input type="text" class="form-control" id="temp_lahir" name="temp_lahir" @error('temp_lahir')
                                      placeholder="{{ $message }}"
                                  @enderror>
                              </div>
  
                              <div class="form-group">
                                  <label for="tgl_lahir">Tanggal Lahir</label>
                                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" @error('tgl_lahir')
                                      placeholder="{{ $message }}"
                                  @enderror>
                              </div>
  
                              <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <textarea class="form-control" id="alamat" name="alamat" @error('alamat')
                                      placeholder="{{ $message }}"
                                  @enderror></textarea>
                              </div>
  
                              <div class="form-group">
                                  <label for="asal_sekolah">Asal Sekolah</label>
                                  <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" @error('asal_sekolah')
                                      placeholder="{{ $message }}"
                                  @enderror>
                              </div>
  
                              <div class="form-group">
                                  <label for="kelas">Kelas</label>
                                  <select class="form-control" id="kelas" name="kelas">
                                      <option disable>Pilih Kelas</option>
                                      <option value="X">X</option>
                                      <option value="XI">XI</option>
                                      <option value="XII">XII</option>
                                  </select>
                              </div>
  
                              <div class="form-group">
                                  <label for="jurusan">Jurusan</label>
                                  <input type="text" class="form-control" id="jurusan" name="jurusan" @error('jurusan')
                                      placeholder="{{ $message }}"
                                  @enderror>
                              </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
