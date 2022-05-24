<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

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
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::get('/data-sekolah', 'App\Http\Controllers\SekolahController@index');
Route::get('/tambah-sekolah', 'App\Http\Controllers\SekolahController@create');
Route::post('/simpan-sekolah', 'App\Http\Controllers\SekolahController@store');
Route::get('/edit-sekolah/{id}', 'App\Http\Controllers\SekolahController@edit');
Route::post('/update-sekolah/{id}', 'App\Http\Controllers\SekolahController@update');
Route::get('/delete-sekolah/{id}', 'App\Http\Controllers\SekolahController@destroy');