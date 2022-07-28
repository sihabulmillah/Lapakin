<?php

use App\Http\Controllers\LapakinController;
use App\Http\Controllers\Lapak;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', [Lapak::class, 'index'])->name('welcome');
Route::get('/detail_produk-{slug}', [Lapak::class, 'detail'])->name('detail');
Route::get('/home', [LapakinController::class, 'index'])->name('dashboard');
Route::get('/kategori', [LapakinController::class, 'kategori'])->name('kategori');
Route::get('/slider', [LapakinController::class, 'slider'])->name('slider');
Route::get('/tambah-data', [LapakinController::class, 'create']);
Route::get('/tambah-kategori', function () {
    return view('Kategori.tambahkategori');
});
Route::get('/slider-tambah', function () {
    return view('Slide.tambahslider');
});
Route::get('/edit-data-{id}', [LapakinController::class, 'edit']);
Route::get('/edit-kategori-{id}', [LapakinController::class, 'editKategori']);
Route::get('/edit-slider-{id}', [LapakinController::class, 'editSlider']);

Route::get('/hapus-data-{id}', [LapakinController::class, 'destroy']);
Route::get('/hapus-kategori-{id}', [LapakinController::class, 'destroyKategori']);
Route::get('/hapus-slider-{id}', [LapakinController::class, 'destroySlider']);

Route::post('/edit-data/barang-{id}', [LapakinController::class, 'update']);
Route::post('/edit-data/kategori-{id}', [LapakinController::class, 'updateKategori']);
Route::post('/edit-data/slider-{id}', [LapakinController::class, 'updateSlider']);

Route::post('/tambah-data/barang', [LapakinController::class, 'store']);
Route::post('/tambah-data/kategori', [LapakinController::class, 'storeKategori']);
Route::post('/tambah-data/slider', [LapakinController::class, 'storeSlider']);
