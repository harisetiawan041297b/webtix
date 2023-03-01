<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BiodataController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/biodata/create',[BiodataController::class, 'create']);
Route::post('/biodata', [BiodataController::class, 'store'])->name('biodata.store');


Route::get('/admin', [LoginController::class, 'index']);

Route::get('/list', [CheckController::class, 'index']);

Route::get('/check/create', [CheckController::class, 'create']);
Route::post('/check', [CheckController::class, 'store'])->name('check.store');


