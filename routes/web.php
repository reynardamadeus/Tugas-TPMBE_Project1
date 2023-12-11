<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;

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

Route::get('/', [AbsensiController::class, 'show']) -> name('show');
Route::get('/create', [AbsensiController::class, 'create']) -> name('create');
Route::post('/store', [AbsensiController::class, 'store']) -> name('store');
