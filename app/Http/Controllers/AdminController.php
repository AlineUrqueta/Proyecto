<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class AdminController extends Controller
{
    public function index(){
        
        return view('administrador.admin');
    }

    public function show(){
        $estudiantes = Estudiante::all();
        $estudiante = new Estudiante();
        return view('administrador.estudiante',compact('estudiante','estudiantes'));
    }


    public function storeEstudiante(Request $request){
        $estudiante  = new Estudiante();
        $estudiante -> rut = $request->rut;
        $estudiante -> nombre = $request->nombre;
        $estudiante -> apellido = $request->apellido;
        $estudiante -> email = $request ->email;
        $estudiante -> save();
        return redirect()->route('administrador.estudiante');

    }
}
