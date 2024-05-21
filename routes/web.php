<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario\InfoPersonalUserController;
use App\Http\Controllers\Usuario\DireccionUserController;
use App\Http\Controllers\Usuario\ContactoUserController;
use App\Http\Controllers\Usuario\InfoAcademicaUserController;
use App\Http\Controllers\Usuario\ExperienciaLaboralUserController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('profile',[UsuarioController::class,'profile']);
    Route::resource('informacion-personal', InfoPersonalUserController::class);
    Route::resource('direccion', DireccionUserController::class);
    Route::resource('contacto', ContactoUserController::class);
    Route::resource('informacion-academica', InfoAcademicaUserController::class);
    Route::resource('experiencia-laboral', ExperienciaLaboralUserController::class);

});

Route::resource('mantenimiento/promocion','App\Http\Controllers\Admin\mantenimiento\PromocionAdminController');
