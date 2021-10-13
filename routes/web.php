<?php

use App\Http\Controllers\PengadaanBarangController;
use App\Http\Controllers\SupplierBarangController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('supplier')->group(function (){
    Route::get('/profile', [SupplierController::class, 'index'])->name('supplier.profile');
});

Route::prefix('supplier/barang')->group(function (){
    Route::get('/profile', [SupplierBarangController::class, 'index'])->name('supplier.barang.profile');
});

Route::prefix('warek/pengadaanBarang')->group(function (){
    Route::get('/index', [PengadaanBarangController::class, 'index'])->name('warek.pengadaanBarang.index');
    Route::get('/pengumumanPengadaan', [PengadaanBarangController::class, 'pengumumanPengadaan'])->name('warek.pengadaanBarang.pengumumanPengadaan');
    Route::get('/pesertaPengadaan', [PengadaanBarangController::class, 'pesertaPengadaan'])->name('warek.pengadaanBarang.pesertaPengadaan');
    Route::get('/detailPesertaPengadaan', [PengadaanBarangController::class, 'detailPesertaPengadaan'])->name('warek.pengadaanBarang.detailPesertaPengadaan');
    Route::get('/hasilEvaluasi', [PengadaanBarangController::class, 'hasilEvaluasi'])->name('warek.pengadaanBarang.hasilEvaluasi');
});
