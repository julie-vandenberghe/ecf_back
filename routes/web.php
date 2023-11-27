<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatelasController;
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


Route::get('/', [HomeController::class, 'index']);


Route::get('/matelas', [MatelasController::class, 'index']);
Route::get('/matelas/{id}', [MatelasController::class, 'show']);
Route::get('/matelas/nouveau', [MatelasController::class, 'create']);
Route::post('/matelas/nouveau', [MatelasController::class, 'store']);
Route::get('/matelas/{id}/modifier', [MatelasController::class, 'edit']);
Route::post('/matelas/{id}/modifier', [MatelasController::class, 'update']);
Route::get('/matelas/{id}/supprimer', [MatelasController::class, 'destroy']);