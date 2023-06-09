<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;
use Illuminate\Support\Facades\Storage;
use PDF;
use Illuminate\Support\Facades\Response;



class EstudianteController extends Controller
{
    public function index($estudiante_rut)
    {
        $estudiante = Estudiante::where('rut', $estudiante_rut)->first();
        $propuestas = Propuesta::where('estudiante_rut', $estudiante_rut)->get();
        return view('estudiantes.index', compact('estudiante', 'propuestas'));
    }

    public function estado($estudiante_rut, $propuesta_id)
    {
        $estudiante = Estudiante::where('rut', $estudiante_rut)->first();
        $propuesta = Propuesta::where('id', $propuesta_id)->first();
        return view('estudiantes.estadoPropuesta', compact('estudiante', 'propuesta'));
    }

    public function retroalimentacion($estudiante_rut, $propuesta_id)
    {
        $propuesta = Propuesta::where('id', $propuesta_id)->first();
        $estudiante = Estudiante::where('rut', $estudiante_rut)->first();
        return view('estudiantes.retroalimentacion', compact('estudiante', 'propuesta'));
    }

    public function descargar($estudiante_rut, $doc)
{
    $data = Propuesta::all();

    // Renderiza la vista exportpdf.blade.php con los datos de las propuestas
    $pdf = PDF::loadView('exportpdf', compact('data'));

    // Genera un nombre de archivo único para el PDF
    $fileName = 'propuestas_' . time() . '.pdf';

    // Guarda el PDF en el directorio de almacenamiento público
    $pdf->save(storage_path('app/public/' . $fileName));

    // Devuelve una respuesta de descarga para el usuario
    return $pdf->download(storage_path('app/public/' . $fileName));
   
}

}
