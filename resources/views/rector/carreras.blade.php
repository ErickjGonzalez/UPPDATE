<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carreras Institucionales - UPPDATE</title>
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

    /* Hero section para Carreras */
    .careers-hero {
      background: linear-gradient(135deg, var(--primary-indigo), var(--dark-indigo));
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
      background: linear-gradient(to right, #ffffff, #dbeafe);
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

    /* Tabla mejorada */
    .careers-table-container {
      overflow-x: auto;
      border-radius: var(--radius-lg);
      border: 1px solid #e5e7eb;
      margin-top: 1.5rem;
    }

    .careers-table {
      width: 100%;
      border-collapse: collapse;
      min-width: 1000px;
    }

    .careers-table thead {
      background: linear-gradient(to right, var(--light-indigo), #dbeafe);
    }

    .careers-table th {
      padding: 1.25rem 1.5rem;
      text-align: left;
      font-weight: 700;
      color: var(--dark-indigo);
      font-size: 0.95rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      border-bottom: 2px solid var(--primary-indigo);
    }

    .careers-table tbody tr {
      border-bottom: 1px solid #e5e7eb;
      transition: all 0.3s ease;
    }

    .careers-table tbody tr:hover {
      background: var(--lighter-indigo);
      transform: translateY(-2px);
      box-shadow: var(--shadow-sm);
    }

    .careers-table td {
      padding: 1.25rem 1.5rem;
      vertical-align: top;
    }

    /* Carrera info */
    .career-info {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
    }

    .career-icon {
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, var(--primary-indigo), var(--dark-indigo));
      border-radius: var(--radius-md);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
      flex-shrink: 0;
    }

    .career-details {
      flex: 1;
    }

    .career-name {
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
      color: var(--text-dark);
    }

    .career-description {
      font-size: 0.9rem;
      color: var(--text-gray);
      line-height: 1.5;
      margin-bottom: 0.5rem;
    }

    .career-meta {
      display: flex;
      gap: 1rem;
      font-size: 0.85rem;
      color: var(--text-gray);
      flex-wrap: wrap;
    }

    .career-meta-item {
      display: flex;
      align-items: center;
      gap: 0.25rem;
    }

    /* Director info */
    .director-info {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .director-avatar {
      width: 40px;
      height: 40px;
      background: linear-gradient(135deg, #10b981, #34d399);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 600;
      font-size: 0.9rem;
      flex-shrink: 0;
    }

    .director-details {
      flex: 1;
    }

    .director-name {
      font-weight: 600;
      margin-bottom: 0.125rem;
    }

    .director-role {
      font-size: 0.8rem;
      color: var(--text-gray);
    }

    .no-director {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: var(--text-gray);
      font-style: italic;
    }

    /* Badge de estado */
    .status-badge {
      display: inline-block;
      padding: 0.4rem 0.8rem;
      border-radius: var(--radius-full);
      font-size: 0.8rem;
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
      
      .career-info, .director-info {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .career-meta {
        flex-direction: column;
        gap: 0.5rem;
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
        <a href="{{ route('rector.carreras') }}" class="nav-link active">
          <i class="fas fa-list"></i>
          Carreras
        </a>
        <a href="#" class="nav-link">
          <i class="fas fa-chart-bar"></i>
          Reportes
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
    <!-- Hero section para Carreras -->
    <section class="careers-hero">
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="page-title">Carreras Institucionales</h1>
          <p class="page-subtitle">Vista ejecutiva de todos los programas académicos de la universidad</p>
          
          <div class="career-stats">
            <div class="stat-badge">
              <div class="stat-number">{{ $carreras->count() }}</div>
              <div class="stat-label">Carreras Totales</div>
            </div>
            
            <div class="stat-badge">
              @php
                $carrerasConDirector = $carreras->filter(function($carrera) {
                  return $carrera->director !== null;
                })->count();
              @endphp
              <div class="stat-number">{{ $carrerasConDirector }}</div>
              <div class="stat-label">Con Director Asignado</div>
            </div>
            
            <div class="stat-badge">
              @php
                $modalidadesUnicas = $carreras->pluck('modalidad')->unique()->filter()->count();
              @endphp
              <div class="stat-number">{{ $modalidadesUnicas }}</div>
              <div class="stat-label">Modalidades Diferentes</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Panel de gestión -->
    <div class="management-panel">
      <div class="panel-header">
        <div>
          <h2 class="panel-title">
            <i class="fas fa-diagram-project"></i>
            Listado de Carreras
          </h2>
          <p class="panel-subtitle">Visión completa de todas las carreras académicas y sus respectivos directores asignados</p>
        </div>
        
        <div class="search-filter">
          <div class="search-box">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Buscar carrera o director..." id="searchInput">
          </div>
        </div>
      </div>

      <div class="careers-table-container">
        @if($carreras->count() > 0)
          <table class="careers-table" id="careersTable">
            <thead>
              <tr>
                <th style="width: 40%;">Carrera</th>
                <th style="width: 35%;">Descripción</th>
                <th style="width: 25%;">Director Asignado</th>
              </tr>
            </thead>
            <tbody>
              @foreach($carreras as $carrera)
                <tr class="fade-in">
                  <td>
                    <div class="career-info">
                      <div class="career-icon">
                        @switch($carrera->modalidad)
                          @case('Presencial')
                            <i class="fas fa-university"></i>
                            @break
                          @case('En línea')
                            <i class="fas fa-laptop"></i>
                            @break
                          @case('Híbrida')
                            <i class="fas fa-blender-phone"></i>
                            @break
                          @default
                            <i class="fas fa-graduation-cap"></i>
                        @endswitch
                      </div>
                      <div class="career-details">
                        <div class="career-name">{{ $carrera->nombre }}</div>
                        <div class="career-description">
                          {{ Str::limit($carrera->descripcion, 120) }}
                        </div>
                        <div class="career-meta">
                          @if($carrera->duracion)
                            <span class="career-meta-item">
                              <i class="fas fa-clock"></i>
                              {{ $carrera->duracion }}
                            </span>
                          @endif
                          
                          @if($carrera->modalidad)
                            <span class="career-meta-item">
                              <i class="fas fa-layer-group"></i>
                              {{ $carrera->modalidad }}
                            </span>
                          @endif
                          
                          @if($carrera->clave)
                            <span class="career-meta-item">
                              <i class="fas fa-key"></i>
                              {{ $carrera->clave }}
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div style="max-height: 150px; overflow-y: auto; padding-right: 10px;">
                      <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-gray);">
                        {{ $carrera->descripcion ?: 'Sin descripción disponible' }}
                      </p>
                      
                      @if($carrera->perfil_egreso)
                        <div style="margin-top: 1rem;">
                          <div style="font-size: 0.85rem; font-weight: 600; color: var(--primary-indigo); margin-bottom: 0.25rem;">
                            <i class="fas fa-user-graduate"></i> Perfil de Egreso
                          </div>
                          <div style="font-size: 0.8rem; color: var(--text-gray);">
                            {{ Str::limit($carrera->perfil_egreso, 100) }}
                          </div>
                        </div>
                      @endif
                    </div>
                  </td>
                  <td>
                    @if($carrera->director)
                      <div class="director-info">
                        <div class="director-avatar">
                          {{ substr($carrera->director->name, 0, 1) }}
                        </div>
                        <div class="director-details">
                          <div class="director-name">{{ $carrera->director->name }}</div>
                          <div class="director-role">Director Académico</div>
                          @if($carrera->director->email)
                            <div style="font-size: 0.8rem; color: var(--text-gray); margin-top: 0.25rem;">
                              <i class="fas fa-envelope"></i> {{ $carrera->director->email }}
                            </div>
                          @endif
                        </div>
                      </div>
                    @else
                      <div class="no-director">
                        <i class="fas fa-user-slash" style="color: #9ca3af;"></i>
                        <span>No asignado</span>
                      </div>
                      <div style="margin-top: 0.5rem; font-size: 0.85rem; color: var(--warning-yellow);">
                        <i class="fas fa-exclamation-triangle"></i>
                        Requiere asignación
                      </div>
                    @endif
                    
                    @if($carrera->coordinador)
                      <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px dashed #e5e7eb;">
                        <div style="font-size: 0.85rem; color: var(--text-gray); margin-bottom: 0.25rem;">
                          <i class="fas fa-user-tie"></i> Coordinador
                        </div>
                        <div style="font-weight: 500; font-size: 0.9rem;">
                          {{ $carrera->coordinador }}
                        </div>
                      </div>
                    @endif
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
            <p class="empty-text">Actualmente no hay programas académicos registrados en el sistema.</p>
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
        <a href="#" class="footer-link">Reportes Ejecutivos</a>
        <a href="#" class="footer-link">Indicadores de Calidad</a>
        <a href="#" class="footer-link">Políticas Académicas</a>
      </div>
      <p class="copyright">© {{ date('Y') }} Universidad Politécnica - Oficina del Rector</p>
    </div>
  </footer>

  <script>
    // Filtrado y búsqueda en tiempo real
    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const tableRows = document.querySelectorAll('#careersTable tbody tr');
      
      function filterCareers() {
        const searchTerm = searchInput.value.toLowerCase();
        
        tableRows.forEach(row => {
          const careerName = row.cells[0].textContent.toLowerCase();
          const careerDescription = row.cells[1].textContent.toLowerCase();
          const directorInfo = row.cells[2].textContent.toLowerCase();
          
          const matchesSearch = careerName.includes(searchTerm) || 
                               careerDescription.includes(searchTerm) || 
                               directorInfo.includes(searchTerm);
          
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
      
      // Alternar visibilidad de descripciones largas
      const careerDescriptions = document.querySelectorAll('.career-description');
      careerDescriptions.forEach(description => {
        const fullText = description.getAttribute('data-full') || description.textContent;
        const limitedText = description.textContent;
        
        if (fullText.length > 120) {
          description.innerHTML = limitedText + 
            ' <span style="color: var(--primary-indigo); cursor: pointer; font-weight: 600; font-size: 0.8rem;" onclick="toggleDescription(this)"> [ver más]</span>';
          description.setAttribute('data-full', fullText);
          description.setAttribute('data-limited', limitedText);
          description.setAttribute('data-expanded', 'false');
        }
      });
    });
    
    function toggleDescription(element) {
      const description = element.parentElement;
      const isExpanded = description.getAttribute('data-expanded') === 'true';
      const fullText = description.getAttribute('data-full');
      const limitedText = description.getAttribute('data-limited');
      
      if (isExpanded) {
        description.innerHTML = limitedText + 
          ' <span style="color: var(--primary-indigo); cursor: pointer; font-weight: 600; font-size: 0.8rem;" onclick="toggleDescription(this)"> [ver más]</span>';
        description.setAttribute('data-expanded', 'false');
      } else {
        description.innerHTML = fullText + 
          ' <span style="color: var(--primary-indigo); cursor: pointer; font-weight: 600; font-size: 0.8rem;" onclick="toggleDescription(this)"> [ver menos]</span>';
        description.setAttribute('data-expanded', 'true');
      }
    }
  </script>
</body>
</html>