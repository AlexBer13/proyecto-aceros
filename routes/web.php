<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AceroController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\GoogleAuthController;


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
Route::get('aceros/pdf',[AceroController::class, 'pdf'])->name('aceros.pdf');
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
Route::get('/consulta', [AceroController::class, 'consulta']);

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);