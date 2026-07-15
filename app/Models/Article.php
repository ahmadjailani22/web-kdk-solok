<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'thumbnail',
        'category', 'published_at', 'is_published',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}