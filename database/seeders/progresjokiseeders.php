<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgresJokiSeeder extends Seeder
{
    /**
     * Seed tabel progres_jokis.
     * Membutuhkan TransaksiSeeder untuk dijalankan lebih dahulu.
     * Hanya transaksi yang sudah memiliki joki_id (ditugaskan) yang mendapat progres.
     */
    public function run(): void
    {
        $transaksiList = DB::table('transaksis')
            ->whereNotNull('joki_id')
            ->get(['id', 'joki_id', 'status_transaksi']);

        $tahapanSelesai = [
            'Menerima tugas dari admin',
            'Login ke akun Roblox tujuan',
            'Mengerjakan pesanan sesuai deskripsi',
            'Pesanan selesai dikerjakan',
        ];

        $tahapanBerjalan = [
            'Menerima tugas dari admin',
            'Login ke akun Roblox tujuan',
        ];

        foreach ($transaksiList as $transaksi) {
            $tahapan = $transaksi->status_transaksi === 'selesai' ? $tahapanSelesai : $tahapanBerjalan;

            foreach ($tahapan as $index => $tahap) {
                DB::table('progres_jokis')->insert([
                    'transaksi_id' => $transaksi->id,
                    'joki_id' => $transaksi->joki_id,
                    'tahap_progres' => $tahap,
                    'keterangan' => null,
                    'waktu_update' => now()->subHours(count($tahapan) - $index),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}