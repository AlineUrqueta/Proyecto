<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
=======
use App\Http\Controllers\EstudianteController;
>>>>>>> aline

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
<<<<<<< HEAD

Route::get('/',[HomeController::class,'index'])->name('home.inicio');
Route::get('/admin',[AdminController::class,'index'])->name('administrador.admin');
=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/estudiantes',[EstudianteController::class,'index'])->name('estudiantes.index');
Route::get('/estudiantes/add',[EstudianteController::class,'add'])->name('estudiantes.addPropuesta');
Route::get('/estudiantes/estado',[EstudianteController::class,'estado'])->name('estudiantes.estadoPropuesta');
Route::get('/estudiantes/retroalimentacion',[EstudianteController::class,'retroalimentacion'])->name('estudiantes.retroalimentacion');

>>>>>>> aline
