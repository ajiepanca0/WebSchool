<?php

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

use App\Http\Controllers\GelombangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KodeController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Ulasan_Alumni_Controller;
use App\Http\Controllers\UlasanAlumni;
use App\Http\Controllers\UlasanAlumniController;
use App\Models\Gelombang;

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

// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('register', [RegisterController::class, 'register'])->name('register');
// Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
require __DIR__.'/auth.php';


Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::get('/', [ProfileController::class, 'index']);
Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::get('/listpendaftaran', [PendaftaranController::class, 'show'])->middleware('auth');
Route::post('/sendPendaftaran', [PendaftaranController::class, 'sendPendaftaran'])->name('sendPendaftaran');
Route::post('/update-nominal', [PendaftaranController::class, 'updateNominal'])->name('updateNominal');
Route::get('detail/{id}', [PendaftaranController::class, 'detailpendaftar'])->name('detailpendaftar');
Route::get('/verifikasidata/{id}', [PendaftaranController::class, 'verifikasidata'])->name('verifikasidata')->middleware('auth');



Route::get('/ulasanalumni', [Ulasan_Alumni_Controller::class, 'index'])->middleware('auth');
Route::post('/tambahulasanalumni', [Ulasan_Alumni_Controller::class, 'tambahUlasan'])->name('tambahulasanalumni');
Route::get('/ubahstatus/{id}', [Ulasan_Alumni_Controller::class, 'ubahStatus'])->name('ubahstatus')->middleware('auth');

Route::get('/kritiksaran', [KritikSaranController::class, 'index'])->middleware('auth');
Route::post('/tambahkritiksaran', [KritikSaranController::class, 'tambahKritikSaran'])->name('tambahkritiksaran');
Route::post('/kritiksaran/{id}/update', [KritikSaranController::class,'updateKritikSaran'])->name('kritiksaranUpdate')->middleware('auth');

Route::get('/gelombang', [GelombangController::class, 'index'])->middleware('auth');
Route::post('/tambahgelombang', [GelombangController::class, 'tambahgelombang'])->name('tambahgelombang')->middleware('auth');
Route::post('/gelombang/{id}/update', [GelombangController::class,'gelombangupdate'])->name('gelombangupdate')->middleware('auth');
Route::post('/gelombang/{id}/delete', [GelombangController::class,'gelombangdelete'])->name('gelombangdelete')->middleware('auth');


Route::get('/kode', [KodeController::class, 'index'])->middleware('auth');
Route::post('/tambahkode', [KodeController::class, 'tambahkode'])->name('tambahkode')->middleware('auth');
Route::post('/kode/{id}/update', [KodeController::class,'kodeupdate'])->name('kodeupdate')->middleware('auth');
Route::post('/kode/{id}/delete', [KodeController::class,'kodedelete'])->name('kodedelete')->middleware('auth');




Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

