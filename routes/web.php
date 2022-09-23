<?php

use App\Http\Controllers\CategoryMesinController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailMesinController;
use App\Http\Controllers\MesinController;
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
//     return view('components.dashboard');
// });

// Dashboard
Route::get('/',[DashboardController::class, 'index']);
Route::get('/search/{word}',[DashboardController::class, 'search']);
Route::get('/chartDonutPossibility',[DashboardController::class, 'chartDonutPossibility']);

// Mesin
Route::get('/mesin',[MesinController::class, 'index']);
Route::get('/mesin/{id}',[MesinController::class, 'breakdown']);

// CategoryMesin
Route::get('/categorymesin',[CategoryMesinController::class, 'index']);

// Detail Mesin
Route::get('mesin/detailmesin/{id}',[DetailMesinController::class, 'detail']);
// Route::get('/detailmesin',[DetailMesinController::class, 'index']);