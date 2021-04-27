<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // se especifica la relacion de cursos con usuarios
    public function user(){
        // pertenece a 
        return $this->belongsTo(User::class);
    }

    //crear atributo virtual
    public function getExcerptAttribute()
    {
        // extraemos string con esta funcion para extraer el texto de la descripcion
        // y no pasarte de 800 caracteres
        return substr($this->description,0,80) . "...";
        
    }
}
