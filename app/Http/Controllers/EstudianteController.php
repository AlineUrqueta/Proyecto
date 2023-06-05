<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function show(Estudiante $estudiante){
        return view('estudiantes.show',compact('estudiante'));
    }

    public function index(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.index',compact('estudiantes'));
    }

    public function add(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.addPropuesta',compact('estudiantes'));
    }

    public function estado(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.estadoPropuesta',compact('estudiantes'));
    }

    public function retroalimentacion(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.retroalimentacion',compact('estudiantes'));
    }
}
