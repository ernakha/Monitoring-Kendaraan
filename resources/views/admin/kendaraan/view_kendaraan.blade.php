@extends('admin.home')
@section('admin')



<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Kendaraan</h1>
            <a href="{{ route('kendaraan.add') }}" class="d-none d-sm-inline-block btn btn-success shadow"><i
                    class="mdi mdi-playlist-plus"></i> Tambah Kendaraan</a>
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
                                <th><center>Jenis Angkutan</center></th>
                                <th><center>Model Kendaraan</center></th>
                                <th><center>Plat Nomor</center></th>
                                <th><center>Batas Tahun Aktif</center></th>
                                <th><center>Konsumsi Bahan Bakar</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datakendaraan as $item)
                            <tr>
                                <td><center>{{$loop->iteration}}<center></td>
                                <td>{{$item->jenis}}</td>
                                <td>{{$item->model}}</td>
                                <td><center>{{$item->plat}}<center></td>
                                <td><center>{{$item->tahun_aktif}}<center></td>
                                <td><center>{{$item->bahan_bakar}}<center></td>
                                <td colspan="2"><center>
                                    <a href="{{route('kendaraan.edit', $item->id)}}" class="d-none d-sm-inline-block btn btn-warning shadow"><i
                                        class="mdi mdi-pencil"></i> Ubah
                                    </a>
                                    <a href="{{route('kendaraan.delete', $item->id)}}" onclick="return confirm('Apakah anda yakin?')" class="d-none d-sm-inline-block btn btn-danger shadow"><i
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