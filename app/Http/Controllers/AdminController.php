<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request;

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
    }
}
