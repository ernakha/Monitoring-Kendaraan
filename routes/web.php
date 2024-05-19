<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\PengemudiController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['logincheck:Admin']], function () {
        Route::resource('Admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:Pengelola']], function () {
        Route::resource('Pengelola', PengelolaController::class);
    });
    Route::prefix('kendaraan')->group(function () {
        Route::get('/view', [KendaraanController::class, 'index'])->name('kendaraan.view');
        Route::get('/add', [KendaraanController::class, 'add'])->name('kendaraan.add');
        Route::post('/store', [KendaraanController::class, 'store'])->name('kendaraan.store');
        Route::get('/edit/{id}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
        Route::post('/update/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update');
        Route::get('/hapus/{id}', [KendaraanController::class, 'delete'])->name('kendaraan.delete');
    });
    Route::prefix('pengemudi')->group(function () {
        Route::get('/view', [PengemudiController::class, 'index'])->name('pengemudi.view');
        Route::get('/add', [PengemudiController::class, 'add'])->name('pengemudi.add');
        Route::post('/store', [PengemudiController::class, 'store'])->name('pengemudi.store');
        Route::get('/edit/{id}', [PengemudiController::class, 'edit'])->name('pengemudi.edit');
        Route::post('/update/{id}', [PengemudiController::class, 'update'])->name('pengemudi.update');
        Route::get('/hapus/{id}', [PengemudiController::class, 'delete'])->name('pengemudi.delete');
    });
    Route::prefix('service')->group(function () {
        Route::get('/view', [ServiceController::class, 'index'])->name('service.view');
        Route::get('/add', [ServiceController::class, 'add'])->name('service.add');
        Route::post('/store', [ServiceController::class, 'store'])->name('service.store');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
        Route::post('/update/{id}', [ServiceController::class, 'update'])->name('service.update');
        Route::get('/hapus/{id}', [ServiceController::class, 'delete'])->name('service.delete');
    });
    Route::prefix('pesan')->group(function () {
        Route::get('/view', [PesanController::class, 'index'])->name('pesan.view');
        Route::get('/add', [PesanController::class, 'add'])->name('pesan.add');
        Route::post('/store', [PesanController::class, 'store'])->name('pesan.store');
        Route::get('/edit/{id}', [PesanController::class, 'edit'])->name('pesan.edit');
        Route::post('/update/{id}', [PesanController::class, 'update'])->name('pesan.update');
        Route::get('/hapus/{id}', [PesanController::class, 'delete'])->name('pesan.delete');
        Route::get('/excel-export', [PesanController::class, 'export'])->name('pesan.export');
    });
    Route::get('/viewpengelola', [PengelolaController::class, 'pesan'])->name('pengelolapesan.view');
    Route::get('/editpengelola/{id}', [PengelolaController::class, 'editpesan'])->name('pengelolapesan.edit');
    Route::post('/updatepengelola/{id}', [PengelolaController::class, 'updatepesan'])->name('pengelolapesan.update');
});
