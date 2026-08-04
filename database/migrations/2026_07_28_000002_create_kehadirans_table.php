<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kehadirans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('umkm_id')->constrained('umkms')->cascadeOnDelete();
            $table->date('tanggal');   // tanggal kunjungan (untuk cek duplikat harian)
            $table->dateTime('waktu'); // jam pasti kunjungan
            $table->timestamps();

            // satu UMKM hanya boleh absen 1x per hari
            $table->unique(['umkm_id', 'tanggal']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kehadirans');
    }
};
