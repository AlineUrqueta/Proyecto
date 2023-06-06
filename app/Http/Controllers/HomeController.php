<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use App\Models\Estudiante;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        $estudiantes = Estudiante::all();
        return view('home.inicio',compact('profesores','estudiantes'));
    }
}
