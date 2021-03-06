@extends('layouts.plantilla')

@section('title', 'Registro')

@section('body')
    <h1>Registrar inventario</h1>

    <form action="{{ route('inventarios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
        </div>
        @error('nombre')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Fruta:</label>
            <input type="text" class="form-control" name="frutas" value="{{ old('frutas') }}">
        </div>
        @error('frutas')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Cantidad:</label>
            <input type="text" class="form-control" name="cantidad" value="{{ old('cantidad') }}">
        </div>
        @error('cantidad')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Calidad:</label>
            <input type="text" class="form-control" name="calidad" value="{{ old('calidad') }}">
        </div>
        @error('frutas')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <button type="submit">Enviar</button>
        </div>
    </form>
    <div class="mb-3">
        <a href="{{ route('inventarios.index') }}">Volver a inventarios</a>
    </div>
    </form>
@endsection
