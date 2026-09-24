<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'eyebrow',
        'desc',
        'cta_text',
        'cta_link',
        'images',
        'badges',
        'order',
    ];

    protected $casts = [
        'images' => 'array',
        'badges' => 'array',
        'order' => 'integer',
    ];
}
