<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor_Propuesta;

class ProfesorController extends Controller
{
    public function index(){
        return view('profesores.index');
    }

}
