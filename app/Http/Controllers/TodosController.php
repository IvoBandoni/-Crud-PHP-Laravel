<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo


class TodosController extends Controller
{
    /**
     * index para mostrar todos los datos
     * store para guardar un todo
     * update para actualizar un todo
     * destroy para eliminar un todo
     * edit para mostrar el formulario de edicion
     */

    public function store(Request $request){

        //Validar campo con minimo 3 caracteres
        $request -> validate([
            'title' => 'required|min:3'
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos')->with('success','Tarea creada correctamente');

    }

}
