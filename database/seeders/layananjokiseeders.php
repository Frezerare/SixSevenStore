<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananJokiSeeder extends Seeder
{
    /**
     * Seed tabel layanan_jokis.
     * Membutuhkan GameSeeder untuk dijalankan lebih dahulu.
     */
    public function run(): void
    {
        $gameIds = DB::table('games')->pluck('id', 'nama_game');

        $layanan = [
            [
                'game' => 'Adopt Me!',
                'gambar_layanan' => 'layanan/adopt-me-pet.jpg',
                'harga_joki' => 25000,
                'keterangan_joki' => 'Joki hatch telur & farming koin selama 3 jam.',
            ],
            [
                'game' => 'Blox Fruits',
                'gambar_layanan' => 'layanan/blox-fruits-leveling.jpg',
                'harga_joki' => 40000,
                'keterangan_joki' => 'Joki leveling cepat hingga level 2000+.',
            ],
            [
                'game' => 'Blox Fruits',
                'gambar_layanan' => 'layanan/blox-fruits-raid.jpg',
                'harga_joki' => 30000,
                'keterangan_joki' => 'Joki farming fragment melalui raid boss.',
            ],
            [
                'game' => 'Pet Simulator X',
                'gambar_layanan' => 'layanan/psx-huge-pet.jpg',
                'harga_joki' => 50000,
                'keterangan_joki' => 'Joki farming coin & exclusive huge pet.',
            ],
            [
                'game' => 'Grow a Garden',
                'gambar_layanan' => 'layanan/gag-harvest.jpg',
                'harga_joki' => 20000,
                'keterangan_joki' => 'Joki panen & upgrade lahan kebun.',
            ],
        ];

        foreach ($layanan as $item) {
            DB::table('layanan_jokis')->insert([
                'game_id' => $gameIds[$item['game']],
                'gambar_layanan' => $item['gambar_layanan'],
                'harga_joki' => $item['harga_joki'],
                'keterangan_joki' => $item['keterangan_joki'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}