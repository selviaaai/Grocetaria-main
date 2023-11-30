<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function produks()
    {
        return $this->belongsToMany(Produk::class, 'detail_pemesanans')->withPivot('jumlah', 'harga', 'subtotal');
    }

    public function konsumens()
    {
        return $this->belongsTo(Konsumen::class);
    }

    public function pengirimans()
    {
        return $this->belongsTo(Pengiriman::class);
    }

    public function pembayarans()
    {
        return $this->hasOne(Pembayaran::class);
    }
}
