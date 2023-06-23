<?php

namespace App\Http\Controllers;

use App\Models\Tbarang;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function cetakData()
    {
        $data = Tbarang::get();
        return view('page.cetak', ['data' => $data]);
        // $cetak_data = Tbarang::get();
        // return view('barang.cetak', compact('cetak_data'));
    }
}
