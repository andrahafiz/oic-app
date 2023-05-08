<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\ProyekController;
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
Route::controller(KendaraanController::class)->group(
    function () {
        Route::get('/kendaraan',  'index')->name('kendaraan.index');
        Route::get('/kendaraan/tambah',  'create')->name('kendaraan.create');
        Route::post('/kendaraan/store',  'store')->name('kendaraan.store');
        Route::delete('/kendaraan/{kendaraan}',  'destroy')->name('kendaraan.destroy');
        Route::get('/kendaraan/{kendaraan}/edit',  'edit')->name('kendaraan.edit');
        Route::put('/kendaraan/{kendaraan}/edit',  'update')->name('kendaraan.update');
    }
);


Route::controller(ProyekController::class)->group(
    function () {
        Route::get('/project/{type_project:slug}',  'index')->name('project.index');
        Route::get('/project/{type_project:slug}/tambah',  'create')->name('project.create');
        Route::get('/project/{type_project:slug}/edit/{proyek}',  'edit')->name('project.edit');
        Route::post('/project/{type_project:slug}/store',  'store')->name('project.store');
        Route::delete('/project/{type_project:slug}/destroy/{proyek}',  'destroy')->name('project.destroy');
        Route::put('/project/{type_project:slug}/update/{proyek}',  'update')->name('project.update');
        // Route::delete('/project/{project}',  'destroy')->name('project.destroy');
        // Route::put('/project/{project}/edit',  'update')->name('project.update');
    }
);
