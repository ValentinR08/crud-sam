<?php

namespace App\Http\Controllers;

use App\Models\formularioModel;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $formularios = formularioModel::all();
        return view('index', compact('formularios'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('formulario');

        
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $formulario = new formularioModel();
        $formulario->nombre = $request->nombre;
        $formulario->apellido = $request->apellido;
        $formulario->fecha_nacimiento = $request->fecha_nacimiento;
        $formulario->genero = $request->genero;
        $formulario->edad = $request->edad;
        $formulario->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(formularioModel $formularioModel)
    {
        //
        
        return view('showFormulario', compact('formularioModel'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(formularioModel $formularioModel)
    {
        //
        return view('editFormulario', compact('formularioModel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, formularioModel $formularioModel)
    {
        //
        $formularioModel->nombre = $request->nombre;
        $formularioModel->apellido = $request->apellido;
        $formularioModel->fecha_nacimiento = $request->fecha_nacimiento;
        $formularioModel->genero = $request->genero;
        $formularioModel->edad = $request->edad;
        $formularioModel->save();
        return redirect()->route('index')->with('success', 'Formulario actualizado');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(formularioModel $formularioModel)
    {
        //
        $formularioModel->delete();
        return back()->with('success', 'Formulario eliminado');
    }
}
