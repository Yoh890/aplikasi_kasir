<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


////->Bagian Admin
use App\Http\Controllers\AdminController;
////->Bagian barang
use App\Http\Controllers\BarangController;
////->Bagian jenis
use App\Http\Controllers\JenisController;
////->Bagian suplier
use App\Http\Controllers\SupplierController;
////->Bagian transaksi
use App\Http\Controllers\TransaksiController;
////->Bagian transaksi detail
use App\Http\Controllers\TransaksiDetailController;

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
Route::get('/', [AdminController::class,'lp'])->name('index');
Route::middleware(['auth'])->group(function(){
// Route::get('/', function () {
//     return view('welcome');
// });


////->Bagian Admin
Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
Route::get('/admin', [AdminController::class,'index'])->name('adm');
Route::get('/admin/tambah', [AdminController::class,'tambah'])->name('adm_tambah');
Route::POST('/admin/simpan', [AdminController::class,'simpan'])->name('adm_simpan');
Route::get('/admin/hapus/{id}', [AdminController::class,'hapus'])->name('adm_hapus');
Route::get('/admin/ubah/{id}', [AdminController::class,'ubah'])->name('adm_ubah');
Route::put('/admin/update/{id}', [AdminController::class,'update'])->name('adm_update');

////->Bagian Barang
Route::get('/barang', [BarangController::class,'index'])->name('brg');
Route::get('/barang/tambah', [BarangController::class,'tambah'])->name('brg_tambah');
Route::POST('/barang/simpan', [BarangController::class,'simpan'])->name('brg_simpan');
Route::get('/barang/hapus/{id}', [BarangController::class,'hapus'])->name('brg_hapus');
Route::get('/barang/ubah/{id}', [BarangController::class,'ubah'])->name('brg_ubah');
Route::put('/barang/update/{id}', [BarangController::class,'update'])->name('brg_update');

////->Bagian Jenis
Route::get('/jenis', [JenisController::class,'index'])->name('jns');
Route::get('/jenis/tambah', [JenisController::class,'tambah'])->name('jns_tambah');
Route::POST('/jenis/simpan', [JenisController::class,'simpan'])->name('jns_simpan');
Route::get('/jenis/hapus/{id}', [JenisController::class,'hapus'])->name('jns_hapus');
Route::get('/jenis/ubah/{id}', [JenisController::class,'ubah'])->name('jns_ubah');
Route::put('/jenis/update/{id}', [JenisController::class,'update'])->name('jns_update');

////->Bagian Suplier
Route::get('/supplier', [SupplierController::class,'index'])->name('sup');
Route::get('/supplier/tambah', [SupplierController::class,'tambah'])->name('sup_tambah');
Route::POST('/supplier/simpan', [SupplierController::class,'simpan'])->name('sup_simpan');
Route::get('/supplier/hapus/{id}', [SupplierController::class,'hapus'])->name('sup_hapus');
Route::get('/supplier/ubah/{id}', [SupplierController::class,'ubah'])->name('sup_ubah');
Route::put('/supplier/update/{id}', [SupplierController::class,'update'])->name('sup_update');

////->Bagian Transaksi
Route::get('/transaksi', [TransaksiController::class,'index'])->name('trk');
Route::get('/transaksi/tambah', [TransaksiController::class,'tambah'])->name('trk_tambah');
Route::POST('/transaksi/simpan', [TransaksiController::class,'simpan'])->name('trk_simpan');
Route::get('/transaksi/hapus/{id}', [TransaksiController::class,'hapus'])->name('trk_hapus');
Route::get('/transaksi/ubah/{id}', [TransaksiController::class,'ubah'])->name('trk_ubah');
Route::put('/transaksi/update/{id}', [TransaksiController::class,'update'])->name('trk_update');

////->Bagian Transaksi Detail
Route::get('/transaksidetail/detail/{id}', [TransaksiDetailController::class,'index']);
Route::get('/transaksidetail/tambah', [TransaksiDetailController::class,'tambah']);
// Route::POST('/transaksidetail/simpan', [TransaksiDetailController::class,'simpan']);
// Route::get('/transaksidetail/hapus/{id}', [TransaksiDetailController::class,'hapus']);
// Route::get('/transaksidetail/ubah/{id}', [TransaksiDetailController::class,'ubah']);
// Route::put('/transaksidetail/update/{id}', [TransaksiDetailController::class,'update']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
