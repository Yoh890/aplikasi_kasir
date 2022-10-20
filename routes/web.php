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
Route::middleware(['auth'])->group(function(){
// Route::get('/', function () {
//     return view('welcome');
// });


////->Bagian Admin
Route::get('/', [AdminController::class,'index']);
Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/tambah', [AdminController::class,'tambah']);
Route::POST('/admin/simpan', [AdminController::class,'simpan']);
Route::get('/admin/hapus/{id}', [AdminController::class,'hapus']);
Route::get('/admin/ubah/{id}', [AdminController::class,'ubah']);
Route::put('/admin/update/{id}', [AdminController::class,'update']);

////->Bagian Barang 
Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/tambah', [BarangController::class,'tambah']);
Route::POST('/barang/simpan', [BarangController::class,'simpan']);
Route::get('/barang/hapus/{id}', [BarangController::class,'hapus']);
Route::get('/barang/ubah/{id}', [BarangController::class,'ubah']);
Route::put('/barang/update/{id}', [BarangController::class,'update']);

////->Bagian Jenis 
Route::get('/jenis', [JenisController::class,'index']);
Route::get('/jenis/tambah', [JenisController::class,'tambah']);
Route::POST('/jenis/simpan', [JenisController::class,'simpan']);
Route::get('/jenis/hapus/{id}', [JenisController::class,'hapus']);
Route::get('/jenis/ubah/{id}', [JenisController::class,'ubah']);
Route::put('/jenis/update/{id}', [JenisController::class,'update']);

////->Bagian Suplier
Route::get('/supplier', [SupplierController::class,'index']);
Route::get('/supplier/tambah', [SupplierController::class,'tambah']);
Route::POST('/supplier/simpan', [SupplierController::class,'simpan']);
Route::get('/supplier/hapus/{id}', [SupplierController::class,'hapus']);
Route::get('/supplier/ubah/{id}', [SupplierController::class,'ubah']);
Route::put('/supplier/update/{id}', [SupplierController::class,'update']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
