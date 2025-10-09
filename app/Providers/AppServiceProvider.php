<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Set locale from session or URL parameter
        if (request()->has('lang')) {
            $locale = request()->get('lang');
            if (array_key_exists($locale, config('app.available_locales', []))) {
                session(['locale' => $locale]);
                app()->setLocale($locale);
            }
        } elseif (session()->has('locale')) {
            $locale = session('locale');
            if (array_key_exists($locale, config('app.available_locales', []))) {
                app()->setLocale($locale);
            }
        }
    }
}