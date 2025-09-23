<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslations;

    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLISHED = 'published';

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'published_at',
        'status',
        'tags',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'tags' => 'array',
    ];

    public $translatable = [
        'title',
        'excerpt',
        'content',
        'tags',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image')
            ->singleFile()
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

    public function scopePublished($query)
    {
        return $query->where('status', self::STATUS_PUBLISHED)
                    ->where('published_at', '<=', now());
    }

    public function scopeRecent($query, $limit = 3)
    {
        return $query->published()
                    ->orderBy('published_at', 'desc')
                    ->limit($limit);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}