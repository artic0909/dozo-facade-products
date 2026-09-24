<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSlide extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'name',
        'eyebrow',
        'headline',
        'desc',
        'cta_text',
        'cta_link',
        'image',
        'is_active',
    ];
}
