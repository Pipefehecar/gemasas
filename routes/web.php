<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;

use App\Exports\VehiculosExport;
use Maatwebsite\Excel\Facades\Excel;


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

Route::get('vehiculos/descarga', function () {
    return Excel::download(new VehiculosExport, 'vehiculos.xlsx');
    
});


Route::resource('vehiculos', VehiculoController::class);

// Route::get('/vehiculos', [VehiculoController::class, 'index']);
// Route::get('vehiculos/create', [VehiculoController::class, 'create']);
Route::post('vehiculos/store', [VehiculoController::class, 'store']);
// Route::PUT('vehiculos/edit/{$id}', [VehiculoController::class, 'edit']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
