@extends('admin.home')
@section('admin')



<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pengemudi</h1>
            <a href="{{ route('pengemudi.add') }}" class="d-none d-sm-inline-block btn btn-success shadow"><i
                    class="mdi mdi-playlist-plus"></i> Tambah Pengemudi</a>
        </div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            @csrf
                <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
                </p>
                <div class="table-responsive">
                    <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama</center></th>
                                <th><center>Nomor Telepon</center></th>
                                <th><center>Alamat</center></th>
                                <th><center>Usia</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datapengemudi as $item)
                            <tr>
                                <td><center>{{$loop->iteration}}<center></td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->telp}}</td>
                                <td><center>{{$item->alamat}}<center></td>
                                <td><center>{{$item->usia}}<center></td>
                                <td colspan="2"><center>
                                    <a href="{{route('pengemudi.edit', $item->id)}}" class="d-none d-sm-inline-block btn btn-warning shadow"><i
                                        class="mdi mdi-pencil"></i> Ubah
                                    </a>
                                    <a href="{{route('pengemudi.delete', $item->id)}}" onclick="return confirm('Apakah anda yakin?')" class="d-none d-sm-inline-block btn btn-danger shadow"><i
                                        class="mdi mdi-delete"></i> Hapus
                                    </a><center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection