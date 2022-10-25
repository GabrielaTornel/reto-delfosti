<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    //configurar la logica
    //index para mostrar los elementos 
    // store guardar 
    //update actalizar 
    //destroy eliminar 
    //edit edit formolario ediciion

    public function store(Request $request){
        $request -> validate([
            'search' => 'required|min:4'
        ]);
    }
}
