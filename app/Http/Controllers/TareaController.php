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

        $request->validate([
            'nombre' => 'required',
        ],
        [
            'nombre.required' => '¡El texto está vacío!',
        ]);

        $tarea = new Tarea;
        $tarea->nombre = $request->nombre;
        $tarea->save();

        return redirect('/task');
    }

    function eliminar($id){
        Tarea::destroy($id);
        return redirect('/');
    }

    function busqueda(){
        $tareas=Tarea::all();
        return view('busqueda', ['tareas' => $tareas]);
    }

    public function buscar(Request $request){

        if($request->get('buscador')){
            $tareas = Tarea::where("nombre", "LIKE", "%{$request->get('buscador')}%")
                ->get();
                return view('busqueda', ['tareas' => $tareas]);
        }else{
            $tareas = Tarea::all();  
            return view('busqueda', ['tareas' => $tareas]);
        }

    }
}
