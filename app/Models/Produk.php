<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kondisi;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';

    protected $fillable = ['nama', 'deskripsi', 'harga', 'kategori_id', 'kondisi_id', 'user_id', 'gambar'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function kondisi(){
        return $this->belongsTo(Kondisi::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
