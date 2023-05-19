<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AceroController;
use App\Http\Controllers\ArchivoController;

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
//Route::get('acero', [AceroController::class, 'index']);

//Formulario

//Route::get('/acero', [AceroController::class, 'index']);
//Route::post('/formulario', [AceroController::class, 'store']);
//Route::get('/formulario', [AceroController::class, 'create']);
Route::resource('aceros', AceroController::class);
Route::middleware(['web'])->group(function () {
    Route::resource('aceros',AceroController::class)->middleware('auth');
   
    
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('archivo', ArchivoController::class)->except(['edit','update'])->middleware('auth');


//Route::get('archivo', [ArchivoController::class, descargar]->name('descargar'));

Route::get('/archivo/descargar/{archivo}', [ArchivoController::class, 'descargar'])->name('archivo.descargar');
