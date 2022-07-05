<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

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
    return view('auth.register');
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

Route::get('/menusu', function () {
    return view('layouts.menu');
})->middleware('auth');

// RUTAS CURSO
Route::resource('cursos', CursoController::class)->middleware('auth');
Route::get('tomacursos', [CursoController::class, 'tomarcursos'])->name('tomacursos.tomarcursos')->middleware('auth');
