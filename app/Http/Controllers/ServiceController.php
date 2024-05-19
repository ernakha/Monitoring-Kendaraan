<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $dataservice = Service::all();
        return view('admin.service.view_service', ['dataservice' => $dataservice]);
    }
    
    public function add(){
        $dataservice = Service::all();
        $datakendaraan = Kendaraan::all();
        return view('admin.service.add_service', compact('dataservice', 'datakendaraan'));
    }

    public function store(Request $request){
        $dataservice = new Service();
        $dataservice->id = $request->id;
        $dataservice->kendaraan_id = $request->kendaraan_id;
        $dataservice->tgl_ser = $request->tgl_ser;
        $dataservice->lokasi = $request->lokasi;
        $dataservice->save();
        return redirect()->route('service.view')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit($id){
        $editservice = Service::find($id);
        $datakendaraan = Kendaraan::all();
        return view('admin.service.edit_service', compact('editservice', 'datakendaraan'));
    }

    public function update(Request $request, $id){
        $dataservice = Service::find($id);
        $dataservice->pengguna = $request->pengguna;
        $dataservice->kendaraans_id = $request->kendaraans_id;
        $dataservice->tgl_ser = $request->tgl_ser;
        $dataservice->lokasi = $request->lokasi;
        $dataservice->update();
        return redirect()->route('service.view')->with('message', 'data service berhasil diubah!');
    }

    public function delete($id){
        $dataservice = Service::find($id);
        $dataservice->delete();
        return redirect()->route('service.view')->with('message', 'data service berhasil dihapus!');
    }
}
