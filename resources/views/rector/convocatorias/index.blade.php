<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Convocatorias y Eventos - UPPDATE</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-indigo: #3730a3;
      --dark-indigo: #312e81;
      --light-indigo: #e0e7ff;
      --lighter-indigo: #eff6ff;
      --text-dark: #1f2937;
      --text-gray: #6b7280;
      --white: #ffffff;
      --success-green: #10b981;
      --warning-yellow: #f59e0b;
      --info-blue: #3b82f6;
      --danger-red: #ef4444;
      --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      --radius-sm: 0.375rem;
      --radius-md: 0.5rem;
      --radius-lg: 0.75rem;
      --radius-xl: 1rem;
      --radius-2xl: 1.5rem;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #eff6ff 0%, #e0e7ff 50%, #dbeafe 100%);
      min-height: 100vh;
      color: var(--text-dark);
      line-height: 1.6;
    }

    /* Header y navegación - Mismo diseño */
    .main-header {
      background: var(--white);
      box-shadow: var(--shadow-md);
      position: sticky;
      top: 0;
      z-index: 100;
      padding: 1rem 0;
    }

    .header-content {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo-section {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .logo-icon {
      background: linear-gradient(135deg, var(--primary-indigo), var(--dark-indigo));
      color: var(--white);
      width: 50px;
      height: 50px;
      border-radius: var(--radius-md);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
    }

    .logo-text {
      font-weight: 800;
      font-size: 1.8rem;
      background: linear-gradient(to right, var(--primary-indigo), var(--dark-indigo));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .user-badge {
      background: linear-gradient(to right, var(--primary-indigo), var(--dark-indigo));
      color: var(--white);
      padding: 0.5rem 1rem;
      border-radius: var(--radius-full);
      font-weight: 600;
      font-size: 0.9rem;
      margin-left: 1rem;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }

    .nav-link {
      color: var(--text-dark);
      text-decoration: none;
      font-weight: 600;
      padding: 0.75rem 1.25rem;
      border-radius: var(--radius-lg);
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .nav-link:hover {
      background: var(--light-indigo);
      color: var(--primary-indigo);
      transform: translateY(-2px);
    }

    .nav-link.active {
      background: var(--primary-indigo);
      color: var(--white);
    }

    .logout-btn {
      background: transparent;
      border: 2px solid var(--primary-indigo);
      color: var(--primary-indigo);
      padding: 0.75rem 1.5rem;
      border-radius: var(--radius-lg);
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .logout-btn:hover {
      background: var(--primary-indigo);
      color: var(--white);
      transform: translateY(-2px);
    }

    /* Contenedor principal */
    .main-container {
      max-width: 1400px;
      margin: 3rem auto;
      padding: 0 2rem;
    }

    /* Hero section para Convocatorias */
    .events-hero {
      background: linear-gradient(135deg, #7c3aed, #8b5cf6);
      color: var(--white);
      border-radius: var(--radius-2xl);
      padding: 3rem 2.5rem;
      margin-bottom: 3rem;
      box-shadow: var(--shadow-lg);
      position: relative;
      overflow: hidden;
    }

    .events-hero::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 300px;
      height: 300px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 2rem;
    }

    .hero-text {
      flex: 1;
      min-width: 300px;
    }

    .page-title {
      font-size: 2.8rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
      background: linear-gradient(to right, #ffffff, #ede9fe);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .page-subtitle {
      font-size: 1.125rem;
      opacity: 0.9;
      margin-bottom: 1.5rem;
    }

    .event-stats {
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .stat-badge {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border-radius: var(--radius-xl);
      padding: 1rem 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      transition: all 0.3s ease;
    }

    .stat-badge:hover {
      background: rgba(255, 255, 255, 0.25);
      transform: translateY(-3px);
    }

    .stat-number {
      font-size: 1.8rem;
      font-weight: 800;
    }

    .stat-label {
      font-size: 0.9rem;
      opacity: 0.9;
    }

    .hero-actions {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      min-width: 250px;
    }

    .btn-primary {
      background: linear-gradient(to right, #ffffff, #f0e7ff);
      color: var(--primary-indigo);
      padding: 1rem 2rem;
      border: none;
      border-radius: var(--radius-lg);
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      text-decoration: none;
      text-align: center;
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-lg);
    }

    /* Panel de gestión */
    .management-panel {
      background: var(--white);
      border-radius: var(--radius-xl);
      padding: 2.5rem;
      box-shadow: var(--shadow-lg);
      margin-bottom: 3rem;
    }

    .panel-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .panel-title {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--text-dark);
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .panel-title i {
      color: var(--primary-indigo);
      font-size: 2rem;
    }

    .panel-subtitle {
      color: var(--text-gray);
      margin-top: 0.5rem;
      max-width: 600px;
    }

    .search-filter {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .search-box {
      position: relative;
      min-width: 250px;
    }

    .search-input {
      width: 100%;
      padding: 0.875rem 1rem 0.875rem 3rem;
      border: 2px solid #e5e7eb;
      border-radius: var(--radius-lg);
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .search-input:focus {
      outline: none;
      border-color: var(--primary-indigo);
      box-shadow: 0 0 0 3px rgba(55, 48, 163, 0.2);
    }

    .search-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-gray);
    }

    .filter-select {
      padding: 0.875rem 1rem;
      border: 2px solid #e5e7eb;
      border-radius: var(--radius-lg);
      font-size: 1rem;
      background: var(--white);
      color: var(--text-dark);
      cursor: pointer;
      min-width: 180px;
    }

    /* Mensajes de éxito */
    .success-message {
      background: linear-gradient(to right, var(--success-green), #34d399);
      color: var(--white);
      padding: 1.25rem;
      border-radius: var(--radius-lg);
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-weight: 600;
      box-shadow: var(--shadow-md);
      animation: slideIn 0.5s ease-out;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .success-icon {
      font-size: 1.5rem;
    }

    /* Tabla mejorada */
    .events-table-container {
      overflow-x: auto;
      border-radius: var(--radius-lg);
      border: 1px solid #e5e7eb;
      margin-top: 1.5rem;
    }

    .events-table {
      width: 100%;
      border-collapse: collapse;
      min-width: 900px;
    }

    .events-table thead {
      background: linear-gradient(to right, var(--light-indigo), #dbeafe);
    }

    .events-table th {
      padding: 1.25rem 1.5rem;
      text-align: left;
      font-weight: 700;
      color: var(--dark-indigo);
      font-size: 0.95rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      border-bottom: 2px solid var(--primary-indigo);
    }

    .events-table tbody tr {
      border-bottom: 1px solid #e5e7eb;
      transition: all 0.3s ease;
    }

    .events-table tbody tr:hover {
      background: var(--lighter-indigo);
      transform: translateY(-2px);
      box-shadow: var(--shadow-sm);
    }

    .events-table td {
      padding: 1.25rem 1.5rem;
      vertical-align: middle;
    }

    /* Evento info */
    .event-info {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
    }

    .event-icon {
      width: 50px;
      height: 50px;
      border-radius: var(--radius-md);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
      flex-shrink: 0;
    }

    .icon-convocatoria {
      background: linear-gradient(135deg, #8b5cf6, #a78bfa);
    }

    .icon-evento {
      background: linear-gradient(135deg, #10b981, #34d399);
    }

    .icon-seminario {
      background: linear-gradient(135deg, #f59e0b, #fbbf24);
    }

    .event-details {
      flex: 1;
    }

    .event-title {
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
      color: var(--text-dark);
    }

    .event-description {
      font-size: 0.9rem;
      color: var(--text-gray);
      line-height: 1.5;
      margin-bottom: 0.5rem;
    }

    /* Badge de tipo */
    .type-badge {
      display: inline-block;
      padding: 0.4rem 1rem;
      border-radius: var(--radius-full);
      font-size: 0.85rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .type-convocatoria {
      background: linear-gradient(to right, #8b5cf6, #a78bfa);
      color: white;
    }

    .type-evento {
      background: linear-gradient(to right, #10b981, #34d399);
      color: white;
    }

    .type-seminario {
      background: linear-gradient(to right, #f59e0b, #fbbf24);
      color: white;
    }

    /* Fechas */
    .date-info {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .date-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.9rem;
    }

    .date-label {
      font-weight: 600;
      color: var(--text-gray);
      min-width: 80px;
    }

    .date-value {
      color: var(--text-dark);
      font-weight: 500;
    }

    .date-status {
      display: inline-block;
      padding: 0.25rem 0.75rem;
      border-radius: var(--radius-full);
      font-size: 0.75rem;
      font-weight: 600;
      margin-top: 0.5rem;
    }

    .status-active {
      background: linear-gradient(to right, #10b981, #34d399);
      color: white;
    }

    .status-upcoming {
      background: linear-gradient(to right, #f59e0b, #fbbf24);
      color: var(--text-dark);
    }

    .status-finished {
      background: linear-gradient(to right, #6b7280, #9ca3af);
      color: white;
    }

    /* Acciones */
    .actions-cell {
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
    }

    .btn-action {
      padding: 0.6rem 1rem;
      border: none;
      border-radius: var(--radius-md);
      font-weight: 600;
      font-size: 0.9rem;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
      min-width: 100px;
      justify-content: center;
    }

    .btn-edit {
      background: linear-gradient(to right, var(--warning-yellow), #fbbf24);
      color: var(--text-dark);
    }

    .btn-edit:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
    }

    .btn-delete {
      background: linear-gradient(to right, var(--danger-red), #f87171);
      color: white;
    }

    .btn-delete:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
    }

    /* Estados vacíos */
    .empty-state {
      text-align: center;
      padding: 4rem 2rem;
      color: var(--text-gray);
    }

    .empty-icon {
      font-size: 4rem;
      color: #d1d5db;
      margin-bottom: 1.5rem;
    }

    .empty-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .empty-text {
      margin-bottom: 2rem;
      max-width: 400px;
      margin-left: auto;
      margin-right: auto;
    }

    /* Footer */
    .main-footer {
      background: var(--white);
      border-top: 1px solid #e5e7eb;
      padding: 2rem 0;
      margin-top: 4rem;
    }

    .footer-content {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 2rem;
      text-align: center;
      color: var(--text-gray);
    }

    .footer-links {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-bottom: 1rem;
    }

    .footer-link {
      color: var(--primary-indigo);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .footer-link:hover {
      color: var(--dark-indigo);
      text-decoration: underline;
    }

    .copyright {
      font-size: 0.875rem;
    }

    /* Responsividad */
    @media (max-width: 1024px) {
      .header-content {
        padding: 0 1rem;
      }
      
      .events-hero {
        padding: 2.5rem 2rem;
      }
      
      .page-title {
        font-size: 2.2rem;
      }
      
      .management-panel {
        padding: 2rem;
      }
    }

    @media (max-width: 768px) {
      .header-content {
        flex-direction: column;
        gap: 1rem;
        padding: 1rem;
      }
      
      .nav-links {
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.75rem;
      }
      
      .hero-content {
        flex-direction: column;
        text-align: center;
      }
      
      .event-stats {
        justify-content: center;
      }
      
      .panel-header {
        flex-direction: column;
        align-items: stretch;
      }
      
      .search-filter {
        flex-direction: column;
      }
      
      .search-box, .filter-select {
        min-width: 100%;
      }
      
      .actions-cell {
        flex-direction: column;
      }
      
      .btn-action {
        min-width: 100%;
      }
      
      .event-info {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .footer-links {
        flex-direction: column;
        gap: 0.75rem;
      }
    }
  </style>
</head>
<body>
  <!-- Header con navegación -->
  <header class="main-header">
    <div class="header-content">
      <div class="logo-section">
        <div class="logo-icon">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="logo-text">UPPDATE</div>
        <div class="user-badge">
          <i class="fas fa-user-tie"></i> Rector
        </div>
      </div>
      
      <div class="nav-links">
        <a href="{{ route('rector.inicio') }}" class="nav-link">
          <i class="fas fa-home"></i>
          Inicio
        </a>
        <a href="{{ route('rector.carreras') }}" class="nav-link">
          <i class="fas fa-list"></i>
          Carreras
        </a>
        <a href="#" class="nav-link">
          <i class="fas fa-chart-bar"></i>
          Reportes
        </a>
        <a href="{{ route('rector.convocatorias.index') }}" class="nav-link active">
          <i class="fas fa-calendar-alt"></i>
          Convocatorias
        </a>
        
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
          @csrf
          <button type="submit" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i>
            Cerrar Sesión
          </button>
        </form>
      </div>
    </div>
  </header>

  <!-- Contenido principal -->
  <main class="main-container">
    <!-- Hero section para Convocatorias -->
    <section class="events-hero">
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="page-title">Convocatorias y Eventos</h1>
          <p class="page-subtitle">Gestión integral de actividades académicas, eventos institucionales y convocatorias</p>
          
          <div class="event-stats">
            <div class="stat-badge">
              <div class="stat-number">{{ $eventosConvocatorias->count() }}</div>
              <div class="stat-label">Total Actividades</div>
            </div>
            
            <div class="stat-badge">
              @php
                $convocatoriasCount = $eventosConvocatorias->where('tipo', 'convocatoria')->count();
              @endphp
              <div class="stat-number">{{ $convocatoriasCount }}</div>
              <div class="stat-label">Convocatorias</div>
            </div>
            
            <div class="stat-badge">
              @php
                $eventosCount = $eventosConvocatorias->where('tipo', 'evento')->count();
              @endphp
              <div class="stat-number">{{ $eventosCount }}</div>
              <div class="stat-label">Eventos</div>
            </div>
          </div>
        </div>
        
        <div class="hero-actions">
          <a href="{{ route('rector.convocatorias.create') }}" class="btn-primary">
            <i class="fas fa-plus-circle"></i>
            Nueva Convocatoria/Evento
          </a>
          <p style="font-size: 0.9rem; opacity: 0.9; text-align: center;">Crear nuevas actividades académicas</p>
        </div>
      </div>
    </section>

    <!-- Mensajes de éxito -->
    @if(session('success'))
      <div class="success-message">
        <i class="fas fa-check-circle success-icon"></i>
        <div>{{ session('success') }}</div>
      </div>
    @endif

    <!-- Panel de gestión -->
    <div class="management-panel">
      <div class="panel-header">
        <div>
          <h2 class="panel-title">
            <i class="fas fa-calendar-check"></i>
            Mis Convocatorias y Eventos
          </h2>
          <p class="panel-subtitle">Gestiona todas las actividades académicas e institucionales programadas</p>
        </div>
        
        <div class="search-filter">
          <div class="search-box">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Buscar por título o descripción..." id="searchInput">
          </div>
          
          <select class="filter-select" id="typeFilter">
            <option value="">Todos los tipos</option>
            <option value="convocatoria">Convocatorias</option>
            <option value="evento">Eventos</option>
            <option value="seminario">Seminarios</option>
          </select>
        </div>
      </div>

      <div class="events-table-container">
        @if($eventosConvocatorias->count() > 0)
          <table class="events-table" id="eventsTable">
            <thead>
              <tr>
                <th style="width: 30%;">Actividad</th>
                <th style="width: 20%;">Tipo</th>
                <th style="width: 25%;">Fechas</th>
                <th style="width: 25%;">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($eventosConvocatorias as $evento)
                @php
                  $today = \Carbon\Carbon::now();
                  $startDate = \Carbon\Carbon::parse($evento->fecha_inicio);
                  $endDate = \Carbon\Carbon::parse($evento->fecha_fin);
                  
                  $statusClass = 'status-upcoming';
                  $statusText = 'Próximo';
                  
                  if ($today->between($startDate, $endDate)) {
                    $statusClass = 'status-active';
                    $statusText = 'En curso';
                  } elseif ($today->gt($endDate)) {
                    $statusClass = 'status-finished';
                    $statusText = 'Finalizado';
                  }
                  
                  $iconClass = 'icon-evento';
                  $typeClass = 'type-evento';
                  
                  if ($evento->tipo === 'convocatoria') {
                    $iconClass = 'icon-convocatoria';
                    $typeClass = 'type-convocatoria';
                  } elseif ($evento->tipo === 'seminario') {
                    $iconClass = 'icon-seminario';
                    $typeClass = 'type-seminario';
                  }
                @endphp
                <tr class="fade-in">
                  <td>
                    <div class="event-info">
                      <div class="event-icon {{ $iconClass }}">
                        @if($evento->tipo === 'convocatoria')
                          <i class="fas fa-bullhorn"></i>
                        @elseif($evento->tipo === 'seminario')
                          <i class="fas fa-chalkboard-teacher"></i>
                        @else
                          <i class="fas fa-calendar-alt"></i>
                        @endif
                      </div>
                      <div class="event-details">
                        <div class="event-title">{{ $evento->titulo }}</div>
                        @if($evento->descripcion)
                          <div class="event-description">
                            {{ Str::limit($evento->descripcion, 80) }}
                          </div>
                        @endif
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="type-badge {{ $typeClass }}">
                      {{ ucfirst($evento->tipo) }}
                    </span>
                  </td>
                  <td>
                    <div class="date-info">
                      <div class="date-item">
                        <span class="date-label">Inicio:</span>
                        <span class="date-value">{{ $startDate->format('d/m/Y') }}</span>
                      </div>
                      <div class="date-item">
                        <span class="date-label">Fin:</span>
                        <span class="date-value">{{ $endDate->format('d/m/Y') }}</span>
                      </div>
                      <span class="date-status {{ $statusClass }}">
                        <i class="fas fa-circle" style="font-size: 0.6rem;"></i>
                        {{ $statusText }}
                      </span>
                    </div>
                  </td>
                  <td class="actions-cell">
                    <a href="{{ route('rector.convocatorias.edit', $evento->id) }}" class="btn-action btn-edit">
                      <i class="fas fa-edit"></i>
                      Editar
                    </a>
                    <form action="{{ route('rector.convocatorias.destroy', $evento->id) }}" method="POST" style="display: inline;" onsubmit="return confirmDelete()">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn-action btn-delete">
                        <i class="fas fa-trash-alt"></i>
                        Eliminar
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <div class="empty-state">
            <div class="empty-icon">
              <i class="fas fa-calendar-times"></i>
            </div>
            <h3 class="empty-title">No hay convocatorias ni eventos</h3>
            <p class="empty-text">Comienza creando nuevas actividades académicas o eventos institucionales.</p>
            <a href="{{ route('rector.convocatorias.create') }}" class="btn-primary" style="display: inline-flex; width: auto;">
              <i class="fas fa-plus-circle"></i>
              Crear Primera Actividad
            </a>
          </div>
        @endif
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="footer-content">
      <div class="footer-links">
        <a href="{{ route('rector.inicio') }}" class="footer-link">Inicio</a>
        <a href="#" class="footer-link">Calendario Académico</a>
        <a href="#" class="footer-link">Eventos Institucionales</a>
        <a href="#" class="footer-link">Políticas de Eventos</a>
      </div>
      <p class="copyright">© {{ date('Y') }} Universidad Politécnica - Gestión de Eventos</p>
    </div>
  </footer>

  <script>
    // Confirmación de eliminación
    function confirmDelete() {
      return confirm('¿Estás seguro de eliminar esta convocatoria/evento? Esta acción no se puede deshacer.');
    }

    // Filtrado y búsqueda en tiempo real
    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const typeFilter = document.getElementById('typeFilter');
      const tableRows = document.querySelectorAll('#eventsTable tbody tr');
      
      function filterEvents() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedType = typeFilter.value;
        
        tableRows.forEach(row => {
          const eventTitle = row.cells[0].textContent.toLowerCase();
          const eventType = row.cells[1].textContent.toLowerCase();
          
          const matchesSearch = eventTitle.includes(searchTerm);
          const matchesType = !selectedType || eventType.includes(selectedType);
          
          if (matchesSearch && matchesType) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      }
      
      if (searchInput) {
        searchInput.addEventListener('input', filterEvents);
      }
      
      if (typeFilter) {
        typeFilter.addEventListener('change', filterEvents);
      }
      
      // Animación para filas al cargar
      tableRows.forEach((row, index) => {
        row.style.animationDelay = `${index * 0.05}s`;
        row.classList.add('fade-in');
      });
      
      // Efectos hover para botones de acción
      const actionButtons = document.querySelectorAll('.btn-action');
      actionButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-2px)';
        });
        
        button.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0)';
        });
      });
      
      // Efecto hover para filas de la tabla
      const tableRowsAll = document.querySelectorAll('.events-table tbody tr');
      tableRowsAll.forEach(row => {
        row.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-2px)';
          this.style.boxShadow = 'var(--shadow-md)';
        });
        
        row.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0)';
          this.style.boxShadow = 'none';
        });
      });
    });
  </script>
</body>
</html>