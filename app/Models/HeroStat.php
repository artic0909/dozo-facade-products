<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'number',
        'label',
    ];
}
