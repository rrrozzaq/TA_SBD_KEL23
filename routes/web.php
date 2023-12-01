<?php

use App\Http\Controllers\TenantController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KeteranganController;
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


Route::get('/', [TenantController::class, 'index']);
Route::get('/tenant', [TenantController::class, 'index'])->name('tenant.index');
Route::get('/tenant/add', [TenantController::class, 'create'])->name('tenant.create');
Route::post('/tenant/store', [TenantController::class, 'store'])->name('tenant.store');
Route::get('/tenant/edit/{id}', [TenantController::class, 'edit'])->name('tenant.edit');
Route::get('/tenant/show/{id}', [TenantController::class, 'show'])->name('tenant.show');
Route::post('/tenant/update/{id}', [TenantController::class, 'update'])->name('tenant.update');
Route::delete('/tenant/delete/{id}', [TenantController::class, 'softDelete'])->name('tenant.softDelete');
Route::delete('/tenant/delete/permanen/{id}', [TenantController::class, 'hardDelete'])->name('tenant.hardDelete');
Route::get('/tenant/restore/{id}', [TenantController::class, 'restore'])->name('tenant.restore');

Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi.index');
Route::get('/lokasi/add', [LokasiController::class, 'create'])->name('lokasi.create');
Route::post('/lokasi/store', [LokasiController::class, 'store'])->name('lokasi.store');
Route::get('/lokasi/edit/{id}', [LokasiController::class, 'edit'])->name('lokasi.edit');
Route::get('/lokasi/show/{id}', [LokasiController::class, 'show'])->name('lokasi.show');
Route::post('/lokasi/update/{id}', [LokasiController::class, 'update'])->name('lokasi.update');
Route::delete('/lokasi/delete/{id}', [LokasiController::class, 'delete'])->name('lokasi.delete');

Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index');
Route::get('/jenis/add', [JenisController::class, 'create'])->name('jenis.create');
Route::post('/jenis/store', [JenisController::class, 'store'])->name('jenis.store');
Route::get('/jenis/edit/{id}', [JenisController::class, 'edit'])->name('jenis.edit');
Route::post('/jenis/update/{id}', [JenisController::class, 'update'])->name('jenis.update');
Route::delete('/jenis/delete/{id}', [JenisController::class, 'delete'])->name('jenis.delete');

Route::get('/detail', [KeteranganController::class, 'index'])->name('keterangan.index');
Route::get('/soft', [TenantController::class, 'softIndex'])->name('softDelete');
Route::get('/restore',[TenantController::class, 'softIndex'])->name('restore');

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('home', [TenantController::class, 'index'])->name('home')->middleware('auth');
Route::get('/logout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('actionRegister');
Route::get('home', [TenantController::class, 'index'])->name('home')->middleware('auth');
Route::get('/logout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
