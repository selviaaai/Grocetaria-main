<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pemesanans()
    {
        return $this->belongsToMany(Pemesanan::class, 'detail_pemesanans')->withPivot('jumlah', 'harga', 'subtotal');
    }

    public function hargas()
    {
        return $this->hasOne(Harga::class);
    }

}
