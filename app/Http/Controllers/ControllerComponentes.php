<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Componentes;


class ControllerComponentes extends Controller
{
    public function index() {
        $componentes = Componentes::all(); 
    
        return view('index', ['componentes' => $componentes]);
    }

    public function vistaAgregar() {
        return view('crear');
    }

    public function create(Request $request){
        Componentes::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/');
    }

    public function edit($id){
        $componentes = Componentes::find($id); 
        return view('editar', ['componentes' => $componentes]);
    }

    public function update(Componentes $componentes, Request $request){
        $componentes->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/');
    }

    public function delete($id){
        $componentes = Componentes::find($id);

        $componentes->delete();

        return redirect('/');
    }
}