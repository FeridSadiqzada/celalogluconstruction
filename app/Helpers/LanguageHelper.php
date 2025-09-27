<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Request;

class LanguageHelper
{
    /**
     * Get URL with language parameter
     */
    public static function getUrlWithLanguage($locale)
    {
        $url = Request::url();
        $query = Request::query();
        
        // Add or update the lang parameter
        $query['lang'] = $locale;
        
        return $url . '?' . http_build_query($query);
    }
    
    /**
     * Get current language flag emoji
     */
    public static function getLanguageFlag($locale)
    {
        $flags = [
            'az' => '🇦🇿',
            'en' => '🇺🇸',
            'ru' => '🇷🇺',
        ];
        
        return $flags[$locale] ?? '🌐';
    }
    
    /**
     * Get language name
     */
    public static function getLanguageName($locale)
    {
        return config('app.available_locales')[$locale] ?? $locale;
    }
}