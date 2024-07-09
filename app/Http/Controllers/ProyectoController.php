<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(){
        $proyectos = Proyecto::orderby('id', 'asc')->get();
        return view('proyecto.index', compact('proyectos'));
    }

    // Formulario create
    public function create(){
        $clientes=Cliente::orderBy('id', 'asc')->get(); 
        return view('proyecto.create', compact('clientes'));
    }

    // Registrar en base de datos un proyectoro
    public function store(Request $request){
        $proyecto = new Proyecto();
        $proyecto->codigo = $request->codigo;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->cuantia = $request->cuantia;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->cliente_id = $request->cliente_id;
        $proyecto->save();
        // $proyecto->proyectoros()->attach($request->proyectoro_id);
        return redirect()->route('proyecto.index');
    }

    // Ver un registro
    public function show(Proyecto $proyecto){
        return view('proyecto.show',compact('proyecto'));
    }

    // Formulario editar un registro
    public function edit(Proyecto $proyecto){
        $clientes = Cliente::orderBy('id', 'asc')->get();
        return view('proyecto.edit', compact('proyecto','clientes'));
    }

    // Actualizar un registro
    public function update(Request $request, Proyecto $proyecto){
     
        $proyecto->codigo = $request->codigo;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->cuantia = $request->cuantia;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->cliente_id = $request->cliente_id;
        $proyecto->save();
        return redirect()->route('proyecto.index');
    }

    // Eliminar un registro
    public function destroy (Proyecto $proyecto){
         $proyecto->delete();
        return redirect()->route('proyecto.index');
    }
}
