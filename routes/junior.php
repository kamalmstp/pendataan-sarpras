<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\HomeController;
use App\Models\User;


Route::middleware('role:' . User::SMP)
    ->prefix('junior')
    ->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('junior.index');
    });