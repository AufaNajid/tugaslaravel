<?php

use App\Http\Controllers\DashboardKelas;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\DashboardPemain;
use GuzzleHttp\Middleware;
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
    return view('home');
});

Route::get('/home',[HomeController::class,'index']);

// Route::get('/music', function () {
//     return view('music');
// });
// Route::get('/delete', function () {
//     return view('delete');
// });

Route::get('/music',[MusicController::class,'index']);

Route::get('/Music/detail/{id}',[\App\Http\Controllers\MusicController::class,'show']);

Route::get('/game',[GameController::class,'index']);

Route::get('/Game/gamedetail/{id}',[\App\Http\Controllers\GameController::class,'show']);

Route::get('/Pemain/pemain',[PemainController::class,'index'])->name("pemain");

Route::get('/Pemain/detailpemain/{id}',[\App\Http\Controllers\PemainController::class,'show']);

Route::get('/Pemain/create', [\App\Http\Controllers\PemainController::class, 'create']);

Route::post('/Pemain/create', [\App\Http\Controllers\PemainController::class, 'store']);

Route::delete('/Pemain/{id}',[\App\Http\Controllers\PemainController::class, 'destroy']);

Route::get('/Pemain/edit/{id}', [\App\Http\Controllers\PemainController::class, 'edit']);

Route::post('/Pemain/update/{pemain}', [\App\Http\Controllers\PemainController::class, 'update']);

Route::get('/kelas',[KelasController::class,'index']);

Route::get('/Kelas/create', [KelasController::class, 'create']);

Route::post('/Kelas/create', [KelasController::class, 'store']);

Route::delete('/Kelas/{id}',[\App\Http\Controllers\KelasController::class, 'destroy']);

Route::get('/Kelas/edit/{id}', [\App\Http\Controllers\KelasController::class, 'edit']);

Route::post('/Kelas/update/{kelas}', [\App\Http\Controllers\KelasController::class, 'update']);

Route::get('/register',[\App\Http\Controllers\RegisterController::class, 'index']);

Route::post('/Register/store',[\App\Http\Controllers\RegisterController::class, 'store']);

Route::get('/login',[\App\Http\Controllers\LoginController::class, 'index']);

Route::post('/Login/auth', [\App\Http\Controllers\LoginController::class, 'auth']);

Route::post('Login/logout', [\App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth');

Route::get('/Dashboard/Pemain/pemain',[DashboardPemain::class,'index'])->middleware('auth');

Route::get('/Dashboard/Pemain/detailpemain/{id}',[\App\Http\Controllers\DashboardPemain::class,'show'])->middleware('auth');

Route::get('/Dashboard/Pemain/create', [\App\Http\Controllers\DashboardPemain::class, 'create'])->middleware('auth');

Route::post('/Dashboard/Pemain/create', [\App\Http\Controllers\DashboardPemain::class, 'store'])->middleware('auth');

Route::delete('/Dashboard/Pemain/{id}',[\App\Http\Controllers\DashboardPemain::class, 'destroy'])->middleware('auth');

Route::get('/Dashboard/Pemain/edit/{id}', [\App\Http\Controllers\DashboardPemain::class, 'edit'])->middleware('auth');

Route::post('/Dashboard/Pemain/update/{pemain}', [\App\Http\Controllers\DashboardPemain::class, 'update'])->middleware('auth');

Route::get('/Dashboard/Kelas/kelas',[DashboardKelas::class,'index']);

Route::get('/Dashboard/Kelas/create', [DashboardKelas::class, 'create']);

Route::post('/Dashboard/Kelas/create', [DashboardKelas::class, 'store']);

Route::delete('/Dashboard/Kelas/{id}',[\App\Http\Controllers\DashboardKelas::class, 'destroy']);

Route::get('/Dashboard/Kelas/edit/{id}', [\App\Http\Controllers\DashboardKelas::class, 'edit']);

Route::post('/Dashbard/Kelas/update/{kelas}', [\App\Http\Controllers\DashboardKelas::class, 'update']);

Route::get('/filter/auth/{kelas_id}', [PemainController::class, 'filter'])->name('filter_pemain_auth');

Route::get('/filter/guest/{kelas_id}', [PemainController::class, 'filter'])->name('filter_pemain_guest');

Route::get('/dashboard/filter/auth/{kelas_id}', [DashboardPemain::class, 'filter'])->name('filter_dashboard_auth');

Route::get('/dashboard/filter/guest/{kelas_id}', [DashboardPemain::class, 'filter'])->name('filter_dashboard_guest');


