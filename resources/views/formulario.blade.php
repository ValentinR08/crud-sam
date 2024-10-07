@extends('base')
@section('content')
    <form action="{{route('DatosFormulario')}}" method="post">
        @csrf
        <div class="form-group mt-5">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
        </div>
        <div class="form-group mt-5">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" >
        </div>
        <div class="form-group mt-5">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" >
        </div>
        <div class="form-group mt-5">
            <label for="genero">Género</label>
            <input type="text" class="form-control" id="genero" name="genero" >
        </div>
        <div class="form-group mt-5">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" >
        </div>
        <button type="submit" class=" btn btn-primary mt-5">Enviar</button>
    </form>
@endsection