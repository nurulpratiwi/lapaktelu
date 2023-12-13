<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kondisi extends Model
{
    use HasFactory;
    protected $table = 'kondisis';
    protected $fillable = ['name'];
    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
