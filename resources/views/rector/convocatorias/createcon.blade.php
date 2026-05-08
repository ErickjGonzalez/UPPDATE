@extends('layouts.app')

@section('content')
<style>
    .form-container {
        max-width: 700px;
        margin: 2rem auto;
        background-color: #f3e8ff;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(106, 13, 173, 0.15);
        font-family: 'Inter', sans-serif;
    }

    .form-container h1 {
        color: #6a0dad;
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .form-container label {
        display: block;
        font-weight: 600;
        margin-top: 1rem;
        color: #2e2e2e;
    }

    .form-container input,
    .form-container textarea,
    .form-container select {
        width: 100%;
        padding: 0.75rem;
        margin-top: 0.4rem;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 1rem;
        font-family: 'Inter', sans-serif;
    }

    .form-container button {
        margin-top: 1.5rem;
        padding: 0.8rem 1.5rem;
        background-color: #6a0dad;
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .form-container button:hover {
        background-color: #4b0082;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        border: 1px solid #c3e6cb;
    }
</style>

<div class="form-container">
    <h1>Crear Convocatoria / Evento</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('rector.convocatorias.store') }}" method="POST">
        @csrf

        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required>

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="descripcion" rows="4" required>{{ old('descripcion') }}</textarea>

        <label for="fecha_inicio">Fecha de Inicio</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio') }}" required>

        <label for="fecha_fin">Fecha de Fin</label>
        <input type="date" name="fecha_fin" id="fecha_fin" value="{{ old('fecha_fin') }}" required>

        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo" required>
            <option value="">-- Selecciona una opción --</option>
            <option value="evento" {{ old('tipo') == 'evento' ? 'selected' : '' }}>Evento</option>
            <option value="convocatoria" {{ old('tipo') == 'convocatoria' ? 'selected' : '' }}>Convocatoria</option>
        </select>

        <button type="submit">Crear</button>
    </form>
</div>
@endsection
