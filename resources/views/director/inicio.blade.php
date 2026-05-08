<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel Director - UPPDATE</title>
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

    /* Header y navegación - Mismo diseño que Super Admin */
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

    .user-badge {
      background: linear-gradient(to right, #4f46e5, #7c3aed);
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

    /* Hero section específica para Director */
    .director-hero {
      background: linear-gradient(135deg, #4f46e5, #7c3aed);
      color: var(--white);
      border-radius: var(--radius-2xl);
      padding: 4rem 3rem;
      margin-bottom: 3rem;
      box-shadow: var(--shadow-lg);
      position: relative;
      overflow: hidden;
    }

    .director-hero::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 300px;
      height: 300px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }

    .director-hero::after {
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
      background: linear-gradient(to right, #ffffff, #e0e7ff);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .director-role {
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

    /* Dashboard Grid para Director */
    .dashboard-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2rem;
      margin-bottom: 4rem;
    }

    /* Cards mejoradas con estilo específico para Director */
    .director-card {
      background: var(--white);
      border-radius: var(--radius-xl);
      padding: 2.5rem;
      box-shadow: var(--shadow-lg);
      transition: all 0.4s ease;
      border: 1px solid rgba(79, 70, 229, 0.1);
      position: relative;
      overflow: hidden;
    }

    .director-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(to right, #4f46e5, #7c3aed);
    }

    .director-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(79, 70, 229, 0.15);
    }

    .card-header {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .card-icon {
      background: linear-gradient(135deg, #4f46e5, #7c3aed);
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

    /* Quick links mejorados para Director */
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
      background: var(--lighter-purple);
      border-radius: var(--radius-lg);
      text-decoration: none;
      color: var(--text-dark);
      transition: all 0.3s ease;
      border: 1px solid transparent;
    }

    .quick-link-item:hover {
      background: var(--white);
      border-color: #4f46e5;
      transform: translateX(5px);
      box-shadow: var(--shadow-md);
    }

    .link-content {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .link-icon {
      color: #4f46e5;
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
      color: #4f46e5;
      font-size: 1.2rem;
      opacity: 0.7;
    }

    /* Carrera info card */
    .carrera-info-card {
      background: linear-gradient(135deg, #4f46e5, #7c3aed);
      color: var(--white);
      border-radius: var(--radius-xl);
      padding: 2rem;
      margin-bottom: 2rem;
    }

    .carrera-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 1.5rem;
    }

    .carrera-title {
      font-size: 1.8rem;
      font-weight: 700;
    }

    .carrera-status {
      background: rgba(255, 255, 255, 0.2);
      padding: 0.5rem 1rem;
      border-radius: var(--radius-full);
      font-weight: 600;
    }

    .carrera-metrics {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 1.5rem;
    }

    .metric-item {
      text-align: center;
    }

    .metric-value {
      font-size: 2rem;
      font-weight: 800;
      margin-bottom: 0.25rem;
    }

    .metric-label {
      opacity: 0.9;
      font-size: 0.9rem;
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
      color: #4f46e5;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .footer-link:hover {
      color: #3730a3;
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
      
      .director-hero {
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
      
      .director-hero {
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
      
      .carrera-metrics {
        grid-template-columns: repeat(2, 1fr);
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
  </style>
</head>
<body>
  <!-- Header con navegación - Mismo diseño que Super Admin -->
  <header class="main-header">
    <div class="header-content">
      <div class="logo-section">
        <div class="logo-icon">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="logo-text">UPPDATE</div>
        <div class="user-badge">
          <i class="fas fa-user-tie"></i> Director
        </div>
      </div>
      
      <div class="nav-links">
        <a href="{{ route('director.inicio') }}" class="nav-link active">
          <i class="fas fa-home"></i>
          Inicio
        </a>
        <a href="{{ route('director.carrera.edit') }}" class="nav-link">
          <i class="fas fa-edit"></i>
          Editar Carrera
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
    <!-- Hero section para Director -->
    <section class="director-hero fade-in">
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="welcome-title">Bienvenido, Director</h1>
          <p class="director-role">Gestión especializada de la carrera académica asignada</p>
          <div style="margin-top: 2rem;">
            <p>Panel de control para la gestión académica y administrativa de la carrera. Desde aquí puede editar información, generar reportes y monitorear el progreso.</p>
          </div>
        </div>
        
        <div class="hero-stats">
          <div class="hero-stat">
            <div class="hero-stat-number">85%</div>
            <div class="hero-stat-label">Tasa de Retención</div>
          </div>
          
          <div class="hero-stat">
            <div class="hero-stat-number">124</div>
            <div class="hero-stat-label">Estudiantes Activos</div>
          </div>
          
          <div class="hero-stat">
            <div class="hero-stat-number">32</div>
            <div class="hero-stat-label">Profesores</div>
          </div>
          
          <div class="hero-stat">
            <div class="hero-stat-number">94%</div>
            <div class="hero-stat-label">Satisfacción</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Información de la Carrera Asignada -->
    <div class="carrera-info-card fade-in" style="animation-delay: 0.1s;">
      <div class="carrera-header">
        <div>
          <h2 class="carrera-title">Ingeniería en Sistemas Computacionales</h2>
          <p style="opacity: 0.9; margin-top: 0.5rem;">Carrera bajo su dirección</p>
        </div>
        <div class="carrera-status">Activa</div>
      </div>
      
      <div class="carrera-metrics">
        <div class="metric-item">
          <div class="metric-value">8</div>
          <div class="metric-label">Semestres</div>
        </div>
        
        <div class="metric-item">
          <div class="metric-value">Presencial</div>
          <div class="metric-label">Modalidad</div>
        </div>
        
        <div class="metric-item">
          <div class="metric-value">Dr. Juan Pérez</div>
          <div class="metric-label">Coordinador</div>
        </div>
        
        <div class="metric-item">
          <div class="metric-value">2023-2027</div>
          <div class="metric-label">Vigencia Plan</div>
        </div>
      </div>
    </div>

    <!-- Dashboard Grid -->
    <div class="dashboard-grid">
      <!-- Card 1: Resumen General -->
      <div class="director-card fade-in" style="animation-delay: 0.2s;">
        <div class="card-header">
          <div class="card-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <div>
            <h2 class="card-title">Resumen General</h2>
            <p class="card-subtitle">Panorama completo de la carrera</p>
          </div>
        </div>
        <div class="card-content">
          <p>Desde esta vista puede gestionar la carrera asignada, generar reportes, ver estadísticas de inscripción y acceder a toda la información relevante para la toma de decisiones académicas.</p>
          <div class="quick-links-grid" style="margin-top: 2rem;">
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-chart-pie"></i>
                </div>
                <div>
                  <div class="link-text">Dashboard de Métricas</div>
                  <small style="color: var(--text-gray);">Ver estadísticas detalladas</small>
                </div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <div>
                  <div class="link-text">Calendario Académico</div>
                  <small style="color: var(--text-gray);">Eventos y fechas importantes</small>
                </div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Card 2: Acciones Rápidas -->
      <div class="director-card fade-in" style="animation-delay: 0.3s;">
        <div class="card-header">
          <div class="card-icon">
            <i class="fas fa-bolt"></i>
          </div>
          <div>
            <h2 class="card-title">Acciones Rápidas</h2>
            <p class="card-subtitle">Tareas frecuentes de gestión</p>
          </div>
        </div>
        <div class="card-content">
          <div class="quick-links-grid">
            <a href="{{ route('director.carrera.edit') }}" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-edit"></i>
                </div>
                <div class="link-text">Editar Información de Carrera</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-chart-bar"></i>
                </div>
                <div class="link-text">Generar Reporte de Inscripción</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-file-alt"></i>
                </div>
                <div class="link-text">Documentación Académica</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-users"></i>
                </div>
                <div class="link-text">Gestión de Profesores</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="link-text">Seguimiento de Egresados</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-cog"></i>
                </div>
                <div class="link-text">Configuración de Carrera</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="footer-content">
      <div class="footer-links">
        <a href="{{ route('director.inicio') }}" class="footer-link">Inicio</a>
        <a href="#" class="footer-link">Documentación</a>
        <a href="#" class="footer-link">Soporte Académico</a>
        <a href="#" class="footer-link">Políticas</a>
      </div>
      <p class="copyright">© {{ date('Y') }} UPPDATE - Panel de Dirección Académica</p>
    </div>
  </footer>

  <script>
    // Animación para las cards al cargar
    document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('.director-card');
      cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1 + 0.2}s`;
      });
      
      // Efecto hover para enlaces
      const quickLinks = document.querySelectorAll('.quick-link-item');
      quickLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
          const arrow = this.querySelector('.link-arrow');
          arrow.style.transform = 'translateX(5px)';
          arrow.style.opacity = '1';
        });
        
        link.addEventListener('mouseleave', function() {
          const arrow = this.querySelector('.link-arrow');
          arrow.style.transform = 'translateX(0)';
          arrow.style.opacity = '0.7';
        });
      });
      
      // Simular carga de datos de carrera
      function loadCarreraData() {
        // En un sistema real, aquí se haría una petición AJAX
        console.log('Cargando datos de la carrera...');
      }
      
      loadCarreraData();
    });
  </script>
</body>
</html>