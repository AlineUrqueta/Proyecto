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

    public function storeComentario(Request $request,$rut_estudiante,$rut_profesor,$id_propuesta){
        $profeProp = new Profesor_Propuesta();
        $profeProp->propuesta_id = $id_propuesta;
        $profeProp->profesor_rut = $rut_estudiante;
        $fechaHora = Carbon::now();
        $profeProp->fecha = $fechaHora->toDateString();
        $profeProp->hora = $fechaHora->toTimeString();
        $profeProp->comentario = $request->comentario;
        $profeProp->save();

        $profesor = Profesor::where('rut', $rut_estudiante)->first();
        $propuesta = new Propuesta();
        $propuestas = Propuesta::all();

        return view('profesores.index',compact('profesor','propuesta','propuestas'))->with('success', 'Comentario guardado exitosamente');
    }

    public function destroy($profesor_rut,$id_propuesta){
        $profeProp = Profesor_Propuesta::findMany([$id_propuesta,$profesor_rut]);      
        $profeProp->delete();
        
        $profesor = Profesor::where('rut', $profesor_rut)->first();
        $propuesta = new Propuesta();
        $propuestas = Propuesta::all();

        return redirect('profesores.index',compact('profesor','propuesta','propuestas'));
    }
}
