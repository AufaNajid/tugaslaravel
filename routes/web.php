<?php

use App\Http\Controllers\GameController;
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
// Route::get('/pemain', function () {
//     return view('pemain');
// });

Route::get('/music',[MusicController::class,'index']);

Route::get('/Music/detail/{id}',[\App\Http\Controllers\MusicController::class,'show']);

Route::get('/game',[GameController::class,'index']);

Route::get('/Game/gamedetail/{id}',[\App\Http\Controllers\GameController::class,'show']);

Route::get('/pemain',[PemainController::class,'index']);

Route::get('/Pemain/detailpemain/{id}',[\App\Http\Controllers\PemainController::class,'show']);

