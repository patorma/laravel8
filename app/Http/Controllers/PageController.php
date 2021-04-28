<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

        return view('index');
    }

    public function course(Course $course){
        // se coloca compact para no escribir un array
        // cuando la clave y el valor son iguales
        return view('course',compact('course'));
    }
}
