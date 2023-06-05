<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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
Route::get('/estudiantes',[EstudianteController::class,'index'])->name('estudiantes.index');
Route::get('/estudiantes/add',[EstudianteController::class,'add'])->name('estudiantes.addPropuesta');
Route::get('/estudiantes/estado',[EstudianteController::class,'estado'])->name('estudiantes.estadoPropuesta');
Route::get('/estudiantes/retroalimentacion',[EstudianteController::class,'retroalimentacion'])->name('estudiantes.retroalimentacion');

