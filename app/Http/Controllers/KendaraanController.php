<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KendaraanController extends Controller
{
    public function index(){
        $datakendaraan = Kendaraan::all();
        return view('admin.kendaraan.view_kendaraan', ['datakendaraan' => $datakendaraan]);
    }

    public function add(){
        $datakendaraan = Kendaraan::all();
        return view('admin.kendaraan.add_kendaraan', compact('datakendaraan'));
    }

    public function store(Request $request){
        $datakendaraan = new Kendaraan();
        $datakendaraan->id = $request->id;
        $datakendaraan->jenis = $request->jenis;
        $datakendaraan->model = $request->model;
        $datakendaraan->plat = $request->plat;
        $datakendaraan->tahun_aktif = $request->tahun_aktif;
        $datakendaraan->bahan_bakar = $request->bahan_bakar;
        $datakendaraan->save();
        return redirect()->route('kendaraan.view')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit($id){
        $editkendaraan = Kendaraan::find($id);
        return view('admin.kendaraan.edit_kendaraan', compact('editkendaraan'));
    }

    public function update(Request $request, $id){
        $datakendaraan = Kendaraan::find($id);
        $datakendaraan->jenis = $request->jenis;
        $datakendaraan->model = $request->model;
        $datakendaraan->plat = $request->plat;
        $datakendaraan->tahun_aktif = $request->tahun_aktif;
        $datakendaraan->bahan_bakar = $request->bahan_bakar;
        $datakendaraan->update();
        return redirect()->route('kendaraan.view')->with('message', 'data kendaraan berhasil diubah!');
    }

    public function delete($id){
        $datakendaraan = Kendaraan::find($id);
        $datakendaraan->delete();
        return redirect()->route('kendaraan.view')->with('message', 'data kendaraan berhasil dihapus!');
    }
}
