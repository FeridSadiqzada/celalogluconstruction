<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Get locale from URL parameter, session, or default
        $locale = $request->get('lang') ?? Session::get('locale') ?? config('app.locale');
        
        // Validate locale
        if (!array_key_exists($locale, config('app.available_locales'))) {
            $locale = config('app.locale');
        }
        
        // Set locale
        App::setLocale($locale);
        Session::put('locale', $locale);
        
        return $next($request);
    }
}