<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Package extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name',
        'slug',
        'price_decimal',
        'features',
        'is_featured',
        'order',
    ];

    protected $casts = [
        'price_decimal' => 'decimal:2',
        'features' => 'array',
        'is_featured' => 'boolean',
    ];

    public $translatable = [
        'name',
        'features',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}