<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data', [UserController::class, 'index']);

Route::prefix('/filter')->group(function () {
    Route::get('/char/{value}', [UserController::class, 'filterChar']);
    Route::get('/varchar/{value}', [UserController::class, 'filterVarchar']);
    Route::get('/text/{value}', [UserController::class, 'filterText']);
    Route::get('/integer/{value}', [UserController::class, 'filterInteger']);
});

Route::get('/data/count', [DataController::class, 'countDataTypes']);
Route::get('/count-data/{columnName}', [DataController::class, 'countDataByFilter'])->name('contar-dados');