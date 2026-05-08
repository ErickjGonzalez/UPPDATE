@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Información de la Carrera</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #6a0dad;
      --accent-color: #f3e8ff;
      --text-dark: #2e2e2e;
      --text-light: #ffffff;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #fff;
      color: var(--text-dark);
    }

    .container {
      max-width: 900px;
      margin: 3rem auto;
      background-color: var(--accent-color);
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: var(--primary-color);
      margin-bottom: 2rem;
      text-align: center;
    }

    .info-item {
      margin-bottom: 1rem;
      padding: 1rem;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .info-item strong {
      display: block;
      font-weight: 600;
      margin-bottom: 0.3rem;
      color: var(--primary-color);
    }

    .info-item a {
      color: #0077cc;
      text-decoration: none;
    }

    .info-item a:hover {
      text-decoration: underline;
    }

    .no-carrera {
      text-align: center;
      font-weight: bold;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Información de la Carrera</h1>

    @if ($carrera)
      <div class="info-item">
        <strong>Nombre:</strong>
        {{ $carrera->nombre }}
      </div>

      <div class="info-item">
        <strong>Descripción:</strong>
        {{ $carrera->descripcion }}
      </div>

      <div class="info-item">
        <strong>Plan de estudios URL:</strong>
        <a href="{{ $carrera->plan_estudios_url }}" target="_blank">{{ $carrera->plan_estudios_url }}</a>
      </div>

      <div class="info-item">
        <strong>Coordinador:</strong>
        {{ $carrera->coordinador }}
      </div>

      <div class="info-item">
        <strong>Duración:</strong>
        {{ $carrera->duracion }}
      </div>

      <div class="info-item">
        <strong>Modalidad:</strong>
        {{ $carrera->modalidad }}
      </div>

      <div class="info-item">
        <strong>Perfil de ingreso:</strong>
        {{ $carrera->perfil_ingreso }}
      </div>

      <div class="info-item">
        <strong>Perfil de egreso:</strong>
        {{ $carrera->perfil_egreso }}
      </div>

      <div class="info-item">
        <strong>Áreas de especialización:</strong>
        {{ $carrera->areas_especializacion }}
      </div>

      <div class="info-item">
        <strong>Campo profesional:</strong>
        {{ $carrera->campo_profesional }}
      </div>

      <div class="info-item">
        <strong>Testimonios:</strong>
        {{ $carrera->testimonios }}
      </div>

    @else
      <p class="no-carrera">No tienes una carrera asignada.</p>
    @endif
  </div>
</body>
</html>
@endsection
