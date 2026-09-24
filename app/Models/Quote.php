<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'product_interest',
        'city',
        'message',
        'status',
        'estimated_value',
    ];
}
