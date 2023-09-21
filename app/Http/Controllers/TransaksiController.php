<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi =DB::table('tbl_transaksi')
        ->get();
        $dt = Transaksi::with('admin')->get();

        //dd($transaksi);
        return  view('transaksi.index',compact('transaksi'));
    }


    public function tambah()
    {
        $admin = DB::table("users")->get();
        $barang = DB::table("tbl_barang")
        ->get();
        $adm = Admin::all();
        return  view('transaksi.tambah', compact(['barang','adm','admin']));
    }


    public function simpan(Request $request)
{
    $user = Auth::user();

    // Simpan ke transaksi
    $transaksi = Transaksi::create([
        'id_admin' => $user->id,
        'transaksi_tanggal' => $request->transaksi_tanggal,
        'transaksi_nonota' => $request->transaksi_nonota,
        'transaksi_status' => $request->transaksi_status
    ]);

    // Simpan ke transaksi detail
    $transaksiDetail = Transaksi_detail::create([
        'id_transaksi' => $transaksi->id_transaksi, // Menggunakan ID transaksi yang baru saja disimpan
        'id_barang' => $request->id_barang,
        'transaksi_jenis' => $request->transaksi_jenis,
        'transaksi_harga' => $request->transaksi_harga,
        'transaksi_jumlah' => $request->transaksi_jumlah,
        'transaksi_detail_status' => $request->transaksi_detail_status
    ]);

    return redirect('transaksi');
}



     public function ubah($id)
    {
        $transaksi = Transaksi::find($id);
        return  view('transaksi.edit',compact(['transaksi']));
    }


     public function update($id,request $request)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->except('token','_method'));
        return  redirect('transaksi');

    }


    public function hapus($id)
    {
         $hapus = Transaksi::find($id);
         $hapus->delete();
        return  redirect('transaksi');
    }
}
