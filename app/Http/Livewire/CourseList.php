<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseList extends Component
{
    public function render()
    {
        //  esta clase renderiza lo que esta en esta carpeta
        // al ser una vista puedo pasar elementos a esta vista
        //la siguiente consulta trae los ultimos cursos con usuarios(get)
        //->latest() obtiene el conjunto más reciente de datos de la base de datos.
        // En resumen, ordena los datos obtenidos, utilizando la columna 
        //'created_at' para ordenar cronológicamente los datos.
        return view('livewire.course-list',[
            'courses' => Course::latest()->with('user')->take(9)->get()
        ]);
    }
}
