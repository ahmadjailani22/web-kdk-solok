<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_usaha');
            $table->string('nama_pemilik');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('jenis_usaha'); // kategori: kuliner, kerajinan, fashion, dll
            $table->text('produk_dijual'); // deskripsi produk yang dijual
            $table->timestamps();

            // mempercepat pencarian nama usaha saat scan QR
            $table->index('nama_usaha');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
