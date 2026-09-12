<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransaksiSeeder extends Seeder
{
    /**
     * Seed tabel transaksis.
     * Membutuhkan UserSeeder, LayananJokiSeeder, AdminSeeder, dan TimJokiSeeder
     * untuk dijalankan lebih dahulu.
     */
    public function run(): void
    {
        $userIds = DB::table('users')->pluck('id')->all();
        $layananIds = DB::table('layanan_jokis')->pluck('id')->all();
        $adminIds = DB::table('admins')->pluck('id')->all();
        $jokiIds = DB::table('tim_jokis')->pluck('id')->all();

        $transaksi = [
            [
                'user_id' => $userIds[0],
                'layanan_id' => $layananIds[0],
                'admin_id' => null,
                'joki_id' => null,
                'username_roblox_tujuan' => 'TestRobloxUser',
                'password_roblox_tujuan' => 'rbx_pass_123',
                'deskripsi_joki' => 'Tolong hatch semua telur legendary yang tersisa.',
                'nominal' => 25000,
                'status_transaksi' => 'menunggu_pembayaran',
                'waktu_transaksi' => null,
            ],
            [
                'user_id' => $userIds[1],
                'layanan_id' => $layananIds[1],
                'admin_id' => $adminIds[0],
                'joki_id' => null,
                'username_roblox_tujuan' => 'BudiRBLX',
                'password_roblox_tujuan' => 'rbx_pass_456',
                'deskripsi_joki' => 'Fokus leveling sampai level 1500 dulu.',
                'nominal' => 40000,
                'status_transaksi' => 'diproses_admin',
                'waktu_transaksi' => now()->subHours(3),
            ],
            [
                'user_id' => $userIds[2],
                'layanan_id' => $layananIds[2],
                'admin_id' => $adminIds[0],
                'joki_id' => $jokiIds[0],
                'username_roblox_tujuan' => 'SitiPlaysRoblox',
                'password_roblox_tujuan' => 'rbx_pass_789',
                'deskripsi_joki' => 'Farming fragment sampai cukup untuk awaken.',
                'nominal' => 30000,
                'status_transaksi' => 'dikerjakan_joki',
                'waktu_transaksi' => now()->subDay(),
            ],
            [
                'user_id' => $userIds[3],
                'layanan_id' => $layananIds[3],
                'admin_id' => $adminIds[1],
                'joki_id' => $jokiIds[1],
                'username_roblox_tujuan' => 'RendiXR',
                'password_roblox_tujuan' => 'rbx_pass_321',
                'deskripsi_joki' => 'Farming coin sampai bisa beli huge pet event.',
                'nominal' => 50000,
                'status_transaksi' => 'selesai',
                'waktu_transaksi' => now()->subDays(2),
            ],
            [
                'user_id' => $userIds[4],
                'layanan_id' => $layananIds[4],
                'admin_id' => $adminIds[0],
                'joki_id' => null,
                'username_roblox_tujuan' => 'DewiL_RBX',
                'password_roblox_tujuan' => 'rbx_pass_654',
                'deskripsi_joki' => 'Batal karena salah pilih layanan.',
                'nominal' => 20000,
                'status_transaksi' => 'dibatalkan',
                'waktu_transaksi' => now()->subDays(4),
            ],
        ];

        foreach ($transaksi as $item) {
            DB::table('transaksis')->insert($item + [
                'kode_transaksi' => 'TRX-' . strtoupper(Str::random(8)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}