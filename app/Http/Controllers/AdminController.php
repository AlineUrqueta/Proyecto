<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class AdminController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::all();
        return view('administrador.admin');
    }

    public function add(){
        return view('administrador.estudiante');
    }

    public function store(Request $request){
        $estudiante  = new Estudiante();
        $estudiante -> rut = $request->rut;
        $estudiante -> nombre = $request->nombre;
        $estudiante -> apellido = $request->apellido;
        $estudiante -> email = $request ->email;
        $estudiante -> save();
        return redirect()->route('administrador.estudiante');

    }
}
