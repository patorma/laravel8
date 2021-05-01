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
    

    public function posts(){
        // tiene muchos posts el curso
        return $this->hasMany(Post::class);
    }

    //crear atributo virtual
    public function getExcerptAttribute()
    {
        // extraemos string con esta funcion para extraer el texto de la descripcion
        // y no pasarte de 800 caracteres
        return substr($this->description,0,80) . "...";
        
    }

    public function similar(){
        // busca de acuerdo al id de la categoria el curso que esta visualizando en ese momento con relacion con el usuario
        return $this->where('category_id',$this->category_id)->with('user')
        ->take(2)
        ->get();
    }
}
