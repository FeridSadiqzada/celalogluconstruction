<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Services - Coming Soon
Route::get('/xidmetler', function () {
    return view('coming-soon', ['pageTitle' => 'Xidmətlər']);
})->name('services.index');

// Projects - Coming Soon
Route::get('/layiheler', function () {
    return view('coming-soon', ['pageTitle' => 'Layihələr']);
})->name('projects.index');

// Partners - Coming Soon
Route::get('/terefdaslar', function () {
    return view('coming-soon', ['pageTitle' => 'Tərəfdaşlar']);
})->name('partners.index');

// About - Coming Soon
Route::get('/haqqimizda', function () {
    return view('coming-soon', ['pageTitle' => 'Haqqımızda']);
})->name('about');

// Contact - Coming Soon
Route::get('/elaqe', function () {
    return view('coming-soon', ['pageTitle' => 'Əlaqə']);
})->name('contact');

// Licenses
Route::get('/lisenziyalar', function () {
    return view('licenses');
})->name('licenses');

// Blog - Coming Soon
Route::get('/blog', function () {
    return view('coming-soon', ['pageTitle' => 'Blog']);
})->name('blog.index');
// Catch-all route for other pages - Coming Soon
Route::get('/{page}', function ($page) {
    return view('coming-soon', ['pageTitle' => ucfirst($page)]);
})->name('pages.show');

// Sitemap and RSS
Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');
Route::get('/feed', [BlogController::class, 'feed'])->name('feed');

// Language Switcher (if needed)
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, config('app.locales', ['az']))) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('locale.switch');