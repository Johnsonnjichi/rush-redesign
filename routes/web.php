<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GalleryController;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Articles
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

// Events
Route::get('/events', [EventController::class, 'index'])->name('events.index');

// Pages
Route::get('/pages/{page}', [PageController::class, 'show'])->name('pages.show');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Special pages
Route::get('/about-us', function () {
    $page = App\Models\Page::where('slug', 'about-us')->first();
    if (!$page) {
        $page = new App\Models\Page([
            'title' => 'About Us',
            'slug' => 'about-us',
            'content' => '<p>This is the about us page content. You can update this later.</p>'
        ]);
    }
    return view('pages.show', compact('page'));
})->name('about');

Route::get('/our-mission', function () {
    $page = App\Models\Page::where('slug', 'our-mission')->first();
    if (!$page) {
        $page = new App\Models\Page([
            'title' => 'Our Mission',
            'slug' => 'our-mission',
            'content' => '<p>This is our mission statement. You can update this later.</p>'
        ]);
    }
    return view('pages.show', compact('page'));
})->name('mission');

// Remove all auth routes for now
// Remove all admin routes for now