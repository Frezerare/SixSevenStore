<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed tabel users.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'testuser',
                'email' => 'test@example.com',
                'password' => Hash::make('password'),
                'foto_profil' => null,
                'username_roblox' => 'TestRobloxUser',
            ],
            [
                'username' => 'budi_santoso',
                'email' => 'budi@example.com',
                'password' => Hash::make('password'),
                'foto_profil' => null,
                'username_roblox' => 'BudiRBLX',
            ],
            [
                'username' => 'siti_aminah',
                'email' => 'siti@example.com',
                'password' => Hash::make('password'),
                'foto_profil' => null,
                'username_roblox' => 'SitiPlaysRoblox',
            ],
            [
                'username' => 'rendi_pratama',
                'email' => 'rendi@example.com',
                'password' => Hash::make('password'),
                'foto_profil' => null,
                'username_roblox' => 'RendiXR',
            ],
            [
                'username' => 'dewi_lestari',
                'email' => 'dewi@example.com',
                'password' => Hash::make('password'),
                'foto_profil' => null,
                'username_roblox' => 'DewiL_RBX',
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user + [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}