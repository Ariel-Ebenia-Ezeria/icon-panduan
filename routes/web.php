<?php

use App\Http\Controllers\Admin\BantuanController;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\BarangKeluarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\RouterController;
use App\Http\Controllers\Admin\SwitchController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Testing\Fakes\Fake;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/gudang', [LandingController::class, 'gudang'])->name('gudang');
Route::get('/config/switch', [LandingController::class, 'switch'])->name('switch');
Route::get('/config/router', [LandingController::class, 'router'])->name('router');
Route::get('/qna', [LandingController::class, 'faq'])->name('faq');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('barang', BarangController::class);
    Route::resource('barang-keluar', BarangKeluarController::class);
    Route::resource('switch', SwitchController::class);
    Route::resource('router', RouterController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('bantuan', BantuanController::class);
});