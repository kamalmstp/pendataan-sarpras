<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Junior\SekolahController;
use App\Http\Controllers\Junior\JumlahController;
use App\Http\Controllers\Junior\InformasiController;
use App\Http\Controllers\HomeController;
use App\Models\User;


Route::middleware('role:' . User::SMP)
    ->prefix('junior')
    ->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('junior.index');
        Route::group([
            'prefix' => 'pendataan',
        ], function () {
            Route::resource('school', SekolahController::class);
            Route::resource('kelas', KelasController::class);
            Route::resource('penunjang', PenunjangController::class);
            Route::resource('sanitasi', SanitasiController::class);
            Route::resource('jumlah', JumlahController::class);
            Route::resource('informasi', InformasiController::class);
            Route::resource('perpus', PerpusController::class);
            Route::resource('peralatan', PeralatanController::class);
        });
    });