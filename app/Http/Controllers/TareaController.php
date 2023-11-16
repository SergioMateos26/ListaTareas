<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    function listaTareas(){
       $tareas=Tarea::all();
        return view('listaTareas', ['tareas' => $tareas]);
    }    
    function task(){
        $tareas=Tarea::all();
         return view('nuevaTarea', ['tareas' => $tareas]);
     }

    function tarea(Request $request){

        $tarea = new Tarea;
        $tarea->nombre = $request->nombre;
        $tarea->save();

        return redirect('/');
    }

    function eliminar($id){
        Tarea::destroy($id);
        return redirect('/');
    }
}
