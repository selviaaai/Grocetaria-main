<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pemesanans()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function pegawais()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
