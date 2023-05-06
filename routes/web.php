<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TanahController;
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
    return view('dashboard');
});

// Route::middleware(['auth', 'checkRole:ADMIN'])->controller(ProductController::class)->group(
Route::controller(DashboardController::class)->group(
    function () {
        Route::get('/dashboard',  'index')->name('dashboard.index');
    }
);
Route::controller(TanahController::class)->group(
    function () {
        Route::get('/tanah',  'index')->name('tanah.index');
        Route::get('/tanah/tambah',  'create')->name('tanah.create');
        Route::post('/tanah/store',  'store')->name('tanah.store');
        Route::delete('/tanah/{tanah}',  'destroy')->name('tanah.destroy');
        Route::get('/tanah/{tanah}/edit',  'edit')->name('tanah.edit');
        Route::put('/tanah/{tanah}/edit',  'update')->name('tanah.update');
    }
);
