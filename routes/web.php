<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\Fasilitas_KamarController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservasiController;

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
    return view('home');
})->middleware('auth');

Route::get('/room', [RoomController::class, 'index'])->name('fasilitas'); 
Route::get('/tambah_room', [RoomController::class, 'create']); 
Route::post('/insert_room', [RoomController::class, 'store']);
Route::get('/tampilan_room/{id}', [RoomController::class, 'tampilan']); 
Route::put('/update_room/{id}', [RoomController::class, 'update']); 
Route::delete('/delete_room/{id}', [RoomController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/pilihankamar', function() {
    return view('pilihankamar');
});
// kamar
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar'); 
Route::get('/tambah_kamar', [KamarController::class, 'create']); 
Route::post('/insert_kamar', [KamarController::class, 'store']);
Route::get('/tampilan_kamar/{id}', [KamarController::class, 'tampilan']); 
Route::put('/update_kamar/{id}', [KamarController::class, 'update']); 
Route::delete('/delete_kamar/{id}', [KamarController::class, 'destroy']);

// fasilitas kamar
Route::get('/fasilitas_kamar', [Fasilitas_KamarController::class, 'index'])->name('fasilitas_kamar'); 
Route::get('/tambah_fasilitas_kamar', [Fasilitas_KamarController::class, 'create']); 
Route::post('/insert_fasilitas_kamar', [Fasilitas_KamarController::class, 'store']);
Route::get('/tampilan_fasilitas_kamar/{id}', [Fasilitas_KamarController::class, 'tampilan']); 
Route::put('/update_fasilitas_kamar/{id}', [Fasilitas_KamarController::class, 'update']); 
Route::delete('/delete_fasilitas_kamar/{id}', [Fasilitas_KamarController::class, 'destroy']);

// fasilitas umum
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas'); 
Route::get('/tambah_fasilitas', [FasilitasController::class, 'create']); 
Route::post('/insert_fasilitas', [FasilitasController::class, 'store']);
Route::get('/tampilan_fasilitas/{id}', [FasilitasController::class, 'tampilan']); 
Route::put('/update_fasilitas/{id}', [FasilitasController::class, 'update']); 
Route::delete('/delete_fasilitas/{id}', [FasilitasController::class, 'destroy']);

// kamar
Route::get('/reservasi', [ReservasiController::class, 'index'])->name('fasilitas'); 
Route::get('/tambah_reservasi', [ReservasiController::class, 'create']); 
Route::post('/insert_reservasi', [ReservasiController::class, 'store']);
Route::get('/tampilan_reservasi/{id}', [ReservasiController::class, 'tampilan']); 
Route::put('/update_reservasi/{id}', [ReservasiController::class, 'update']); 
Route::delete('/delete_reservasi/{id}', [ReservasiController::class, 'destroy']);

Route::get('/fasilitas-umum', function() {
    return view('administrator.fasilitas-umum');
});
Route::get('/resepsionis', function() {
    return view('resepsionis.index');
});
Route::get('/resepsionis-fasilitas-kamar', function() {
    return view('resepsionis.fasilitas-kamar');
});
Route::get('/resepsionis-fasilitas-umum', function() {
    return view('resepsionis.fasilitas-umum');
});

Route::group(['middleware' => ['auth','checkrole:admin']],function () {
    Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
    Route::get('user', function () { return view('user'); })->middleware(['checkRole:user,admin']);
});