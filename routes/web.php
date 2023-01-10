<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
    Route::group(['prefix' => '/master'], function () {
        Route::get('/', function() { 
            return redirect()->route('kategori'); 
        });
        Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
        Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang');
        Route::get('/lokasi', [App\Http\Controllers\LokasiController::class, 'index'])->name('lokasi');
    });
});