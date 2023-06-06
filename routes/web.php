<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;

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

Route::get('/',[HomeController::class,'index'])->name('home.inicio');
Route::get('/admin',[AdminController::class,'index'])->name('administrador.admin');

Route::get('/estudiantes',[EstudianteController::class,'index'])->name('estudiantes.index');
Route::get('/estudiantes/add',[EstudianteController::class,'add'])->name('estudiantes.addPropuesta');
Route::get('/estudiantes/estado',[EstudianteController::class,'estado'])->name('estudiantes.estadoPropuesta');
Route::get('/estudiantes/retroalimentacion',[EstudianteController::class,'retroalimentacion'])->name('estudiantes.retroalimentacion');

Route::get('/profesores',[ProfesorController::class,'index'])->name('profesores.index');

Route::get('/profesores/comment',[ProfesorController::class,'comment'])->name('profesores.comment');

