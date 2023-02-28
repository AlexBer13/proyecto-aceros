<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AceroController;

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
//Pagina principal
Route::get('acero', [AceroController::class, 'index']);

//Formulario

Route::get('/acero', [AceroController::class, 'index']);
Route::post('/formulario', [AceroController::class, 'store']);
Route::get('/formulario', [AceroController::class, 'create']);