<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KategoriProdukController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});
// halaman tes
Route::get('/test', function () {
    return 'Halaman Tes';
});


// Routes untuk Suplier
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index');
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
Route::get('/suplier/{suplier}/edit', [SuplierController::class, 'edit'])->name('suplier.edit');
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');
Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');
Route::get('/suplier/{suplier}', [SuplierController::class, 'show'])->name('suplier.show');
Route::get('/suplier/{id_suplier}/edit', [SuplierController::class, 'edit'])->name('suplier.edit');
Route::put('/suplier/{id_suplier}', [SuplierController::class, 'update'])->name('suplier.update');

// Routes untuk Produk
Route::resource('product', ProductController::class); // Pastikan menggunakan ProductController
// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/product/{id}', [ProductController::class, 'show']);
// Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/product', [ProductController::class, 'store'])->name('products.store');

// Routes untuk Kategori Produk
Route::get('/kategori_produk', [KategoriProdukController::class, 'index'])->name('kategori.index');
Route::get('/kategori_produk/create', [KategoriProdukController::class, 'create'])->name('kategori.create');
Route::post('/kategori_produk', [KategoriProdukController::class, 'store'])->name('kategori.store');
Route::get('/kategori_produk/{id}/edit', [KategoriProdukController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori_produk/{id}', [KategoriProdukController::class, 'update'])->name('kategori.update');
Route::delete('/kategori_produk/{id}', [KategoriProdukController::class, 'destroy'])->name('kategori.destroy');
Route::resource('kategori_produk', KategoriProdukController::class);
Route::get('/kategori-produk', [KategoriProdukController::class, 'index'])->name('kategori_produk.index');

// Routes untuk Pegawai

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
Route::get('/pegawai/{pegawai}', [PegawaiController::class, 'show'])->name('pegawai.show');

Route::resource('pegawai', PegawaiController::class);

