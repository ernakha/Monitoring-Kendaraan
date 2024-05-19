<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Pengemudi;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PengelolaController extends Controller
{
    public function index(){
        return view('pengelola.index');
    }

    public function pesan(){
        $datapesan = Pesan::all()->sortByDesc('created_at');
        return view('pengelola.pesan.view_pesan', ['datapesan' => $datapesan]);
    }

    public function editpesan($id){
        $editpesan = Pesan::find($id);
        $datapengemudi = Pengemudi::all();
        $datakendaraan = Kendaraan::all();
        return view('pengelola.pesan.edit_pesan', compact('editpesan', 'datapengemudi', 'datakendaraan'));
    }

    public function updatepesan (Request $request, $id){
        $datapesan = Pesan::find($id);
        $datapesan->status = $request->status;
        $datapesan->update();
        return redirect()->route('pengelolapesan.view');
    }
}
