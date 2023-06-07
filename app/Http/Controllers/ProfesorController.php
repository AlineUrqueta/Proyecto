<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor_Propuesta;

class ProfesorController extends Controller
{
    public function index(){
        return view('profesores.index');
    }
    public function comment(){
        return view('profesores.comment');
    }
    public function guardarComentario(Request $request)
    {
        $comentario = $request->input('comentario');
        
        // Guardar el comentario en la base de datos
        Profesor_Propuesta::create([
            'comentario' => $comentario
        ]);
        
        // Redireccionar a la página de comentarios exitosamente guardado
        return redirect()->route('profesores.index')->with('success', 'Comentario guardado exitosamente');
    }

}