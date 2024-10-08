@extends('base')
@section('content')
    <h1 class="text-center mt-5">Formularios</h1>
    <a href="{{route('NewFormulario')}}" class="btn btn-primary">Nuevo Registro</a>
    @if (session('success'))
        <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>   
    @endif
   
    <table class="table  text-white  table-bordered mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Género</th>
            <th scope="col">Edad</th>
            <th scope="col">    </th>
            <th scope="col">    </th>
            <th scope="col">    </th>
        </tr> 
        </thead>
        <tbody>
            @foreach($formularios as $formulario)
            <tr class="table-active text-white">
                    <td scope="row">{{$formulario->id}}</td>
                    <td>{{$formulario->nombre}}</td>
                    <td>{{$formulario->apellido}}</td>
                    <td>{{$formulario->fecha_nacimiento}}</td>
                    <td>{{$formulario->genero}}</td>
                    <td>{{$formulario->edad}}</td>
                    <td><a href="{{route('ShowFormulario',$formulario->id)}}" class="btn btn-primary">Ver</a></td>
                    <td><a href="{{route('EditFormulario',$formulario->id)}}" class="btn btn-primary">Editar</a></td>
                    <td><a href="{{route('DeleteFormulario',$formulario->id)}}" class="btn btn-danger">Eliminar</a></td>
            </tr>
            @endforeach 
        </tbody>
    </table>
@endsection