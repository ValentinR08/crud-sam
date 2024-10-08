@extends('base')
@section('content')
<h1 class="text-center mt-5">Formulario</h1>
<div>
    <a href="{{route('index')}}" class="btn btn-primary">Volver</a>
</div>
<div class="mt-5 text-center text-white">
    <div class="form-group mt-3">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $formularioModel->nombre) }}" class="form-control">
    </div>

    <div class="form-group mt-3">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" value="{{ old('apellido', $formularioModel->apellido) }}" class="form-control">
    </div>

    <div class="form-group mt-3">
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $formularioModel->fecha_nacimiento) }}" class="form-control">
    </div>

    <div class="form-group mt-3">
        <label for="genero">Género</label>
        <input type="text" id="genero" name="genero" value="{{ old('genero', $formularioModel->genero) }}" class="form-control">
    </div>

    <div class="form-group mt-3">
        <label for="edad">Edad</label>    
        <input type="number" id="edad" name="edad" value="{{ old('edad', $formularioModel->edad) }}" class="form-control">
    </div>
</div>
@endsection