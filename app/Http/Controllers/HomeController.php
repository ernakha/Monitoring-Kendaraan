<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Pengemudi;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pesan = Pesan::count();
        $pengemudi = Pengemudi::count();
        $kendaraan = Kendaraan::count();
        if($user = Auth::user()){
            if($user->level == 'Admin'){
                return view('admin.index', compact('pesan', 'pengemudi', 'kendaraan'));
            }elseif ($user->level == 'Pengelola'){
                return view('pengelola.index', compact('pesan', 'pengemudi', 'kendaraan'));
            }
        }return view('auth/login');
    }
}
