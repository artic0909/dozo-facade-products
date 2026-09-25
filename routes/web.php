<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Public Landing Page & Product Catalog Routes
Route::get('/', [AdminController::class, 'home'])->name('home');
Route::get('/windows/{category_slug?}', [AdminController::class, 'windowsPage'])->name('windows.index');
Route::get('/facade/{category_slug?}', [AdminController::class, 'facadePage'])->name('facade.index');
Route::get('/products/{category_slug?}', [AdminController::class, 'productsPage'])->name('products.index');
Route::post('/quotes', [AdminController::class, 'storePublicQuote'])->name('quotes.store');

// Admin Authentication Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::match(['get', 'post'], '/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Protected Admin Dashboard Routes
    Route::middleware(['auth'])->group(function () {
        // 1. Overview Dashboard
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.index');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        // 2. Inquiries CRM
        Route::get('/inquiries', [AdminController::class, 'quotesIndex'])->name('admin.quotes.index');
        Route::post('/quotes/{quote}/status', [AdminController::class, 'updateQuoteStatus'])->name('admin.quotes.status');
        Route::delete('/quotes/{quote}', [AdminController::class, 'deleteQuote'])->name('admin.quotes.delete');
        
        // 3. Hero CMS Edit Routes
        Route::get('/hero', [AdminController::class, 'heroIndex'])->name('admin.hero.index');
        Route::post('/hero-slides/{slide}', [AdminController::class, 'updateHeroSlide'])->name('admin.hero.slide.update');
        Route::post('/hero-stats/{stat}', [AdminController::class, 'updateHeroStat'])->name('admin.hero.stat.update');

        // 3.1 Façade Section CMS Routes
        Route::get('/facade-cms', [AdminController::class, 'facadeHeroIndex'])->name('admin.facade.index');
        Route::post('/facade-cms/reset', [AdminController::class, 'resetFacadeSlides'])->name('admin.facade.reset');
        Route::post('/facade-slides/{slide}', [AdminController::class, 'updateFacadeSlide'])->name('admin.facade.slide.update');

        // 4. Solutions CMS Routes
        Route::get('/solutions', [AdminController::class, 'solutionsIndex'])->name('admin.solutions.index');
        Route::post('/solutions/{solution}', [AdminController::class, 'updateSolution'])->name('admin.solutions.update');

        // 5. Products & Categories CRUD Routes
        Route::get('/products', [AdminController::class, 'productsIndex'])->name('admin.products.index');
        Route::post('/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
        Route::post('/products/{product}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
        Route::delete('/products/{product}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');
        Route::post('/categories', [AdminController::class, 'storeCategory'])->name('admin.categories.store');
        Route::post('/categories/{category}', [AdminController::class, 'updateCategory'])->name('admin.categories.update');
        Route::delete('/categories/{category}', [AdminController::class, 'deleteCategory'])->name('admin.categories.delete');

        // 6. Projects CRUD Routes
        Route::get('/projects', [AdminController::class, 'projectsIndex'])->name('admin.projects.index');
        Route::post('/projects', [AdminController::class, 'storeProject'])->name('admin.projects.store');
        Route::post('/projects/{project}', [AdminController::class, 'updateProject'])->name('admin.projects.update');
        Route::delete('/projects/{project}', [AdminController::class, 'deleteProject'])->name('admin.projects.delete');

        // 7. Site Settings Routes
        Route::get('/settings', [AdminController::class, 'settingsIndex'])->name('admin.settings.index');
        Route::post('/settings', [AdminController::class, 'updateSiteSettings'])->name('admin.settings.update');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

