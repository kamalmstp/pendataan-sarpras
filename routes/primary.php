<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Primary\SekolahController;
use App\Http\Controllers\Primary\KelasController;
use App\Http\Controllers\Primary\PenunjangController;
use App\Http\Controllers\Primary\SanitasiController;
use App\Http\Controllers\HomeController;
use App\Models\User;


Route::middleware('role:' . User::SD)
    ->prefix('primary')
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('primary.index');

        Route::group([
            'prefix' => 'pendataan',
        ], function () {
            Route::resource('school', SekolahController::class);
            Route::resource('kelas', KelasController::class);
            Route::resource('penunjang', PenunjangController::class);
            Route::resource('sanitasi', SanitasiController::class);
        });
    });