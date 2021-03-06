@extends('layouts.plantilla')
@section('title','Editar usuario')
@section('body')
    <h1>Editar usuario</h1>

    <form action="{{route('usuarios.update', $usuario)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{old('nombre', $usuario->nombre)}}"">
        </div>
        @error('nombre')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Rut:</label>
            <input type="text" class="form-control" name="rut" value="{{ old('rut', $usuario->rut) }}">
        </div>
        @error('rut')<small>{
            { $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Rol:</label>
            <input type="text" class="form-control" name="rol" value="{{ old('rol', $usuario->id_rol) }}">
        </div>
        @error('rol')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Verificado:</label>
            <input type="text" class="form-control" name="verificado" value="{{ old('verificado', $usuario->verificado) }}">
        </div>
        @error('rol')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="email" class="form-control" name="correo" value="{{ old('correo', $usuario->correo) }}">
        </div>
        @error('correo')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Nueva contraseña:</label>
            <input type="password" class="form-control" name="nuevaContraseña">
        </div>
        @error('nuevaContraseña')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Contraseña:</label>
            <input type="password" class="form-control" name="contrasena">
        </div>
        @error('contrasena')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <button type="submit">Actualizar</button>
        </div>
    </form>
    <a href="{{ route('usuarios.index') }}">Volver a usuario</a>
    <a href="{{ route('usuarios.show', $usuario->id) }}">Volver a usuario</a>

@endsection