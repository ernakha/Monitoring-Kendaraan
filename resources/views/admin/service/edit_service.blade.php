@extends('admin.home')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Service Kendaraan</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('service.store') }}" method="POST">
                @csrf
                <div class="col">
                    <label for="inputEmail4" class="form-label">Kendaraan</label>
                    <select class="form-control" name="kendaraan_id" aria-label="Default select example">
                        <option value="{{$editservice->kendaraan_id}}" selected>{{$editservice->kendaraan->model}}</option>
                        @foreach ($datakendaraan as $kendaraan)
                        <option value="{{ $kendaraan->id }}">
                            {{ $kendaraan->model}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Tanggal Service</label>
                    <input type="date" class="form-control" id="tgl_ser" name="tgl_ser" placeholder="Tanggal Service" value="{{$editservice->tgl_ser}}" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi" value="{{$editservice->lokasi}}" required>
                </div>
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-success shadow">Simpan</button>
            <button type="button" onclick="history.back()" class="btn btn-danger shadow">Batalkan</button>
        </div>
        </form>
    </div>
</div>
@endsection