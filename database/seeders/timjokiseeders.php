<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TimJokiSeeder extends Seeder
{
    /**
     * Seed tabel tim_jokis.
     */
    public function run(): void
    {
        $timJoki = [
            [
                'nama_joki' => 'Joki Aldi',
                'email' => 'aldi.joki@sixsevenstore.com',
                'password' => Hash::make('joki123'),
                'status_aktif' => true,
            ],
            [
                'nama_joki' => 'Joki Bella',
                'email' => 'bella.joki@sixsevenstore.com',
                'password' => Hash::make('joki123'),
                'status_aktif' => true,
            ],
            [
                'nama_joki' => 'Joki Candra',
                'email' => 'candra.joki@sixsevenstore.com',
                'password' => Hash::make('joki123'),
                'status_aktif' => false,
            ],
        ];

        foreach ($timJoki as $joki) {
            DB::table('tim_jokis')->insert($joki + [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}