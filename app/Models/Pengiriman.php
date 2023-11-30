<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
