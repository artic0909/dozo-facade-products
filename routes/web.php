<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Public Landing Page
Route::get('/', [AdminController::class, 'home'])->name('home');
Route::post('/quotes', [AdminController::class, 'storePublicQuote'])->name('quotes.store');

// Admin Authentication Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::match(['get', 'post'], '/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Protected Admin Dashboard Routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.index');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/quotes/{quote}/status', [AdminController::class, 'updateQuoteStatus'])->name('admin.quotes.status');
        Route::delete('/quotes/{quote}', [AdminController::class, 'deleteQuote'])->name('admin.quotes.delete');
        
        // Hero CMS Edit Routes
        Route::post('/hero-slides/{slide}', [AdminController::class, 'updateHeroSlide'])->name('admin.hero.slide.update');
        Route::post('/hero-stats/{stat}', [AdminController::class, 'updateHeroStat'])->name('admin.hero.stat.update');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

