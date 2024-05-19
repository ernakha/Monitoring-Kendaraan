@extends('admin.home')
@section('admin')



<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pesanan</h1>
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
                                <th><center>Kendaraan</center></th>
                                <th><center>Pengemudi</center></th>
                                <th><center>Lokasi</center></th>
                                <th><center>Waktu</center></th>
                                <th><center>Status</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datapesan as $item)
                            <tr>
                                <td><center>{{$loop->iteration}}<center></td>
                                <td>{{$item->pengguna}}</td>
                                <td>{{$item->kendaraan->model}}</td>
                                <td><center>{{$item->pengemudi->nama}}<center></td>
                                <td><center>{{$item->lokasi}}<center></td>
                                <td><center>{{$item->waktu}}<center></td>
                                <td><center>{{$item->status}}<center></td>
                                <td colspan="2"><center>
                                    <a href="{{route('pengelolapesan.edit', $item->id)}}" class="d-none d-sm-inline-block btn btn-warning shadow"><i
                                        class="mdi mdi-pencil"></i> Lihat
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