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
        return view('index');
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

        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(formularioModel $formularioModel)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(formularioModel $formularioModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, formularioModel $formularioModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(formularioModel $formularioModel)
    {
        //
    }
}
