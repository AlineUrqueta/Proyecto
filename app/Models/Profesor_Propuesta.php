<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor_Propuesta extends Model
{
    use HasFactory;

    protected $table = 'profesores_propuestas';

    protected $fillable = [
        'comentario',
    ];

    public function propuestas()
    {
        return $this->belongsTo('App\Models\Propuesta');
    }

    public function profesores()
    {
        return $this->belongsTo('App\Models\Profesor');
    }
}






