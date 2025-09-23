<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Setting extends Model implements HasMedia
{
    use InteractsWithMedia, HasTranslations;

    protected $fillable = [
        'site_name',
        'phones',
        'address',
        'email',
        'social_links',
        'hero_headline',
        'hero_subtitle',
        'hero_cta_label',
        'seo_meta',
        'map_embed_url',
    ];

    protected $casts = [
        'phones' => 'array',
        'social_links' => 'array',
        'seo_meta' => 'array',
    ];

    public $translatable = [
        'site_name',
        'address',
        'hero_headline',
        'hero_subtitle',
        'hero_cta_label',
        'seo_meta',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp']);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(200)
            ->sharpen(10);
    }

    public static function getValue(string $key, $default = null)
    {
        $setting = static::first();
        return $setting ? $setting->$key : $default;
    }
}