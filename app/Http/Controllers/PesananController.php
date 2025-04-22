<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    // Tampilkan form create
    public function create()
    {
        return view('pesanan.create');
    }

    // Simpan pesanan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'menu' => 'required',
            'jumlah' => 'required|integer'
        ]);

        Pesanan::create($request->all());

        return redirect('/')->with('success', 'Pesanan berhasil ditambahkan!');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('pesanan.edit', compact('pesanan'));
    }

    // Update pesanan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'menu' => 'required',
            'jumlah' => 'required|integer'
        ]);

        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update($request->all());

        return redirect('/')->with('success', 'Pesanan berhasil diupdate!');
    }
}
