<?php

namespace App\Http\Controllers;

use App\Exports\ExportPesan;
use App\Models\Kendaraan;
use App\Models\Pengemudi;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PesanController extends Controller
{
    public function index(){
        $datapesan = Pesan::all();
        return view('admin.pesan.view_pesan', ['datapesan' => $datapesan]);
    }

    public function add(){
        $datapesan = Pesan::all();
        $datakendaraan = Kendaraan::all();
        $datapengemudi = Pengemudi::all();
        return view('admin.pesan.add_pesan', compact('datapesan', 'datakendaraan', 'datapengemudi'));
    }

    public function store(Request $request){
        $datapesan = new Pesan();
        $datapesan->id = $request->id;
        $datapesan->pengguna = $request->pengguna;
        $datapesan->kendaraan_id = $request->kendaraan_id;
        $datapesan->pengemudi_id = $request->pengemudi_id;
        $datapesan->lokasi = $request->lokasi;
        $datapesan->waktu = $request->waktu;
        $datapesan->save();
        return redirect()->route('pesan.view')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit($id){
        $editpesan = Pesan::find($id);
        $datakendaraan = Kendaraan::all();
        $datapengemudi = Pengemudi::all();
        return view('admin.pesan.edit_pesan', compact('editpesan', 'datakendaraan', 'datapengemudi'));
    }

    public function update(Request $request, $id){
        $datapesan = Pesan::find($id);
        $datapesan->pengguna = $request->pengguna;
        $datapesan->kendaraans_id = $request->kendaraans_id;
        $datapesan->pengemudi_id = $request->pengemudi_id;
        $datapesan->lokasi = $request->lokasi;
        $datapesan->waktu = $request->waktu;
        $datapesan->update();
        return redirect()->route('pesan.view')->with('message', 'data pesan berhasil diubah!');
    }

    public function delete($id){
        $datapesan = Pesan::find($id);
        $datapesan->delete();
        return redirect()->route('pesan.view')->with('message', 'data pesan berhasil dihapus!');
    }
    
    public function export(){
        return Excel::download(new ExportPesan, 'Pemesanan.xlsx');
    }
}
