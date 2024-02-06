<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\PemainController;
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
    return view('welcome');
});

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

Route::get('/pemain',[PemainController::class,'index']);

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





