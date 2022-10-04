<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\SekolahController;
use App\Http\Controllers\Administrator\BlogController;
use App\Http\Controllers\Administrator\RoadmapController;
use App\Http\Controllers\Administrator\ImportController;
use App\Http\Controllers\Administrator\GaleriController;

use App\Http\Controllers\HomeController;
use App\Models\User;


Route::middleware('role:' . User::ADMIN)
    ->prefix('administrator')
    ->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('administrator.index');

        // PENDATAAN
        Route::group([
            'prefix' => 'pendataan',
        ], function () {
            Route::resource('sekolah', SekolahController::class);
            Route::post('sekolah/create_user', [SekolahController::class, 'create_user'])->name('sekolah.user');
            Route::post('sekolah/import', [SekolahController::class, 'import'])->name('sekolah.import');
            Route::resource('galeri', GaleriController::class);
        });
        Route::resource('blog', BlogController::class);
        Route::post('blog/kategori', [BlogController::class, 'store_kategori'])->name('blog.store-kategori');
        Route::delete('blog/kategori/{id}', [BlogController::class, 'destroy_kategori'])->name('blog.destroy-kategori');
        Route::resource('roadmap', RoadmapController::class);

        Route::resource('import', ImportController::class);
        Route::post('import/fasilitas', [ImportController::class, 'fasilitas'])->name('import.fasilitas');
        Route::post('import/ruangan', [ImportController::class, 'ruangan'])->name('import.ruangan');
    });