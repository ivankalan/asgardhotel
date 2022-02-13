<?php

use App\Http\Controllers\KamarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PemesananController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/pemesanan', [PemesananController::class, 'index']);

Route::get('/resepsionis', [PemesananController::class, 'resepsionis']);

Route::post('/pemesanan', [PemesananController::class, 'store']);

Route::post('/status/{id}', [PemesananController::class, 'status']);

Route::resource('/kamar', KamarController::class);
