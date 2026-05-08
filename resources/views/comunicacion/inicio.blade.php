<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel Comunicación - UPPDATE</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-teal: #0d9488;
      --dark-teal: #0f766e;
      --light-teal: #ccfbf1;
      --lighter-teal: #f0fdfa;
      --primary-orange: #f97316;
      --text-dark: #1f2937;
      --text-gray: #6b7280;
      --white: #ffffff;
      --success-green: #10b981;
      --warning-yellow: #f59e0b;
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
      background: linear-gradient(135deg, #f0fdfa 0%, #ccfbf1 50%, #99f6e4 100%);
      min-height: 100vh;
      color: var(--text-dark);
      line-height: 1.6;
    }

    /* Header y navegación - Diseño Comunicación */
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
      background: linear-gradient(135deg, var(--primary-teal), var(--dark-teal));
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
      background: linear-gradient(to right, var(--primary-teal), var(--dark-teal));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .user-badge {
      background: linear-gradient(to right, var(--primary-teal), var(--dark-teal));
      color: var(--white);
      padding: 0.5rem 1rem;
      border-radius: var(--radius-full);
      font-weight: 600;
      font-size: 0.9rem;
      margin-left: 1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
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
      background: var(--light-teal);
      color: var(--primary-teal);
      transform: translateY(-2px);
    }

    .nav-link.active {
      background: var(--primary-teal);
      color: var(--white);
    }

    .logout-btn {
      background: transparent;
      border: 2px solid var(--primary-teal);
      color: var(--primary-teal);
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
      background: var(--primary-teal);
      color: var(--white);
      transform: translateY(-2px);
    }

    /* Contenedor principal */
    .main-container {
      max-width: 1400px;
      margin: 3rem auto;
      padding: 0 2rem;
    }

    /* Hero section específica para Comunicación */
    .comunicacion-hero {
      background: linear-gradient(135deg, var(--primary-teal), var(--dark-teal));
      color: var(--white);
      border-radius: var(--radius-2xl);
      padding: 4rem 3rem;
      margin-bottom: 3rem;
      box-shadow: var(--shadow-lg);
      position: relative;
      overflow: hidden;
    }

    .comunicacion-hero::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 300px;
      height: 300px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }

    .comunicacion-hero::after {
      content: '';
      position: absolute;
      bottom: -80px;
      left: -80px;
      width: 400px;
      height: 400px;
      background: rgba(255, 255, 255, 0.05);
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

    .welcome-title {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
      background: linear-gradient(to right, #ffffff, #ccfbf1);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .comunicacion-role {
      font-size: 1.25rem;
      opacity: 0.9;
      margin-bottom: 1.5rem;
    }

    .hero-stats {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
      min-width: 300px;
    }

    .hero-stat {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border-radius: var(--radius-xl);
      padding: 1.5rem;
      text-align: center;
      transition: all 0.3s ease;
    }

    .hero-stat:hover {
      background: rgba(255, 255, 255, 0.25);
      transform: translateY(-5px);
    }

    .hero-stat-number {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 0.25rem;
    }

    .hero-stat-label {
      opacity: 0.9;
      font-size: 0.9rem;
    }

    /* Dashboard Grid para Comunicación */
    .dashboard-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2rem;
      margin-bottom: 4rem;
    }

    /* Cards mejoradas con estilo específico para Comunicación */
    .comunicacion-card {
      background: var(--white);
      border-radius: var(--radius-xl);
      padding: 2.5rem;
      box-shadow: var(--shadow-lg);
      transition: all 0.4s ease;
      border: 1px solid rgba(13, 148, 136, 0.1);
      position: relative;
      overflow: hidden;
    }

    .comunicacion-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(to right, var(--primary-teal), var(--dark-teal));
    }

    .comunicacion-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(13, 148, 136, 0.15);
    }

    .card-header {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .card-icon {
      background: linear-gradient(135deg, var(--primary-teal), var(--dark-teal));
      color: var(--white);
      width: 60px;
      height: 60px;
      border-radius: var(--radius-lg);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
    }

    .card-title {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 0.5rem;
    }

    .card-subtitle {
      color: var(--text-gray);
      font-size: 0.95rem;
    }

    .card-content {
      margin-top: 1.5rem;
    }

    /* Quick links mejorados para Comunicación */
    .quick-links-grid {
      display: grid;
      gap: 1rem;
      margin-top: 1.5rem;
    }

    .quick-link-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.25rem;
      background: var(--lighter-teal);
      border-radius: var(--radius-lg);
      text-decoration: none;
      color: var(--text-dark);
      transition: all 0.3s ease;
      border: 1px solid transparent;
    }

    .quick-link-item:hover {
      background: var(--white);
      border-color: var(--primary-teal);
      transform: translateX(5px);
      box-shadow: var(--shadow-md);
    }

    .link-content {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .link-icon {
      color: var(--primary-teal);
      font-size: 1.3rem;
      width: 40px;
      height: 40px;
      background: var(--white);
      border-radius: var(--radius-md);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .link-text {
      font-weight: 600;
    }

    .link-arrow {
      color: var(--primary-teal);
      font-size: 1.2rem;
      opacity: 0.7;
    }

    /* Estadísticas de contenido */
    .content-stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 1.5rem;
      margin-top: 2rem;
    }

    .content-stat {
      background: var(--lighter-teal);
      border-radius: var(--radius-lg);
      padding: 1.5rem;
      text-align: center;
      transition: all 0.3s ease;
    }

    .content-stat:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-md);
    }

    .content-stat .value {
      font-size: 1.8rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
      color: var(--primary-teal);
    }

    .content-stat .label {
      color: var(--text-gray);
      font-size: 0.9rem;
    }

    /* Convocatorias recientes */
    .convocatorias-list {
      margin-top: 2rem;
    }

    .convocatoria-item {
      background: var(--lighter-teal);
      border-radius: var(--radius-lg);
      padding: 1.5rem;
      margin-bottom: 1rem;
      border-left: 4px solid var(--primary-teal);
      transition: all 0.3s ease;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .convocatoria-item:hover {
      background: var(--white);
      transform: translateX(5px);
      box-shadow: var(--shadow-md);
    }

    .convocatoria-info h4 {
      color: var(--primary-teal);
      margin-bottom: 0.5rem;
    }

    .convocatoria-meta {
      display: flex;
      gap: 1rem;
      font-size: 0.875rem;
      color: var(--text-gray);
    }

    .convocatoria-status {
      background: var(--primary-teal);
      color: var(--white);
      padding: 0.25rem 0.75rem;
      border-radius: var(--radius-full);
      font-size: 0.75rem;
      font-weight: 600;
    }

    /* Botones de acción */
    .action-buttons {
      display: flex;
      gap: 1rem;
      margin-top: 2rem;
      flex-wrap: wrap;
    }

    .btn-primary {
      background: linear-gradient(to right, var(--primary-teal), var(--dark-teal));
      color: var(--white);
      padding: 1rem 2rem;
      border: none;
      border-radius: var(--radius-lg);
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      text-decoration: none;
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-lg);
    }

    .btn-secondary {
      background: var(--white);
      color: var(--primary-teal);
      padding: 1rem 2rem;
      border: 2px solid var(--primary-teal);
      border-radius: var(--radius-lg);
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      text-decoration: none;
    }

    .btn-secondary:hover {
      background: var(--lighter-teal);
      transform: translateY(-3px);
      box-shadow: var(--shadow-md);
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
      color: var(--primary-teal);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .footer-link:hover {
      color: var(--dark-teal);
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
      
      .comunicacion-hero {
        padding: 3rem 2rem;
      }
      
      .welcome-title {
        font-size: 2.5rem;
      }
      
      .dashboard-grid {
        grid-template-columns: 1fr;
      }
      
      .hero-content {
        flex-direction: column;
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
      
      .comunicacion-hero {
        padding: 2rem 1.5rem;
      }
      
      .welcome-title {
        font-size: 2rem;
      }
      
      .hero-stats {
        grid-template-columns: 1fr;
      }
      
      .footer-links {
        flex-direction: column;
        gap: 0.75rem;
      }
      
      .content-stats {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .action-buttons {
        flex-direction: column;
      }
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

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }

    .pulse {
      animation: pulse 2s infinite;
    }
  </style>
</head>
<body>
  <!-- Header con navegación - Diseño Comunicación -->
  <header class="main-header">
    <div class="header-content">
      <div class="logo-section">
        <div class="logo-icon">
          <i class="fas fa-bullhorn"></i>
        </div>
        <div class="logo-text">UPPDATE</div>
        <div class="user-badge">
          <i class="fas fa-comments"></i> Comunicación
        </div>
      </div>
      
      <div class="nav-links">
        <a href="#" class="nav-link active">
          <i class="fas fa-home"></i>
          Inicio
        </a>
       <a href="{{ route('comunicacion.index') }}" class="nav-link">
          <i class="fas fa-newspaper"></i>
          Convocatorias
        </a>
        <a href="#" class="nav-link">
          <i class="fas fa-bullhorn"></i>
          Difusión
        </a>
        <a href="#" class="nav-link">
          <i class="fas fa-chart-line"></i>
          Estadísticas
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
    <!-- Hero section para Comunicación -->
    <section class="comunicacion-hero fade-in">
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="welcome-title">Centro de Comunicación</h1>
          <p class="comunicacion-role">Gestión de contenidos, convocatorias y difusión institucional</p>
          <div style="margin-top: 2rem;">
            <p>Desde este panel puede crear, editar y publicar contenido institucional, gestionar convocatorias, y supervisar la estrategia de comunicación de la universidad.</p>
          </div>
        </div>
        
        <div class="hero-stats">
          <div class="hero-stat">
            <div class="hero-stat-number" id="convocatorias-count">15</div>
            <div class="hero-stat-label">Convocatorias Activas</div>
          </div>
          
          <div class="hero-stat">
            <div class="hero-stat-number" id="visualizaciones-count">2,850</div>
            <div class="hero-stat-label">Visualizaciones Hoy</div>
          </div>
          
          <div class="hero-stat">
            <div class="hero-stat-number" id="contenidos-count">47</div>
            <div class="hero-stat-label">Contenidos Publicados</div>
          </div>
          
          <div class="hero-stat">
            <div class="hero-stat-number" id="engagement-rate">86%</div>
            <div class="hero-stat-label">Tasa de Engagement</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Dashboard Grid -->
    <div class="dashboard-grid">
      <!-- Card 1: Gestión de Convocatorias -->
      <div class="comunicacion-card fade-in" style="animation-delay: 0.2s;">
        <div class="card-header">
          <div class="card-icon">
            <i class="fas fa-newspaper"></i>
          </div>
          <div>
            <h2 class="card-title">Gestión de Convocatorias</h2>
            <p class="card-subtitle">Crear, editar y publicar convocatorias</p>
          </div>
        </div>
        <div class="card-content">
          <p>Administre todas las convocatorias institucionales, desde procesos de admisión hasta eventos especiales. Controle estados, fechas y visibilidad.</p>
          
          <div class="content-stats">
            <div class="content-stat">
              <div class="value">5</div>
              <div class="label">Borradores</div>
            </div>
            
            <div class="content-stat">
              <div class="value">8</div>
              <div class="label">Publicadas</div>
            </div>
            
            <div class="content-stat">
              <div class="value">2</div>
              <div class="label">Próximas</div>
            </div>
            
            <div class="content-stat">
              <div class="value">15</div>
              <div class="label">Totales</div>
            </div>
          </div>
          
          <div class="action-buttons">
            <a href="" class="btn-primary">
              <i class="fas fa-plus-circle"></i>
              Nueva Convocatoria
            </a>
            <a href="" class="btn-secondary">
              <i class="fas fa-list"></i>
              Ver Todas
            </a>
          </div>
        </div>
      </div>

      <!-- Card 2: Acciones Rápidas -->
      <div class="comunicacion-card fade-in" style="animation-delay: 0.3s;">
        <div class="card-header">
          <div class="card-icon">
            <i class="fas fa-bolt"></i>
          </div>
          <div>
            <h2 class="card-title">Acciones Rápidas</h2>
            <p class="card-subtitle">Funciones principales de comunicación</p>
          </div>
        </div>
        <div class="card-content">
          <div class="quick-links-grid">
            <a href="/" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-plus"></i>
                </div>
                <div class="link-text">Crear Nueva Convocatoria</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="/comunicacion/convocatorias?estado=borrador" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-edit"></i>
                </div>
                <div class="link-text">Editar Borradores</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="/comunicacion/convocatorias?estado=publicada" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-eye"></i>
                </div>
                <div class="link-text">Ver Publicadas</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-chart-line"></i>
                </div>
                <div class="link-text">Estadísticas de Visitas</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-bullhorn"></i>
                </div>
                <div class="link-text">Programar Difusión</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-file-pdf"></i>
                </div>
                <div class="link-text">Reporte Mensual</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Card 3: Convocatorias Recientes -->
      <div class="comunicacion-card fade-in" style="animation-delay: 0.4s;">
        <div class="card-header">
          <div class="card-icon">
            <i class="fas fa-clock"></i>
          </div>
          <div>
            <h2 class="card-title">Convocatorias Recientes</h2>
            <p class="card-subtitle">Últimas convocatorias creadas o editadas</p>
          </div>
        </div>
        <div class="card-content">
          <div class="convocatorias-list">
            <div class="convocatoria-item">
              <div class="convocatoria-info">
                <h4>Admisión 2024 - Ingenierías</h4>
                <div class="convocatoria-meta">
                  <span><i class="far fa-calendar"></i> Hasta: 15 Mar 2024</span>
                  <span><i class="far fa-eye"></i> 1,245 vistas</span>
                </div>
              </div>
              <span class="convocatoria-status">Publicada</span>
            </div>
            
            <div class="convocatoria-item">
              <div class="convocatoria-info">
                <h4>Becas Académicas 2024</h4>
                <div class="convocatoria-meta">
                  <span><i class="far fa-calendar"></i> Hasta: 30 Abr 2024</span>
                  <span><i class="far fa-eye"></i> 892 vistas</span>
                </div>
              </div>
              <span class="convocatoria-status">Publicada</span>
            </div>
            
            <div class="convocatoria-item">
              <div class="convocatoria-info">
                <h4>Concurso de Innovación</h4>
                <div class="convocatoria-meta">
                  <span><i class="far fa-calendar"></i> Hasta: 10 Mar 2024</span>
                  <span><i class="far fa-eye"></i> 567 vistas</span>
                </div>
              </div>
              <span class="convocatoria-status">Borrador</span>
            </div>
          </div>
          
          <div class="action-buttons" style="margin-top: 2rem;">
            <a href="/comunicacion/convocatorias" class="btn-primary" style="flex: 1;">
              <i class="fas fa-list-ul"></i>
              Ver Todas las Convocatorias
            </a>
          </div>
        </div>
      </div>

      <!-- Card 4: Métricas de Comunicación -->
      <div class="comunicacion-card fade-in" style="animation-delay: 0.5s;">
        <div class="card-header">
          <div class="card-icon">
            <i class="fas fa-chart-bar"></i>
          </div>
          <div>
            <h2 class="card-title">Métricas de Comunicación</h2>
            <p class="card-subtitle">Rendimiento y alcance del contenido</p>
          </div>
        </div>
        <div class="card-content">
          <div class="content-stats">
            <div class="content-stat">
              <div class="value">12.5K</div>
              <div class="label">Visitas Totales</div>
            </div>
            
            <div class="content-stat">
              <div class="value">3.2K</div>
              <div class="label">Interacciones</div>
            </div>
            
            <div class="content-stat">
              <div class="value">2.4</div>
              <div class="label">Min/Prom</div>
            </div>
            
            <div class="content-stat">
              <div class="value">68%</div>
              <div class="label">Retención</div>
            </div>
          </div>
          
          <div style="margin-top: 2rem; padding: 1.5rem; background: var(--lighter-teal); border-radius: var(--radius-lg);">
            <h4 style="color: var(--primary-teal); margin-bottom: 1rem;">
              <i class="fas fa-lightbulb"></i> Sugerencias
            </h4>
            <ul style="list-style: none; color: var(--text-gray);">
              <li style="margin-bottom: 0.75rem; display: flex; align-items: flex-start; gap: 0.75rem;">
                <i class="fas fa-check-circle" style="color: var(--success-green); margin-top: 0.125rem;"></i>
                <span>Publicar 2 convocatorias de becas esta semana</span>
              </li>
              <li style="margin-bottom: 0.75rem; display: flex; align-items: flex-start; gap: 0.75rem;">
                <i class="fas fa-clock" style="color: var(--warning-yellow); margin-top: 0.125rem;"></i>
                <span>3 convocatorias próximas a vencer</span>
              </li>
              <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                <i class="fas fa-bullhorn" style="color: var(--primary-teal); margin-top: 0.125rem;"></i>
                <span>Programar difusión en redes para el viernes</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="footer-content">
      <div class="footer-links">
        <a href="#" class="footer-link">Inicio</a>
        <a href="#" class="footer-link">Política de Comunicación</a>
        <a href="#" class="footer-link">Plantillas</a>
        <a href="#" class="footer-link">Contacto</a>
      </div>
      <p class="copyright">© {{ date('Y') }} Departamento de Comunicación - UPPDATE</p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Animación para las cards al cargar
      const cards = document.querySelectorAll('.comunicacion-card');
      cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1 + 0.2}s`;
      });
      
      // Efecto hover para enlaces
      const quickLinks = document.querySelectorAll('.quick-link-item');
      quickLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
          const arrow = this.querySelector('.link-arrow');
          if (arrow) {
            arrow.style.transform = 'translateX(5px)';
            arrow.style.opacity = '1';
          }
        });
        
        link.addEventListener('mouseleave', function() {
          const arrow = this.querySelector('.link-arrow');
          if (arrow) {
            arrow.style.transform = 'translateX(0)';
            arrow.style.opacity = '0.7';
          }
        });
      });
      
      // Efecto hover para convocatorias
      const convocatorias = document.querySelectorAll('.convocatoria-item');
      convocatorias.forEach(item => {
        item.addEventListener('mouseenter', function() {
          this.style.transform = 'translateX(5px)';
        });
        
        item.addEventListener('mouseleave', function() {
          this.style.transform = 'translateX(0)';
        });
      });
      
      // Simular actualización de estadísticas
      function updateStats() {
        // Simular números reales
        const convocatoriasCount = document.getElementById('convocatorias-count');
        const visualizacionesCount = document.getElementById('visualizaciones-count');
        const contenidosCount = document.getElementById('contenidos-count');
        const engagementRate = document.getElementById('engagement-rate');
        
        // Incrementar números (simulación)
        if (convocatoriasCount) {
          const current = parseInt(convocatoriasCount.textContent);
          convocatoriasCount.textContent = current + (Math.random() > 0.7 ? 1 : 0);
        }
        
        if (visualizacionesCount) {
          const current = parseInt(visualizacionesCount.textContent);
          const increment = Math.floor(Math.random() * 50);
          visualizacionesCount.textContent = current + increment;
        }
        
        // Pulsar estadísticas importantes
        const heroStats = document.querySelectorAll('.hero-stat');
        heroStats.forEach(stat => {
          stat.addEventListener('click', function() {
            this.classList.add('pulse');
            setTimeout(() => this.classList.remove('pulse'), 1000);
          });
        });
      }
      
      // Actualizar stats cada 30 segundos
      updateStats();
      setInterval(updateStats, 30000);
      
      // Botones de acción con feedback
      const actionButtons = document.querySelectorAll('.btn-primary, .btn-secondary');
      actionButtons.forEach(button => {
        button.addEventListener('click', function(e) {
          if (!this.getAttribute('href') || this.getAttribute('href') === '#') {
            e.preventDefault();
            this.classList.add('pulse');
            setTimeout(() => this.classList.remove('pulse'), 500);
            
            // Mostrar notificación temporal
            showNotification('Función en desarrollo', 'info');
          }
        });
      });
      
      // Función para mostrar notificaciones
      function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = 'comunicacion-card';
        notification.style.position = 'fixed';
        notification.style.bottom = '20px';
        notification.style.right = '20px';
        notification.style.zIndex = '1000';
        notification.style.width = '300px';
        notification.style.animation = 'fadeIn 0.3s ease-out';
        
        let icon = 'fa-info-circle';
        let color = 'var(--primary-teal)';
        
        if (type === 'success') {
          icon = 'fa-check-circle';
          color = 'var(--success-green)';
        } else if (type === 'warning') {
          icon = 'fa-exclamation-triangle';
          color = 'var(--warning-yellow)';
        } else if (type === 'error') {
          icon = 'fa-exclamation-circle';
          color = '#ef4444';
        }
        
        notification.innerHTML = `
          <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem;">
            <i class="fas ${icon}" style="color: ${color}; font-size: 1.5rem;"></i>
            <div style="flex: 1;">
              <strong>Notificación</strong>
              <p style="margin-top: 0.25rem; font-size: 0.9rem;">${message}</p>
            </div>
            <button onclick="this.parentElement.parentElement.remove()" style="background: none; border: none; cursor: pointer; color: var(--text-gray);">×</button>
          </div>
        `;
        
        document.body.appendChild(notification);
        
        // Auto-eliminar después de 5 segundos
        setTimeout(() => {
          if (notification.parentNode) {
            notification.style.animation = 'fadeIn 0.3s ease-out reverse';
            setTimeout(() => notification.remove(), 300);
          }
        }, 5000);
      }
      
      // Marcar notificaciones no leídas
      const navLinks = document.querySelectorAll('.nav-link');
      navLinks.forEach(link => {
        if (!link.classList.contains('active')) {
          // Simular notificaciones no leídas
          if (Math.random() > 0.7) {
            const badge = document.createElement('span');
            badge.style.background = '#ef4444';
            badge.style.color = 'white';
            badge.style.borderRadius = '50%';
            badge.style.width = '20px';
            badge.style.height = '20px';
            badge.style.display = 'inline-flex';
            badge.style.alignItems = 'center';
            badge.style.justifyContent = 'center';
            badge.style.fontSize = '0.75rem';
            badge.style.marginLeft = '0.5rem';
            badge.textContent = Math.floor(Math.random() * 5) + 1;
            link.appendChild(badge);
          }
        }
      });
    });
  </script>
</body>
</html>