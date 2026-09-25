<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'category_id',
        'category',
        'theme',
        'image',
        'short_desc',
        'material_grade',
        'finish_options',
        'acoustic_rating',
        'wind_load',
        'is_featured',
        'order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'order' => 'integer',
        'category_id' => 'integer',
    ];

    /**
     * Auto generate slug on save if empty.
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            } else {
                $product->slug = Str::slug($product->slug);
            }
        });
    }

    /**
     * Relationship to ProductCategory.
     */
    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    /**
     * Get display category name.
     */
    public function getCategoryNameAttribute()
    {
        return $this->productCategory->name ?? $this->category ?? 'General';
    }
}
