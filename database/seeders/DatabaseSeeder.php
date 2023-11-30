<?php

namespace Database\Seeders;

use App\Models\Produk;
use App\Models\Harga;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Produk::create([
            'nama_produk' => 'Wortel',
            'jenis_produk' => '3',
            'stok_produk' => 200,
            'image' => 'produks/wortel.png'
        ]);
        Produk::create([
            'nama_produk' => 'Kentang',
            'jenis_produk' => '3',
            'stok_produk' => 230,
            'image' => 'produks/kentang.png'
        ]);
        Produk::create([
            'nama_produk' => 'Tomat',
            'jenis_produk' => '2',
            'stok_produk' => 240,
            'image' => 'produks/tomat.png'
        ]);
        Produk::create([
            'nama_produk' => 'Kol',
            'jenis_produk' => '1',
            'stok_produk' => 200,
            'image' => 'produks/sayur-kol.png'
        ]);

        Harga::create([
            'produk_id' => 1,
            'nominal_harga' => 5000,
        ]);
        Harga::create([
            'produk_id' => 2,
            'nominal_harga' => 6000,
        ]);
        Harga::create([
            'produk_id' => 3,
            'nominal_harga' => 7000,
        ]);
        Harga::create([
            'produk_id' => 4,
            'nominal_harga' => 8000,
        ]);
    }
}
