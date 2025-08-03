<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/events', [HomeController::class, 'events'])->name('events');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/quote-requests', [QuoteRequestController::class, 'index'])->name('admin.quote.index');
});
Route::get('/quote-request', [QuoteRequestController::class, 'create'])->name('quote.form');
Route::post('/quote-request', [QuoteRequestController::class, 'store'])->name('quote.submit');

// Optional: for admin or thank-you page
require __DIR__ . '/auth.php';
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
Route::patch('/admin/quotes/{quote}/status', [QuoteRequestController::class, 'updateStatus'])->name('quote.updateStatus');
