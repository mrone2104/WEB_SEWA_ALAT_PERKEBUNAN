<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['produk'] = Produk::paginate(3);
        $data['judul'] = "Data Produk";
        return view('produk_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data['list_sp'] = ['selesai', 'pending', 'dibatalakan'];
        return view('produk_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'Tanggal' => 'required',
            'Pengguna_ID' => 'required',
            'Total_Harga' => 'required',
            'Status' => 'required',
        ]);

        $produk = new \App\Models\Produk();
        $produk->Tanggal = $request->Tanggal;
        $produk->Pengguna_ID  = $request->Pengguna_ID;
        $produk->Total_Harga = $request->Total_Harga;
        $produk->Status = $request->Status;
        $produk->save();
        return back()->with('pesan', 'Data sudah Disimpan');
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
        $data['produk'] = \App\Models\Produk::findOrFail($id);
        $data['list_sp'] = ['selesai', 'pending', 'dibatalakan'];
        return view('produk_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string  $id)
    {
        $request->validate([
            'Tanggal' => 'required',
            'Pengguna_ID' => 'required',
            'Total_Harga' => 'required',
            'Status' => 'required',
        ]);

        $produk = \App\Models\Produk::findOrFail($id);
        $produk->Tanggal = $request->Tanggal;
        $produk->Pengguna_ID  = $request->Pengguna_ID;
        $produk->Total_Harga = $request->Total_Harga;
        $produk->Status = $request->Status;
        $produk->save();

        return redirect('/produk')->with('pesan', 'Data sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = \App\Models\Produk::findOrFail($id);
        $produk->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
    public function laporan()
    {
        $data['produk'] = \App\Models\Produk::all();
        $data['judul'] = 'Laporan Data Produk';
        return view('produk_laporan', $data);
    }
}
