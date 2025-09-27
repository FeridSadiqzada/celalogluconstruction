<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Services
Route::get('/xidmetler', function () {
    return view('services');
})->name('services.index');

// Projects
Route::get('/layiheler', function () {
    return view('projects');
})->name('projects.index');

// Partners
Route::get('/terefdaslar', function () {
    return view('partners');
})->name('partners.index');

// About
Route::get('/haqqimizda', function () {
    return view('about');
})->name('about');

// Contact
Route::get('/elaqe', function () {
    return view('contact');
})->name('contact');



// Blog - Coming Soon
Route::get('/blog', function () {
    return view('coming-soon', ['pageTitle' => 'Blog']);
})->name('blog.index');
// Catch-all route for other pages - Coming Soon
Route::get('/{page}', function ($page) {
    return view('coming-soon', ['pageTitle' => ucfirst($page)]);
})->name('pages.show');

// Sitemap
Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');

// Language Switcher
Route::get('/lang/{locale}', function ($locale) {
    if (array_key_exists($locale, config('app.available_locales', ['az' => 'Azərbaycan']))) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('locale.switch');