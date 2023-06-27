<?php

use App\Http\Controllers\GelombangController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Ulasan_Alumni_Controller;
use App\Http\Controllers\UlasanAlumni;
use App\Http\Controllers\UlasanAlumniController;
use App\Models\Gelombang;
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

Route::get('/kritiksaran', [KritikSaranController::class, 'index']);
Route::post('/tambahkritiksaran', [KritikSaranController::class, 'tambahKritikSaran'])->name('tambahkritiksaran');
Route::post('/kritiksaran/{id}/update', [KritikSaranController::class,'updateKritikSaran'])->name('kritiksaranUpdate');

Route::get('/gelombang', [GelombangController::class, 'index']);
Route::post('/tambahgelombang', [GelombangController::class, 'tambahgelombang'])->name('tambahgelombang');
Route::post('/gelombang/{id}/update', [GelombangController::class,'gelombangupdate'])->name('gelombangupdate');
Route::post('/gelombang/{id}/delete', [GelombangController::class,'gelombangdelete'])->name('gelombangdelete');

