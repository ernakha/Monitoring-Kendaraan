@extends('admin.home')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tambah Pengemudi</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('pengemudi.update', $editpengemudi->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="{{$editpengemudi->nama}}" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telepon" value="{{$editpengemudi->telp}}" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{$editpengemudi->alamat}}" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Usia</label>
                    <input type="text" class="form-control" id="usia" name="usia" placeholder="Usia" value="{{$editpengemudi->usia}}" required>
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
