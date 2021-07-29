<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;

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
    return view('welcome');
});

Route::get('/vehiculos', [VehiculoController::class, 'index']);
// Route::get('vehiculos/create', [ArticuloController::class, 'create']);
// Route::post('vehiculos/store', [ArticuloController::class, 'store']);
// Route::post('vehiculos/{{$id}}/edit', [ArticuloController::class, 'edit']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
