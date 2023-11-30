<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('utama.beranda',[
            'produks' => Produk::all()
        ]);
    }

    public function toko()
    {
        return view('utama.toko',[
            'produks' => Produk::all()
        ]);
    }

    public function about()
    {
        return view('utama.tentang');
    }

    public function kontak()
    {
        return view('utama.kontak');
    }
}
