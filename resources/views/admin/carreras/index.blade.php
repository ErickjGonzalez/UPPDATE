<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gestión de Carreras - UPPDATE</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-purple: #6a0dad;
      --dark-purple: #4b0082;
      --light-purple: #f3e8ff;
      --lighter-purple: #f9f5ff;
      --text-dark: #1f2937;
      --text-gray: #6b7280;
      --white: #ffffff;
      --success-green: #10b981;
      --warning-yellow: #f59e0b;
      --danger-red: #ef4444;
      --info-blue: #3b82f6;
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
      background: linear-gradient(135deg, #f9f5ff 0%, #f0e6ff 50%, #e9d8fd 100%);
      min-height: 100vh;
      color: var(--text-dark);
      line-height: 1.6;
    }

    /* Header y navegación - Mismo diseño del primer código */
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
      background: linear-gradient(135deg, var(--primary-purple), var(--dark-purple));
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
      background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .admin-badge {
      background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
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
      background: var(--light-purple);
      color: var(--primary-purple);
      transform: translateY(-2px);
    }

    .nav-link.active {
      background: var(--primary-purple);
      color: var(--white);
    }

    .logout-btn {
      background: transparent;
      border: 2px solid var(--primary-purple);
      color: var(--primary-purple);
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
      background: var(--primary-purple);
      color: var(--white);
      transform: translateY(-2px);
    }

    /* Contenedor principal */
    .main-container {
      max-width: 1400px;
      margin: 3rem auto;
      padding: 0 2rem;
    }

    /* Hero section para Gestión de Carreras */
    .careers-hero {
      background: linear-gradient(135deg, #7c3aed, #8b5cf6);
      color: var(--white);
      border-radius: var(--radius-2xl);
      padding: 3rem 2.5rem;
      margin-bottom: 3rem;
      box-shadow: var(--shadow-lg);
      position: relative;
      overflow: hidden;
    }

    .careers-hero::before {
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

    .career-stats {
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
      color: var(--primary-purple);
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
      border-color: var(--primary-purple);
      box-shadow: 0 0 0 3px rgba(106, 13, 173, 0.2);
    }

    .search-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-gray);
    }

    /* Tabla mejorada para carreras */
    .careers-table-container {
      overflow-x: auto;
      border-radius: var(--radius-lg);
      border: 1px solid #e5e7eb;
      margin-top: 1.5rem;
    }

    .careers-table {
      width: 100%;
      border-collapse: collapse;
      min-width: 800px;
    }

    .careers-table thead {
      background: linear-gradient(to right, var(--light-purple), #e9d8fd);
    }

    .careers-table th {
      padding: 1.25rem 1.5rem;
      text-align: left;
      font-weight: 700;
      color: var(--dark-purple);
      font-size: 0.95rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      border-bottom: 2px solid var(--primary-purple);
    }

    .careers-table tbody tr {
      border-bottom: 1px solid #e5e7eb;
      transition: all 0.3s ease;
    }

    .careers-table tbody tr:hover {
      background: var(--lighter-purple);
      transform: translateY(-2px);
      box-shadow: var(--shadow-sm);
    }

    .careers-table td {
      padding: 1.25rem 1.5rem;
      vertical-align: middle;
    }

    /* Badge de estado */
    .status-badge {
      display: inline-block;
      padding: 0.4rem 1rem;
      border-radius: var(--radius-full);
      font-size: 0.85rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .status-active {
      background: linear-gradient(to right, #10b981, #34d399);
      color: white;
    }

    .status-inactive {
      background: linear-gradient(to right, #6b7280, #9ca3af);
      color: white;
    }

    /* Badge de duración */
    .duration-badge {
      display: inline-block;
      padding: 0.4rem 0.8rem;
      border-radius: var(--radius-full);
      font-size: 0.85rem;
      font-weight: 600;
      background: linear-gradient(to right, #8b5cf6, #a78bfa);
      color: white;
    }

    /* Carrera info */
    .career-info {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .career-icon {
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, #7c3aed, #8b5cf6);
      border-radius: var(--radius-md);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
    }

    .career-details {
      flex: 1;
    }

    .career-name {
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 0.25rem;
    }

    .career-meta {
      display: flex;
      gap: 1rem;
      font-size: 0.85rem;
      color: var(--text-gray);
    }

    .career-meta-item {
      display: flex;
      align-items: center;
      gap: 0.25rem;
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

    .btn-view {
      background: linear-gradient(to right, var(--info-blue), #60a5fa);
      color: white;
    }

    .btn-view:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
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
      color: var(--primary-purple);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .footer-link:hover {
      color: var(--dark-purple);
      text-decoration: underline;
    }

    .copyright {
      font-size: 0.875rem;
    }

    /* Animaciones */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeIn 0.6s ease-out;
    }

    /* Responsividad */
    @media (max-width: 1024px) {
      .header-content {
        padding: 0 1rem;
      }
      
      .careers-hero {
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
      
      .career-stats {
        justify-content: center;
      }
      
      .panel-header {
        flex-direction: column;
        align-items: stretch;
      }
      
      .search-filter {
        flex-direction: column;
      }
      
      .search-box {
        min-width: 100%;
      }
      
      .actions-cell {
        flex-direction: column;
      }
      
      .btn-action {
        min-width: 100%;
      }
      
      .career-info {
        flex-direction: column;
        text-align: center;
      }
      
      .career-meta {
        justify-content: center;
        flex-wrap: wrap;
      }
      
      .footer-links {
        flex-direction: column;
        gap: 0.75rem;
      }
    }
  </style>
</head>
<body>
  <!-- Header con navegación - Mismo diseño del primer código -->
  <header class="main-header">
    <div class="header-content">
      <div class="logo-section">
        <div class="logo-icon">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="logo-text">UPPDATE</div>
        <div class="admin-badge">
          <i class="fas fa-user-shield"></i> Administrador
        </div>
      </div>
      
      <div class="nav-links">
        <!-- Manteniendo los links del segundo código -->
        <a href="{{ route('admin.inicio') }}" class="nav-link">
          <i class="fas fa-home"></i>
          Inicio
        </a>
        <a href="{{ route('superadmin.carreras.create') }}" class="nav-link active">
          <i class="fas fa-plus-circle"></i>
          Nueva Carrera
        </a>
        <a href="{{ route('admin.usuarios') }}" class="nav-link">
          <i class="fas fa-user-plus"></i>
          Nuevo Usuario
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
    <!-- Hero section para Gestión de Carreras -->
    <section class="careers-hero">
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="page-title">Gestión de Carreras</h1>
          <p class="page-subtitle">Administra todas las carreras académicas del sistema UPPDATE. Crea, edita y gestiona programas de estudio.</p>
          
          <div class="career-stats">
            <div class="stat-badge">
              <div class="stat-number">{{ $carreras->count() }}</div>
              <div class="stat-label">Carreras Totales</div>
            </div>
            
            <div class="stat-badge">
              <div class="stat-number">{{ $carreras->where('estado', 'activa')->count() }}</div>
              <div class="stat-label">Carreras Activas</div>
            </div>
            
            <div class="stat-badge">
              <div class="stat-number">{{ $carreras->unique('modalidad')->count() }}</div>
              <div class="stat-label">Modalidades</div>
            </div>
          </div>
        </div>
        
        <div class="hero-actions">
          <a href="{{ route('superadmin.carreras.create') }}" class="btn-primary">
            <i class="fas fa-plus-circle"></i>
            Crear Nueva Carrera
          </a>
          <p style="font-size: 0.9rem; opacity: 0.9; text-align: center;">Agregar nuevos programas académicos</p>
        </div>
      </div>
    </section>

    <!-- Panel de gestión -->
    <div class="management-panel">
      <div class="panel-header">
        <h2 class="panel-title">Carreras Registradas</h2>
        
        <div class="search-filter">
          <div class="search-box">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Buscar carrera..." id="searchInput">
          </div>
        </div>
      </div>

      <div class="careers-table-container">
        @if($carreras->count() > 0)
          <table class="careers-table" id="careersTable">
            <thead>
              <tr>
                <th>Carrera</th>
                <th>Clave</th>
                <th>Duración</th>
                <th>Modalidad</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($carreras as $carrera)
                <tr class="fade-in">
                  <td>
                    <div class="career-info">
                      <div class="career-icon">
                        <i class="fas fa-graduation-cap"></i>
                      </div>
                      <div class="career-details">
                        <div class="career-name">{{ $carrera->nombre }}</div>
                        <div class="career-meta">
                          @if($carrera->coordinador)
                            <span class="career-meta-item">
                              <i class="fas fa-user-tie"></i>
                              {{ $carrera->coordinador }}
                            </span>
                          @endif
                          @if($carrera->created_at)
                            <span class="career-meta-item">
                              <i class="fas fa-calendar-alt"></i>
                              {{ $carrera->created_at->format('Y') }}
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span style="font-family: 'Courier New', monospace; font-weight: 600; color: var(--primary-purple);">
                      {{ $carrera->clave }}
                    </span>
                  </td>
                  <td>
                    @if($carrera->duracion)
                      <span class="duration-badge">
                        <i class="fas fa-clock"></i>
                        {{ $carrera->duracion }}
                      </span>
                    @else
                      <span style="color: var(--text-gray); font-style: italic;">No definida</span>
                    @endif
                  </td>
                  <td>
                    @if($carrera->modalidad)
                      <span style="font-weight: 500;">{{ $carrera->modalidad }}</span>
                    @else
                      <span style="color: var(--text-gray); font-style: italic;">No definida</span>
                    @endif
                  </td>
                  <td>
                    @php
                      $status = $carrera->estado ?? 'activa';
                      $statusClass = $status === 'activa' ? 'status-active' : 'status-inactive';
                      $statusText = $status === 'activa' ? 'Activa' : 'Inactiva';
                    @endphp
                    <span class="status-badge {{ $statusClass }}">
                      <i class="fas fa-circle" style="font-size: 0.6rem;"></i>
                      {{ $statusText }}
                    </span>
                  </td>
                  <td class="actions-cell">
                    <a href="{{ route('superadmin.carreras.edit', $carrera) }}" class="btn-action btn-edit">
                      <i class="fas fa-edit"></i>
                      Editar
                    </a>
                    <form action="{{ route('superadmin.carreras.destroy', $carrera) }}" method="POST" style="display: inline;" onsubmit="return confirmDelete()">
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
              <i class="fas fa-graduation-cap"></i>
            </div>
            <h3 class="empty-title">No hay carreras registradas</h3>
            <p class="empty-text">Comienza agregando nuevas carreras académicas para gestionar programas de estudio.</p>
            <a href="{{ route('superadmin.carreras.create') }}" class="btn-primary" style="display: inline-flex; width: auto;">
              <i class="fas fa-plus-circle"></i>
              Crear Primera Carrera
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
        <a href="{{ route('admin.inicio') }}" class="footer-link">Inicio</a>
        <a href="#" class="footer-link">Documentación</a>
        <a href="#" class="footer-link">Soporte Académico</a>
        <a href="#" class="footer-link">Políticas</a>
      </div>
      <p class="copyright">© {{ date('Y') }} UPPDATE - Sistema de Gestión Académica</p>
    </div>
  </footer>

  <script>
    // Confirmación de eliminación
    function confirmDelete() {
      return confirm('¿Estás seguro de eliminar esta carrera? Esta acción eliminará todos los datos asociados y no se puede deshacer.');
    }

    // Filtrado y búsqueda en tiempo real
    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const tableRows = document.querySelectorAll('#careersTable tbody tr');
      
      function filterCareers() {
        const searchTerm = searchInput.value.toLowerCase();
        
        tableRows.forEach(row => {
          const careerName = row.cells[0].textContent.toLowerCase();
          const careerCode = row.cells[1].textContent.toLowerCase();
          const careerDuration = row.cells[2].textContent.toLowerCase();
          const careerModality = row.cells[3].textContent.toLowerCase();
          
          const matchesSearch = careerName.includes(searchTerm) || 
                               careerCode.includes(searchTerm) || 
                               careerDuration.includes(searchTerm) ||
                               careerModality.includes(searchTerm);
          
          if (matchesSearch) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      }
      
      if (searchInput) {
        searchInput.addEventListener('input', filterCareers);
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
      const tableRowsAll = document.querySelectorAll('.careers-table tbody tr');
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