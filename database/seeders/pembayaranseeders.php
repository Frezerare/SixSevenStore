<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    /**
     * Seed tabel pembayarans.
     * Membutuhkan TransaksiSeeder untuk dijalankan lebih dahulu.
     */
    public function run(): void
    {
        $metodePembayaran = ['DANA', 'GoPay', 'QRIS', 'OVO', 'ShopeePay'];

        $transaksiList = DB::table('transaksis')->orderBy('id')->get(['id', 'status_transaksi']);

        foreach ($transaksiList as $index => $transaksi) {
            $statusPembayaran = match ($transaksi->status_transaksi) {
                'menunggu_pembayaran' => 'pending',
                'dibatalkan' => 'gagal',
                default => 'berhasil',
            };

            DB::table('pembayarans')->insert([
                'transaksi_id' => $transaksi->id,
                'metode_pembayaran' => $metodePembayaran[$index % count($metodePembayaran)],
                'status_pembayaran' => $statusPembayaran,
                'waktu_bayar' => $statusPembayaran === 'pending' ? null : now()->subHours($index + 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}