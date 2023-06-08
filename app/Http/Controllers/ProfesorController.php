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
    public function index(){
        $propuestas = Propuesta::all();
        return view('profesores.index',compact('propuestas'));
    }

    public function comment($estudiante_rut){
        $estudiante = Estudiante::where('rut',$estudiante_rut)->first();
        $propuesta = Propuesta::where('estudiante_rut',$estudiante_rut)->first();
        return view('profesores.comment',compact('estudiante','propuesta'));
    }

    public function storeComentario(Request $request,$id_propuesta,$rut_profesor){
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
