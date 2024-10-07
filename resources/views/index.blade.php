@extends('base')
@section('content')
    <h1 class="text-center mt-5">Formularios</h1>
    <a href="{{route('NewFormulario')}}" class="btn btn-primary">Nuevo Registro</a>
    <table class="table  text-white  table-bordered mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Género</th>
            <th scope="col">Edad</th>  
        </tr> 
        </thead>
        <tbody>
        
        </tbody>
    </table>
@endsection