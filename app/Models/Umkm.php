<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_usaha',
        'nama_pemilik',
        'no_hp',
        'alamat',
        'jenis_usaha',
        'produk_dijual',
    ];

    public function kehadirans(): HasMany
    {
        return $this->hasMany(Kehadiran::class);
    }

    /**
     * Cek apakah UMKM ini sudah absen hari ini.
     */
    public function sudahAbsenHariIni(): bool
    {
        return $this->kehadirans()
            ->whereDate('tanggal', now()->toDateString())
            ->exists();
    }
}
