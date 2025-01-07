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
            'Pengguna_ID ' => 'required',
            'Total_Harga' => 'required',
            'Status' => 'required'
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
