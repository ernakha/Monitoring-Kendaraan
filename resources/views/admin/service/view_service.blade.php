@extends('admin.home')
@section('admin')



<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Jadwal Service</h1>
            <a href="{{ route('service.add') }}" class="d-none d-sm-inline-block btn btn-success shadow"><i
                    class="mdi mdi-playlist-plus"></i> Tambah Jadwal Service</a>
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
                                <th><center>Kendaraan</center></th>
                                <th><center>Tanggal Service</center></th>
                                <th><center>Lokasi</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataservice as $item)
                            <tr>
                                <td><center>{{$loop->iteration}}<center></td>
                                <td>{{$item->kendaraan->model}}</td>
                                <td><center>{{$item->tgl_ser}}<center></td>
                                <td><center>{{$item->lokasi}}<center></td>
                                <td colspan="2"><center>
                                    <a href="{{route('service.edit', $item->id)}}" class="d-none d-sm-inline-block btn btn-warning shadow"><i
                                        class="mdi mdi-pencil"></i> Ubah
                                    </a>
                                    <a href="{{route('service.delete', $item->id)}}" onclick="return confirm('Apakah anda yakin?')" class="d-none d-sm-inline-block btn btn-danger shadow"><i
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