@extends('admin.home')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Pesan Kendaraan</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('pesan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="pengguna" name="pengguna" placeholder="Nama Lengkap" value="{{$editpesan->nama}}" required>
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Kendaraan</label>
                    <select class="form-control" name="kendaraan_id" aria-label="Default select example">
                        <option value="{{$editpesan->kendaraan_id}}" selected>{{$editpesan->kendaraan->model}}</option>
                        @foreach ($datakendaraan as $kendaraan)
                        <option value="{{ $kendaraan->id }}">
                            {{ $kendaraan->model}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Pengemudi</label>
                    <select class="form-control" name="pengemudi_id" aria-label="Default select example">
                        <option value="{{$editpesan->pengemudi_id}}" selected>{{$editpesan->pengemudi->nama}}</option>
                        @foreach ($datapengemudi as $pengemudi)
                        <option value="{{ $pengemudi->id }}">
                            {{ $pengemudi->nama}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi" value="{{$editpesan->lokasi}}" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Waktu</label>
                    <input type="time" class="form-control" id="waktu" name="waktu" placeholder="Waktu" value="{{$editpesan->waktu}}" required>
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