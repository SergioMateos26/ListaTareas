<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

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

Route::get('/', [TareaController::class, 'listaTareas'])->name('listaTareas');
Route::get('/task', [TareaController::class, 'task'])->name('task');
Route::get('/busqueda', [TareaController::class, 'busqueda'])->name('busqueda');
Route::get('/buscar', [TareaController::class, 'buscar'])->name('buscar');
Route::post('/tarea', [TareaController::class, 'tarea'])->name('tarea');
Route::delete('/tarea/{id}', [TareaController::class, 'eliminar'])->name('eliminar');