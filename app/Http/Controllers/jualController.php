<?php

namespace App\Http\Controllers;

use App\Models\jualModel;
use Illuminate\Http\Request;

class jualController extends Controller
{
    public function index()
    {
        return view('jual');
    }

    public function store(Request $request)
    {
        $prod = new jualModel;
        $prod->nama = $request->nama;
        $prod->deskripsi = $request->deskripsi;
        $prod->kategori = $request->kategori;
        $prod->harga = $request->harga;
        $prod->kondisi = $request->kondisi;
        $prod->fotoOrvideo = '';
        $prod->save();
        return redirect('/jual')->with('msg', 'Tambah berhasil');
    }
}
