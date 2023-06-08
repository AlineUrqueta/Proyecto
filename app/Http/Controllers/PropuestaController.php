<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Storage;

class PropuestaController extends Controller
{

    public function store(Request $request,$estudiante_rut){
        $propuesta = new Propuesta();
        $propuesta -> fecha = $request->fecha;
        $propuesta ->estudiante_rut =$estudiante_rut ;
    
        $propuesta -> documento = $request->file('documento');
        $nom_doc = $propuesta->documento->getClientOriginalName();
        $propuesta -> documento->storeAs('',$nom_doc.".".$propuesta->documento->getClientOriginalExtension(),'public');

        $propuesta ->estado = 3 ; // Segun lo conversado 3 = Esperando revision
        $propuesta ->save();
        return redirect()->route('estudiantes.propuesta',$estudiante_rut);
    }   

    public function showPropuesta(){
        $propuestas = Propuesta::all();
        $propuesta = new Propuesta();
        return view('administrador.admin',compact('propuestas','propuesta'));
    }
    

    public function add($estudiante_rut){
        
        $propuestas = Propuesta::where('estudiante_rut', $estudiante_rut)->get();
        $estudiante = Estudiante::where('rut', $estudiante_rut)->first();
        return view('estudiantes.addPropuesta',compact('estudiante','propuestas'));
    }

    public function descargar($estudiante_rut,$propuesta_id){
        $doc = Propuesta::findOrFail($propuesta_id);
        $ruta_doc = $doc -> documento;
        if (Storage::disk('public')->exist($ruta_doc)){
            return Storage::disk('public')->download($ruta_doc);
        }
                //return Storage::download($ruta_doc);

    }

    public function update($estudiante_rut,$propuesta_id,Request $request){
        $propuesta = Propuesta::where('estudiante_rut', $estudiante_rut)->get();
        $propuesta -> fecha = $request->fecha;
        $propuesta ->estudiante_rut =$estudiante_rut ;

        if(isset($request->documento)){

            Storage::delete($propuesta->documento);

            
            $propuesta -> documento = $request->file('documento');
            $nom_doc = $propuesta->documento->getClientOriginalName();
            $propuesta -> documento->storeAs('',$nom_doc.".".$propuesta->documento->getClientOriginalExtension(),'public');
            
        }
  
        $propuesta ->estado = 3 ; // Segun lo conversado 3 = Esperando revision
        $propuesta ->save();
        return redirect()-> route('estudiantes.estadoPropuesta');

    }






}
