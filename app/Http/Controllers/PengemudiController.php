<?php

namespace App\Http\Controllers;

use App\Models\Pengemudi;
use Illuminate\Http\Request;

class PengemudiController extends Controller
{
    public function index(){
        $datapengemudi = Pengemudi::all();
        return view('admin.pengemudi.view_pengemudi', ['datapengemudi' => $datapengemudi]);
    }

    public function add(){
        $datapengemudi = Pengemudi::all();
        return view('admin.pengemudi.add_pengemudi', compact('datapengemudi'));
    }

    public function store(Request $request){
        $datapengemudi = new Pengemudi();
        $datapengemudi->id = $request->id;
        $datapengemudi->nama = $request->nama;
        $datapengemudi->telp = $request->telp;
        $datapengemudi->alamat = $request->alamat;
        $datapengemudi->usia = $request->usia;
        $datapengemudi->save();
        return redirect()->route('pengemudi.view')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit($id){
        $editpengemudi = Pengemudi::find($id);
        return view('admin.pengemudi.edit_pengemudi', compact('editpengemudi'));
    }

    public function update(Request $request, $id){
        $datapengemudi = Pengemudi::find($id);
        $datapengemudi->nama = $request->nama;
        $datapengemudi->telp = $request->telp;
        $datapengemudi->alamat = $request->alamat;
        $datapengemudi->usia = $request->usia;
        $datapengemudi->update();
        return redirect()->route('pengemudi.view')->with('message', 'data pengemudi berhasil diubah!');
    }

    public function delete($id){
        $datapengemudi = Pengemudi::find($id);
        $datapengemudi->delete();
        return redirect()->route('pengemudi.view')->with('message', 'data pengemudi berhasil dihapus!');
    }
}
