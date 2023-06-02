<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    //Revisar
    protected $table = 'estudiantes';

    public function propuestas(){
        return $this->hasMany('App\Models\Propuesta');
    }

}


