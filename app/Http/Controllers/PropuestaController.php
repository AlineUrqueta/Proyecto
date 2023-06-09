<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;



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

    
   

    

    public function update($estudiante_rut, $propuesta_id, Request $request)
{
    $propuestas = Propuesta::where('estudiante_rut', $estudiante_rut)
    ->where('id', $propuesta_id)
    ->get();
    foreach ($propuestas as $propuesta) {
        $propuesta->fecha = $request->fecha;
        $propuesta->estudiante_rut = $estudiante_rut;

        if ($request->hasFile('documento')) {
            // Obtener el archivo actual
            $documentoActual = $propuesta->documento;

            // Eliminar el archivo actual del sistema de archivos
            Storage::delete('public/' . $documentoActual);

            // Guardar el nuevo archivo
            $documentoNuevo = $request->file('documento');
            $nombreDocumento = $documentoNuevo->getClientOriginalName();
            $documentoNuevo->storeAs('', $nombreDocumento, 'public');

            // Actualizar la propiedad del documento en el modelo
            $propuesta->documento = $nombreDocumento;
        }

        $propuesta->estado = 3; // Según lo conversado, 3 = Esperando revisión
        $propuesta->save();
    }

    return redirect()->route('estudiantes.estadoPropuesta', ['estudiante_rut' => $estudiante_rut, 'propuesta_id' => $propuesta_id]);
}






    
    




}
