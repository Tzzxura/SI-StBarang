<?php

namespace App\Http\Controllers;

// use App\Models\Barang;
use App\Models\Tbarang;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        if (strlen($katakunci)) {
            $data_barang = Tbarang::where('kode_barang', 'like', "%$katakunci%")
                ->orWhere('nama_barang', 'like', "%$katakunci%")
                ->orWhere('kategori_barang', 'like', "%$katakunci%")
                ->paginate(4);
        } else {
            $data_barang = Tbarang::paginate(4);
        }
        return view('barang.index', compact('data_barang'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');   //
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->session()->flash('kode_barang', kode_barang);
        Session::flash('kode_barang', $request->kode_barang);
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('kategori_barang', $request->kategori_barang);
        Session::flash('harga', $request->harga);
        Session::flash('jumlah', $request->jumlah);

        $request->validate([
            'kode_barang' => 'required|numeric|unique:tbarangs,kode_barang',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
        ], [
            'kode_barang.required' => 'KODE BARANG Wajib Diisi !',
            'kode_barang.numeric' => 'KODE BARANG Harus Angka !',
            'kode_barang.unique' => 'KODE BARANG SUDAH TERDAFTAR !',
            'nama_barang.required' => 'NAMA BARANG Wajib Diisi !',
            'kategori_barang.required' => 'KATEGORI BARANG Wajib Diisi !',
            'harga.required' => 'HARGA BARANG Wajib Diisi !',
            'jumlah.required' => 'JUMLAH BARANG Wajib Diisi !',
        ]);
        $data = [
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategori_barang' => $request->kategori_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];
        Tbarang::create($data);
        return redirect()->route('barang.index')->with('toast_success', 'Data berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Tbarang::where('kode_barang', $id)->first();
        return view('barang.edit')->with('data', $barang); //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_barang' => 'required|numeric',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
        ], [
            'kode_barang.required' => 'KODE BARANG Wajib Diisi !',
            'kode_barang.numeric' => 'KODE BARANG Harus Angka !',
            'nama_barang.required' => 'NAMA BARANG Wajib Diisi !',
            'kategori_barang.required' => 'KATEGORI BARANG Wajib Diisi !',
            'harga.required' => 'HARGA BARANG Wajib Diisi !',
            'jumlah.required' => 'JUMLAH BARANG Wajib Diisi !',
        ]);
        $data = [
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategori_barang' => $request->kategori_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];
        Tbarang::where('kode_barang', $id)->update($data);
        return redirect()->route('barang.index')->with('toast_success', 'Data berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tbarang::where('kode_barang', $id)->delete();
        return redirect()->route('barang.index')->with('toast_success', 'Data berhasil di hapus!');
    }
}
