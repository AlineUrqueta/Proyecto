<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor_Propuesta;
use App\Models\Profesor;
use App\Models\Propuesta;
use App\Models\Estudiante;

class ProfesorController extends Controller
{
    public function index(){
        $propuestas = Propuesta::all();
        return view('profesores.index',compact('propuestas'));
    }

    public function comment($estudiante_rut){
        $estudiante = Estudiante::where('rut',$estudiante_rut)->first();
        $propuesta = Propuesta::where('estudiante_rut',$estudiante_rut)->first();
        return view('profesores.comment',compact('estudiante','propuesta'));
    }

    public function guardarComentario(Request $request){
        $comentario = $request->input('comentario');
        
        // Guardar el comentario en la base de datos
        Profesor_Propuesta::create([
            'comentario' => $comentario
        ]);
        
        // Redireccionar a la página de comentarios exitosamente guardado
        return redirect()->route('profesores.index')->with('success', 'Comentario guardado exitosamente');
    }
}
