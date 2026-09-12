<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi')->unique();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('layanan_id')->constrained('layanan_jokis')->cascadeOnDelete();
            $table->foreignId('admin_id')->nullable()->constrained('admins')->nullOnDelete();
            $table->foreignId('joki_id')->nullable()->constrained('tim_jokis')->nullOnDelete();
            $table->string('username_roblox_tujuan');
            $table->string('password_roblox_tujuan');
            $table->text('deskripsi_joki')->nullable();
            $table->decimal('nominal', 12, 2);
            $table->enum('status_transaksi', [
                'menunggu_pembayaran',
                'diproses_admin',
                'dikerjakan_joki',
                'selesai',
                'dibatalkan',
            ])->default('menunggu_pembayaran');
            $table->timestamp('waktu_transaksi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};