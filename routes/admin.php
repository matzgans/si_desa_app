<?php

use App\Http\Controllers\ArticleController as LandingArticleController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ComunicationDeviceController;
use App\Http\Controllers\Admin\ComunityEconomyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DocumentAnimalController;
use App\Http\Controllers\Admin\DocumentKelBaikController;
use App\Http\Controllers\Admin\DocumentTidakMampuController;
use App\Http\Controllers\Admin\EducationLevelController;
use App\Http\Controllers\Admin\FarmController;
use App\Http\Controllers\Admin\LivingConditionalController;
use App\Http\Controllers\Admin\ResidentController;
use App\Http\Controllers\Admin\StaffCategory;
use App\Http\Controllers\Admin\StaffCategoryController;
use App\Http\Controllers\Admin\StructureController;
use App\Http\Controllers\Admin\SuratController;
use App\Http\Controllers\Admin\TransportationMeanController;
use App\Http\Controllers\Admin\VillageController;
use App\Http\Controllers\Admin\VillageProgramController;
use App\Http\Controllers\Admin\VisionMisionController;
use App\Http\Controllers\ProfileController;
use App\Models\ComunicationDevice;
use App\Models\ComunityEconomy;
use App\Models\LivingCondition;
use App\Models\VillageProgram;
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

    // Route Penyuratan
    // Route::get('penyuratan', [SuratController::class, 'index'])->name('surat.index');

    Route::resource('documents/animals', DocumentAnimalController::class)->names([
        'index'   => 'document.animal.index',
        'create'  => 'document.animal.create',
        'store'   => 'document.animal.store',
        'edit'    => 'document.animal.edit',
        'update'  => 'document.animal.update',
        'destroy' => 'document.animal.destroy',
    ]);
    Route::get('documents/animals/{id}/print', [DocumentAnimalController::class, 'print'])->name('document.animal.print');
    // Surat Kel Baik
    Route::resource('documents/kelbaik', DocumentKelBaikController::class)->names([
        'index'   => 'document.kelbaik.index',
        'create'  => 'document.kelbaik.create',
        'store'   => 'document.kelbaik.store',
        'edit'    => 'document.kelbaik.edit',
        'update'  => 'document.kelbaik.update',
        'destroy' => 'document.kelbaik.destroy',
    ]);
    Route::get('documents/kelbaik/{id}/print', [DocumentKelBaikController::class, 'print'])->name('document.kelbaik.print');
    //    Document Tidak Mampu
    Route::resource('documents/tidakmampu', DocumentTidakMampuController::class)->names([
        'index'   => 'document.tidakmampu.index',
        'create'  => 'document.tidakmampu.create',
        'store'   => 'document.tidakmampu.store',
        'edit'    => 'document.tidakmampu.edit',
        'update'  => 'document.tidakmampu.update',
        'destroy' => 'document.tidakmampu.destroy',
    ]);
    Route::get('documents/tidakmampu/{id}/print', [DocumentTidakMampuController::class, 'print'])->name('document.tidakmampu.print');




    // route data master
    Route::resource('resident', ResidentController::class);
    Route::resource('staffcategory', StaffCategoryController::class);
    Route::resource('village', VillageController::class);
    Route::resource('transportation', TransportationMeanController::class);
    Route::resource('farm', FarmController::class);

    // kependudukan

    Route::resource('education/level', EducationLevelController::class)->names([
        'index'   => 'education.level.index',
        'create'  => 'education.level.create',
        'store'   => 'education.level.store',
        'show'    => 'education.level.show',
        'edit'    => 'education.level.edit',
        'update'  => 'education.level.update',
        'destroy' => 'education.level.destroy',
    ]);
    Route::resource('comunity/economy', ComunityEconomyController::class)->names([
        'index'   => 'comunity.economy.index',
        'create'  => 'comunity.economy.create',
        'store'   => 'comunity.economy.store',
        'show'    => 'comunity.economy.show',
        'edit'    => 'comunity.economy.edit',
        'update'  => 'comunity.economy.update',
        'destroy' => 'comunity.economy.destroy',
    ]);
    Route::resource('living/conditional', LivingConditionalController::class)->names([
        'index'   => 'living.conditional.index',
        'create'  => 'living.conditional.create',
        'store'   => 'living.conditional.store',
        'show'    => 'living.conditional.show',
        'edit'    => 'living.conditional.edit',
        'update'  => 'living.conditional.update',
        'destroy' => 'living.conditional.destroy',
    ]);

    Route::resource('comunication_device', ComunicationDeviceController::class);


    // Desa
    Route::resource('visionmision', VisionMisionController::class);
    Route::resource('villageprogram', VillageProgramController::class);

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
