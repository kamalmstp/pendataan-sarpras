<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\SekolahController;
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
        });
    });