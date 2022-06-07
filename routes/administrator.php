<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\HomeController;
use App\Models\User;


Route::middleware('role:' . User::ADMIN)
    ->prefix('administrator')
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('administrator.index');
    });