<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrar Carrera - Super Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #6a0dad;
      --secondary-color: #ffffff;
      --accent-color: #f3e8ff;
      --text-dark: #2e2e2e;
      --text-light: #ffffff;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background-color: var(--secondary-color);
      color: var(--text-dark);
    }

    header {
      background: linear-gradient(90deg, #6a0dad, #8a2be2);
      color: var(--text-light);
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      font-size: 1.8rem;
      font-weight: 800;
    }

    nav a {
      color: var(--text-light);
      text-decoration: none;
      margin-left: 1.5rem;
      font-weight: 600;
      transition: opacity 0.2s;
    }

    nav a:hover {
      opacity: 0.8;
    }

    main {
      padding: 2rem 4%;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    .card {
      background-color: var(--accent-color);
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(106, 13, 173, 0.1);
      transition: transform 0.2s;
    }

    .card h2 {
      font-size: 1.3rem;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    label {
      display: block;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    input, select, textarea {
      width: 100%;
      padding: 0.6rem;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }

    button {
      padding: 0.8rem 1.5rem;
      background-color: var(--primary-color);
      color: var(--text-light);
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #4b0082;
    }

    .alert {
      padding: 1rem;
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
      border-radius: 8px;
      margin-bottom: 1rem;
    }

    footer {
      text-align: center;
      padding: 1rem;
      background-color: var(--primary-color);
      color: var(--text-light);
      margin-top: 3rem;
    }
  </style>
</head>
<body>
  <header>
    <h1>Registrar Carrera</h1>
    <nav>
      <a href="#">Inicio</a>
      <a href="#">Carreras</a>
      <a href="#">Usuarios</a>
      <a href="#">Reportes</a>
      <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button type="submit" style="background:none; border:none; color:inherit; cursor:pointer; font:inherit; padding:0;">
          Cerrar sesión
        </button>
      </form>
    </nav>
  </header>

  <main>
    <div class="card">
      <h2><i class="bi bi-pencil-square"></i> Nueva Carrera</h2>

      @if(session('message'))
        <div class="alert">{{ session('message') }}</div>
      @endif

      <form method="POST" action="{{ route('superadmin.carreras.store') }}">
        @csrf

        <div class="form-group">
          <label for="nombre">Nombre de la carrera</label>
          <input type="text" name="nombre" required>
        </div>

        <div class="form-group">
          <label for="descripcion">Descripción</label>
          <textarea name="descripcion" rows="4" required></textarea>
        </div>

        <div class="form-group">
          <label for="plan_estudios_url">URL del Plan de Estudios</label>
          <input type="url" name="plan_estudios_url">
        </div>

        <div class="form-group">
          <label for="director_id">Asignar Director</label>
          <select name="director_id" required>
            <option value="">Selecciona un director</option>
            @foreach($directores as $director)
              <option value="{{ $director->id }}">{{ $director->name }} ({{ $director->email }})</option>
            @endforeach
          </select>
        </div>

        <button type="submit">Registrar Carrera</button>
      </form>
    </div>
  </main>

  <footer>
    &copy; {{ date('Y') }} Universidad Politécnica. Todos los derechos reservados.
  </footer>
</body>
</html>
