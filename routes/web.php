<?php

use App\Http\Controllers\EditController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\galeriController;
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


Route::get('/', [GaleriController::class, 'showData']);
Route::post('/search', [GaleriController::class, 'searchData']);

Route::get('/edit/{id}', [EditController::class, 'edit']);
Route::post('/update/{id}', [EditController::class, 'update']);

