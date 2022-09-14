<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\Fasilitas_KamarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function() {
    return view('home');
});

Route::get('/room', [RoomController::class, 'index']);
Route::get('/facility', [FacilityController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/administrator', function() {
    return view('administrator.index');
});
Route::get('/kamar', function() {
    return view('administrator.kamar');
});
Route::get('/fasilitas_kamar', [Fasilitas_KamarController::class, 'index'])->name('fasilitas_kamar'); 
Route::get('/tambah_fasilitas_kamar', [Fasilitas_KamarController::class, 'create']); 
Route::post('/insert_fasilitas_kamar', [Fasilitas_KamarController::class, 'store']);
Route::get('/tampilan_fasilitas_kamar/{id}', [Fasilitas_KamarController::class, 'tampilan']); 
Route::put('/update_fasilitas_kamar/{id}', [Fasilitas_KamarController::class, 'update']); 
Route::delete('/delete_fasilitas_kamar/{id}', [Fasilitas_KamarController::class, 'destroy']);


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

