<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi_detail;
use Illuminate\Http\Request;

class TransaksiDetailController extends Controller
{
    public function index($id){
        $transaksidetail =DB::table('tbl_transaksi_detail')
        ->join('tbl_barang', 'tbl_barang.id_barang', '=', 'tbl_transaksi_detail.id_barang')
        ->where('id_transaksi',$id)
        ->get();

        //dd($transaksi);
        return view('transaksidetail.index',compact('transaksidetail'));
    }

    public function tambah()
    {
        $admin = DB::table("users")->get();
        $barang = DB::table("tbl_barang")
        ->get();
        $adm = Admin::all();
        return  view('transaksidetail.tambah', compact(['barang','adm','admin']));
    }
}
