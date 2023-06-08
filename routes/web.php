<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PropuestaController;

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

//Administrador
Route::get('/admin',[AdminController::class,'index'])->name('administrador.admin');
Route::get('/admin',[PropuestaController::class,'showPropuesta'])->name('administrador.admin');
Route::post('/admin/estado/{propuesta_id}',[AdminController::class,'cambiarEstado'])->name('administrador.estado');

Route::get('/admin/estudiante',[AdminController::class,'showEstudiante'])->name('administrador.estudiante');
Route::post('/admin/estudiante',[AdminController::class,'storeEstudiante'])->name('administrador.storeEstudiante');

Route::get('/admin/profesor',[AdminController::class,'showProfesor'])->name('administrador.profesor');
Route::post('/admin/profesor',[AdminController::class,'storeProfesor'])->name('administrador.storeProfesor');


//Estudiante
Route::get('/estudiantes/{estudiante_rut}',[EstudianteController::class,'index'])->name('estudiantes.index');


//Propuesta
Route::get('/estudiante/{estudiante_rut}/propuesta',[PropuestaController::class,'add'])->name('estudiantes.propuesta');
Route::post('/estudiantes/{estudiante_rut}/propuesta',[PropuestaController::class,'store'])->name('estudiantes.store');
Route::get('/estudiantes/{estudiante_rut}/propuesta/{doc}',[PropuestaController::class,'descargar'])->name('propuesta.descargar');


Route::get('/estudiantes/{estudiante_rut}/estado/{propuesta_id}',[EstudianteController::class,'estado'])->name('estudiantes.estadoPropuesta');
Route::put('/estudiantes/{estudiante_rut}/estado/{propuesta_id}/update',[PropuestaController::class,'update'])->name('estudiantes.update');

Route::get('/estudiantes/{estudiante_rut}/retroalimentacion/{propuesta_id}',[EstudianteController::class,'retroalimentacion'])->name('estudiantes.retroalimentacion');



//Profesor