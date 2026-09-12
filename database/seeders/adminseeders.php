<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Seed tabel admins.
     */
    public function run(): void
    {
        $admins = [
            [
                'nama_admin' => 'Admin Six Seven Store',
                'email' => 'admin@sixsevenstore.com',
                'password' => Hash::make('admin123'),
            ],
            [
                'nama_admin' => 'Co-Admin Toni',
                'email' => 'toni.admin@sixsevenstore.com',
                'password' => Hash::make('admin123'),
            ],
        ];

        foreach ($admins as $admin) {
            DB::table('admins')->insert($admin + [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}