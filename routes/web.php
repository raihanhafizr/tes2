<?php

use App\Http\Controllers\AlgoritmaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('algoritma');
});

Route::get('/algoritma', [AlgoritmaController::class, 'index']);
Route::post('/balik-huruf', [AlgoritmaController::class, 'balikHuruf']);
Route::post('/kata-terpanjang', [AlgoritmaController::class, 'kataTerpanjang']);
Route::post('/hitung-kemunculan', [AlgoritmaController::class, 'hitungKemunculan']);
Route::post('/selisih-diagonal', [AlgoritmaController::class, 'selisihDiagonal']);