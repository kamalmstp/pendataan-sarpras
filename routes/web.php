<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Example Routes
// Route::view('/', 'landing');
// Route::match(['get', 'post'], '/dashboard', function(){
//     return view('dashboard');
// });
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::get('/', [GuestController::class, 'index'])->name('/');
Route::get('/daftarSekolah', [GuestController::class, 'daftarSekolah'])->name('daftarSekolah');
Route::get('/detail_sekolah', [GuestController::class, 'detail_sekolah'])->name('detail_sekolah');
Route::get('/roadmap', [GuestController::class, 'roadmap'])->name('roadmap');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/data-sekolah', 'App\Http\Controllers\SekolahController@index');
Route::get('/tambah-sekolah', 'App\Http\Controllers\SekolahController@create');
Route::post('/simpan-sekolah', 'App\Http\Controllers\SekolahController@store');
Route::get('/edit-sekolah/{id}', 'App\Http\Controllers\SekolahController@edit');
Route::post('/update-sekolah/{id}', 'App\Http\Controllers\SekolahController@update');
Route::get('/delete-sekolah/{id}', 'App\Http\Controllers\SekolahController@destroy');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    include_once('administrator.php');

    include_once('primary.php');

    include_once('junior.php');
});