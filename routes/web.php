<?php

use App\Http\Controllers\ArticleController as LandingArticleController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ResidentController;
use App\Http\Controllers\Admin\StaffCategory;
use App\Http\Controllers\Admin\StaffCategoryController;
use App\Http\Controllers\Admin\StructureController;
use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/profiles', [LandingController::class, 'profile'])->name('landing.profile');
Route::get('/articles', [LandingArticleController::class, 'index'])->name('landing.article');
Route::get('/articles/{slug}', [LandingArticleController::class, 'getBySlug'])->name('article.detail');
Route::get('/articles/{slug}', [LandingArticleController::class, 'getBySlug'])->name('article.detail');
Route::get('/refresh-view', [LandingController::class, 'refreshMView'])->name('refresh.view');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    // route data master
    Route::resource('resident', ResidentController::class);
    Route::resource('staffcategory', StaffCategoryController::class);

    // end data master
    Route::get('export/resident', [ResidentController::class, 'export'])->name('export.resident');
    Route::resource('article', ArticleController::class);
    Route::put('update/article/status/{article}', [ArticleController::class, 'update_status'])->name('update.article.status');
    Route::resource('structure', StructureController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
