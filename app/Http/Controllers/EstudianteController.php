<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    
    public function index($estudiante_rut)
{
    $estudiante = Estudiante::where('rut', $estudiante_rut)->first();
    if (!$estudiante) {
        // Manejar el caso cuando no se encuentra el estudiante
        abort(404);
    }

    return view('estudiantes.index', compact('estudiante'));
}
    


    public function add(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.addPropuesta',compact('estudiantes'));
    }

    public function show(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.addPropuesta',compact('estudiantes'));
    }
    

    // public function estado(){
    //     $estudiantes = Estudiante::all();
    //     return view('estudiantes.estadoPropuesta',compact('estudiantes'));
    // }

    // public function retroalimentacion(){
    //     $estudiantes = Estudiante::all();
    //     return view('estudiantes.retroalimentacion',compact('estudiantes'));
    // }
    
    // public function show(Estudiante $estudiante){
    //     return view('estudiantes.show',compact('estudiante'));
    // }
}
