<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Project extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslations;

    const CATEGORIES = [
        'apartment' => 'Mənzil',
        'office' => 'Ofis',
        'luxury' => 'Lüks',
        'other' => 'Digər',
    ];

    protected $fillable = [
        'title',
        'slug',
        'category',
        'short_desc',
        'description',
        'is_featured',
        'order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public $translatable = [
        'title',
        'short_desc',
        'description',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp']);

        $this->addMediaCollection('gallery')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp']);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(400)
            ->height(300)
            ->sharpen(10);

        $this->addMediaConversion('large')
            ->width(1200)
            ->height(800)
            ->sharpen(10);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at');
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function getCategoryLabelAttribute()
    {
        return self::CATEGORIES[$this->category] ?? $this->category;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}