@extends('admin.home')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tambah Kendaraan</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('kendaraan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="kategori" class="form-label">Jenis Angkutan</label>
                            <select type="select" class="form-control" name="jenis" required>
                                <option selected>Pilih</option>
                                <option value="Angkutan Barang">Angkutan Barang</option>
                                <option value="Angkutan Manusia">Angkutan Manusia</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Model Kendaraan</label>
                    <input type="text" class="form-control" id="model" name="model" placeholder="Model Kendaraan" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Plat Nomor</label>
                    <input type="text" class="form-control" id="plat" name="plat" placeholder="Plat Nomor" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Batas Tahun Aktif</label>
                    <input type="text" class="form-control" id="tahun_aktif" name="tahun_aktif" placeholder="Batas Tahun Aktif" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Konsumsi Bahan Bakar</label>
                    <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" placeholder="Konsumsi Bahan Bakar" required>
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
