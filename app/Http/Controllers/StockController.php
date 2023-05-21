<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function masuk()
    {
        return view('back.masuk');
    }
    public function dashboard()
    {
        return view('back.dashboard');
    }
    public function keluar()
    {
        return view('back.keluar');
    }
    public function tambah_barang()
    {
        return view('back.tambah_barang');
    }
}
