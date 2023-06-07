<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Storage;

class PropuestaController extends Controller
{
    public function store(Request $request){
        $propuesta = new Propuesta();
        $propuesta -> fecha = $request->fecha;
        $propuesta -> documento = $request->file('documento')->store('storage/public/propuestas');
        $propuesta ->estado = Null ;
        $propuesta ->estudiante_rut = Null ;
        $propuesta ->save();
        

        return redirect()->route('estudiantes.addPropuesta');
    }   

    public function showPropuesta(){
        $propuestas = Propuesta::all();
        $propuesta = new Propuesta();
        return view('administrador.admin',compact('propuestas','propuesta'));
    }
}
