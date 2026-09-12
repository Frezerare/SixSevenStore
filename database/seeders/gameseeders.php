<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Seed tabel games.
     */
    public function run(): void
    {
        $games = [
            [
                'nama_game' => 'Adopt Me!',
                'gambar_game' => 'games/adopt-me.jpg',
                'status_layanan' => true,
            ],
            [
                'nama_game' => 'Blox Fruits',
                'gambar_game' => 'games/blox-fruits.jpg',
                'status_layanan' => true,
            ],
            [
                'nama_game' => 'Pet Simulator X',
                'gambar_game' => 'games/pet-simulator-x.jpg',
                'status_layanan' => true,
            ],
            [
                'nama_game' => 'Brookhaven RP',
                'gambar_game' => 'games/brookhaven.jpg',
                'status_layanan' => false,
            ],
            [
                'nama_game' => 'Grow a Garden',
                'gambar_game' => 'games/grow-a-garden.jpg',
                'status_layanan' => true,
            ],
        ];

        foreach ($games as $game) {
            DB::table('games')->insert($game + [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}