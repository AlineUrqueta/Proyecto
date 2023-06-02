<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table = 'profesores';
    
    public function profesor_propuesta(){
        return $this->hasMany('App\Models\Profesor_Propuesta');
    }
}
