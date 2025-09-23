<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public $translatable = [
        'title',
        'content',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}