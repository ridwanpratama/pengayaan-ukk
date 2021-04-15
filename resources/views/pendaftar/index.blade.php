@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Pendaftar') }}
                        
                    </div>
                    <div class="card-body">
                        <a href="{{ route('pendaftar.create') }}" class="btn btn-primary btn-sm mb-2">Create</a>
                        <a href="/" class="btn btn-secondary btn-sm mb-2">Back</a>
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama</th>
                                <th scope="col">JK</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal lahir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Asal Sekolah</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendaftar as $item)
                              <tr>
                                <th scope="row">{{ ++$i }}</th>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->temp_lahir }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->asal_sekolah }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->jurusan }}</td>
                                <td>
                                    <form action="{{ route('pendaftar.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus data?')">Hapus</button>
                                        <a href="{{ route('pendaftar.edit', $item->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                    </form>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                          {{ $pendaftar->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
