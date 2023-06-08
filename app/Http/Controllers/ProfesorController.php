<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Profesor_Propuesta;
use App\Models\Profesor;
use App\Models\Propuesta;
use App\Models\Estudiante;

class ProfesorController extends Controller
{
    public function index($profesor_rut){
        $profesor = Profesor::where('rut', $profesor_rut)->first();
        $propuesta = new Propuesta();
        $propuestas = Propuesta::all();
    
        return view('profesores.index', compact('profesor','propuesta','propuestas'));
    }


    public function comment($profesor_rut,$estudiante_rut){
        $profesor = Profesor::where('rut',$profesor_rut)->first();
        $estudiante = Estudiante::where('rut',$estudiante_rut)->first();
        $propuesta = Propuesta::where('estudiante_rut',$estudiante_rut)->first();
        return view('profesores.comment',compact('profesor','estudiante','propuesta'));
    }

    public function storeComentario(Request $request,$rut_profesor,$id_propuesta){
        $profeProp = new Profesor_Propuesta();
        $profeProp->propuesta_id = $id_propuesta;
        $profeProp->profesor_rut = $rut_profesor;
        $fechaHora = Carbon::now();
        $profeProp->fecha = $fechaHora->toDateString();
        $profeProp->hora = $fechaHora->toTimeString();
        $profeProp->comentario = $request->comentario;
        
        $profeProp->save();
        return redirect()->route('profesores.comment')->with('success', 'Comentario guardado exitosamente');

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
