<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
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

Route::get('/', [KamarController::class, 'index']);

Route::get('/pemesanan', [KamarController::class, 'pemesanan']);

Route::post('/pemesanan', [PemesananController::class, 'store']);
