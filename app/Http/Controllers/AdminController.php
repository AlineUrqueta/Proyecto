<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request;
use App\Models\Estudiante;

class AdminController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        return view('administrador.admin',compact('profesores'));
    }

    public function show(){
        $profesores = Profesor::all();
        $profesor = new Profesor();

        return view('administrador.profesor',compact('profesores','profesor'));
    }

    public function store(Request $request){
        $profesor = new Profesor();
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        
        $profesor->save();
        return redirect()->route('administrador.profesor');
        
        return view('administrador.admin');
    }

    public function showEstudiante(){
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
