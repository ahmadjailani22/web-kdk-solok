<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kehadiran extends Model
{
    use HasFactory;

    protected $fillable = [
        'umkm_id',
        'tanggal',
        'waktu',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'waktu' => 'datetime',
    ];

    public function umkm(): BelongsTo
    {
        return $this->belongsTo(Umkm::class);
    }
}
