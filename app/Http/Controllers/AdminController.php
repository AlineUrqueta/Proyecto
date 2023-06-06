<?php

namespace App\Http\Controllers;
namespace App\Models\Profesor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        
        return view('administrador.admin',compact('profesores'));
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
