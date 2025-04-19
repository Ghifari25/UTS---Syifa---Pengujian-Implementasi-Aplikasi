<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulasiController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if ($email === 'user@example.com' && $password === '1234') {
            return redirect('/pesan');
        } else {
            return back()->with('error', 'Login gagal, cek email atau password.');
        }
    }

    public function showPesanForm()
    {
        return view('pesanan');
    }

    public function prosesPesanan(Request $request)
    {
        $menu = $request->input('menu');
        $harga = (int) $request->input('harga');
        $jumlah = (int) $request->input('jumlah');
        $total = $harga * $jumlah;

        return view('pesanan', [
            'menu' => $menu,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'total' => $total,
            'hasil' => true
        ]);
    }
}
