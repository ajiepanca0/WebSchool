<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Ulasan_Alumni_Controller;
use App\Http\Controllers\UlasanAlumni;
use App\Http\Controllers\UlasanAlumniController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProfileController::class, 'index']);
Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::post('/sendPendaftaran', [PendaftaranController::class, 'sendPendaftaran'])->name('sendPendaftaran');


Route::get('/ulasanalumni', [Ulasan_Alumni_Controller::class, 'index']);
Route::post('/tambahulasanalumni', [Ulasan_Alumni_Controller::class, 'tambahUlasan'])->name('tambahulasanalumni');
Route::get('/ubahstatus/{id}', [Ulasan_Alumni_Controller::class, 'ubahStatus'])->name('ubahstatus');



