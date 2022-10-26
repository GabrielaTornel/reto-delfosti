<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;


class TodosController extends Controller
{
    //configurar la logica
    //index para mostrar los elementos 
    // store guardar 
    //update actalizar 
    //destroy eliminar 
    //edit edit formolario ediciion
public function index(Request $request)
{
    $texto= $request->get('texto'); //eliminar los espacios trim
    $todos=DB::table('todo')
    ->select('_id', 'name', 'slug') 
    ->where('name', 'LIKE', '%'. $texto.'%')
    ->where('id', 'LIKE', '%'. $texto.'%')
    ->orderBy('name', 'asc');
    // ->paginate(5);

    
    return view('todos.index', compact('todos','texto'));
    // return $todos;
}

    // public function store(Request $request){
    //     $request -> validate([
    //         'search' => 'required|min:4'
    //     ]);
    // }
}
