<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;
use App\Models\Profesor_Propuesta;
use App\Models\Profesor;

class EstudianteController extends Controller
{
    
     public function index($estudiante_rut){
        $estudiante = Estudiante::where('rut', $estudiante_rut)->first();
        $propuestas = Propuesta::where('estudiante_rut', $estudiante_rut)->get();
        return view('estudiantes.index', compact('estudiante','propuestas'));
    }
    


    public function add(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.addPropuesta',compact('estudiantes'));
    }

    public function show(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.addPropuesta',compact('estudiantes'));
    }
    

    public function estado($estudiante_rut,$propuesta_id){

        $estudiante = Estudiante::where('rut', $estudiante_rut)->first();
        $propuesta = Propuesta::where('id',$propuesta_id)->first();
        return view('estudiantes.estadoPropuesta',compact('estudiante','propuesta'));
    }

    public function retroalimentacion($estudiante_rut,$propuesta_id){
        $propuesta = Propuesta::where('id',$propuesta_id)->first();
        $estudiante = Estudiante::where('rut', $estudiante_rut)->first();
        $profesor_propuesta = Profesor_Propuesta::where('propuesta_id',$propuesta_id)->first();
        //$profesor = Profesor::where('rut',$profesor_propuesta->profesor_rut)->first();
        return view('estudiantes.retroalimentacion',compact('estudiante','propuesta','profesor_propuesta'));
    }
    
    
}
