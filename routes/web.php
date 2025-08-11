<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MgCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\TGalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');

// Load more routes
Route::get('/load-more-images', [ImageController::class, 'loadMore'])->name('load.more.images');
Route::get('/songs/load-more', [SongController::class, 'loadMore'])->name('load.more.songs');
Route::get('/tgalleries/load-more', [TGalleryController::class, 'loadMore'])->name('load.more.tgalleries');

Route::middleware('auth')->group(function () {
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
    ], function () {
        Route::resource('mgCategories', MgCategoryController::class);
        Route::resource('images', ImageController::class);
        Route::resource('songs', SongController::class);
        Route::resource('tgalleries', TGalleryController::class);
        Route::patch('/images/{image}/toggle-status', [ImageController::class, 'toggleStatus'])->name('images.toggle-status');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    });
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Optional: for admin or thank-you page
require __DIR__ . '/auth.php';

Route::resource('courses', CourseController::class);
