<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kondisi;
use App\Models\Kategori;
use App\Models\jualModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JualController extends Controller
{
    public function index()
    {
        return view('jual');
    }

    public function create(){
        $kategoris = Kategori::all();
        $kondisis = Kondisi::all();

        return view('jual', compact('kategoris', 'kondisis'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'kategori' => 'required|exists:kategoris,id',
            'kondisi' => 'required|exists:kondisis,id',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        $product = new Produk([
            'nama' => $request->get('nama'),
            'deskripsi' => $request->get('deskripsi'),
            'harga' => $request->get('harga'),
            'kategori_id' => $request->get('kategori'),
            'kondisi_id' => $request->get('kondisi'),
            'user_id' => Auth::id(), // Jika menggunakan autentikasi
            'gambar' => $imageName,
        ]);

        $product->save();

        return redirect('/jual')->with('success', 'Produk berhasil diupload!');
    }
}
