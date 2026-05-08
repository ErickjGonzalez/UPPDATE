<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel Rector - UPPDATE</title>
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

    /* Hero section específica para Rector */
    .rector-hero {
      background: linear-gradient(135deg, var(--primary-indigo), var(--dark-indigo));
      color: var(--white);
      border-radius: var(--radius-2xl);
      padding: 4rem 3rem;
      margin-bottom: 3rem;
      box-shadow: var(--shadow-lg);
      position: relative;
      overflow: hidden;
    }

    .rector-hero::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 300px;
      height: 300px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }

    .rector-hero::after {
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
      background: linear-gradient(to right, #ffffff, #dbeafe);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .rector-role {
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

    /* Dashboard Grid para Rector */
    .dashboard-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2rem;
      margin-bottom: 4rem;
    }

    /* Cards mejoradas con estilo específico para Rector */
    .rector-card {
      background: var(--white);
      border-radius: var(--radius-xl);
      padding: 2.5rem;
      box-shadow: var(--shadow-lg);
      transition: all 0.4s ease;
      border: 1px solid rgba(55, 48, 163, 0.1);
      position: relative;
      overflow: hidden;
    }

    .rector-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(to right, var(--primary-indigo), var(--dark-indigo));
    }

    .rector-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(55, 48, 163, 0.15);
    }

    .card-header {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .card-icon {
      background: linear-gradient(135deg, var(--primary-indigo), var(--dark-indigo));
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

    /* Quick links mejorados para Rector */
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
      background: var(--lighter-indigo);
      border-radius: var(--radius-lg);
      text-decoration: none;
      color: var(--text-dark);
      transition: all 0.3s ease;
      border: 1px solid transparent;
    }

    .quick-link-item:hover {
      background: var(--white);
      border-color: var(--primary-indigo);
      transform: translateX(5px);
      box-shadow: var(--shadow-md);
    }

    .link-content {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .link-icon {
      color: var(--primary-indigo);
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
      color: var(--primary-indigo);
      font-size: 1.2rem;
      opacity: 0.7;
    }

    /* Estadísticas destacadas */
    .highlight-stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1.5rem;
      margin-top: 2rem;
    }

    .highlight-stat {
      background: linear-gradient(135deg, #4f46e5, #6366f1);
      color: var(--white);
      border-radius: var(--radius-xl);
      padding: 1.5rem;
      text-align: center;
    }

    .highlight-stat .value {
      font-size: 2rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
    }

    .highlight-stat .label {
      opacity: 0.9;
      font-size: 0.9rem;
    }

    /* Información universitaria */
    .university-info {
      background: linear-gradient(135deg, var(--primary-indigo), var(--dark-indigo));
      color: var(--white);
      border-radius: var(--radius-xl);
      padding: 2rem;
      margin-bottom: 2rem;
    }

    .university-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 1.5rem;
    }

    .university-title {
      font-size: 1.8rem;
      font-weight: 700;
    }

    .university-status {
      background: rgba(255, 255, 255, 0.2);
      padding: 0.5rem 1rem;
      border-radius: var(--radius-full);
      font-weight: 600;
    }

    .university-metrics {
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
      
      .rector-hero {
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
      
      .rector-hero {
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
      
      .university-metrics {
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
  <!-- Header con navegación - Mismo diseño -->
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
        <a href="#" class="nav-link active">
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
    <!-- Hero section para Rector -->
    <section class="rector-hero fade-in">
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="welcome-title">Bienvenido, Rector</h1>
          <p class="rector-role">Vista ejecutiva de la universidad - Panel de alta dirección académica</p>
          <div style="margin-top: 2rem;">
            <p>Desde esta plataforma tiene acceso completo a todas las métricas institucionales, reportes estratégicos y gestión académica de la universidad.</p>
          </div>
        </div>
        
        <div class="hero-stats">
          <div class="hero-stat">
            <div class="hero-stat-number">24</div>
            <div class="hero-stat-label">Carreras Activas</div>
          </div>
          
          <div class="hero-stat">
            <div class="hero-stat-number">1,850</div>
            <div class="hero-stat-label">Estudiantes</div>
          </div>
          
          <div class="hero-stat">
            <div class="hero-stat-number">156</div>
            <div class="hero-stat-label">Profesores</div>
          </div>
          
          <div class="hero-stat">
            <div class="hero-stat-number">96%</div>
            <div class="hero-stat-label">Tasa de Egreso</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Información universitaria -->
    <div class="university-info fade-in" style="animation-delay: 0.1s;">
      <div class="university-header">
        <div>
          <h2 class="university-title">Universidad Politécnica</h2>
          <p style="opacity: 0.9; margin-top: 0.5rem;">Institución de Educación Superior</p>
        </div>
        <div class="university-status">Acreditada</div>
      </div>
      
      <div class="university-metrics">
        <div class="metric-item">
          <div class="metric-value">98.5%</div>
          <div class="metric-label">Satisfacción Estudiantil</div>
        </div>
        
        <div class="metric-item">
          <div class="metric-value">92%</div>
          <div class="metric-label">Empleabilidad</div>
        </div>
        
        <div class="metric-item">
          <div class="metric-value">ISO 9001</div>
          <div class="metric-label">Certificación</div>
        </div>
        
        <div class="metric-item">
          <div class="metric-value">15</div>
          <div class="metric-label">Años de Experiencia</div>
        </div>
      </div>
    </div>

    <!-- Dashboard Grid -->
    <div class="dashboard-grid">
      <!-- Card 1: Visión General -->
      <div class="rector-card fade-in" style="animation-delay: 0.2s;">
        <div class="card-header">
          <div class="card-icon">
            <i class="fas fa-globe-americas"></i>
          </div>
          <div>
            <h2 class="card-title">Visión General Institucional</h2>
            <p class="card-subtitle">Panorama completo de la universidad</p>
          </div>
        </div>
        <div class="card-content">
          <p>Como rector, tiene acceso privilegiado a toda la información institucional, métricas de desempeño, indicadores de calidad y reportes estratégicos para la toma de decisiones.</p>
          
          <div class="highlight-stats">
            <div class="highlight-stat">
              <div class="value">₡2.5B</div>
              <div class="label">Presupuesto Anual</div>
            </div>
            
            <div class="highlight-stat">
              <div class="value">87%</div>
              <div class="label">Retención</div>
            </div>
            
            <div class="highlight-stat">
              <div class="value">4.8★</div>
              <div class="label">Calificación</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2: Acciones Rápidas -->
      <div class="rector-card fade-in" style="animation-delay: 0.3s;">
        <div class="card-header">
          <div class="card-icon">
            <i class="fas fa-bolt"></i>
          </div>
          <div>
            <h2 class="card-title">Accesos Estratégicos</h2>
            <p class="card-subtitle">Acciones de alta dirección</p>
          </div>
        </div>
        <div class="card-content">
          <div class="quick-links-grid">
            <a href="{{ route('rector.carreras') }}" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-list-ul"></i>
                </div>
                <div class="link-text">Ver Todas las Carreras</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-chart-bar"></i>
                </div>
                <div class="link-text">Reportes Ejecutivos</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-chart-line"></i>
                </div>
                <div class="link-text">Estadísticas Institucionales</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="/rector/convocatorias" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="link-text">Gestión de Convocatorias</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-balance-scale"></i>
                </div>
                <div class="link-text">Indicadores de Calidad</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-file-contract"></i>
                </div>
                <div class="link-text">Informes de Acreditación</div>
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
        <a href="#" class="footer-link">Inicio</a>
        <a href="#" class="footer-link">Gobierno Universitario</a>
        <a href="#" class="footer-link">Transparencia</a>
        <a href="#" class="footer-link">Políticas Institucionales</a>
      </div>
      <p class="copyright">© {{ date('Y') }} Universidad Politécnica - Oficina del Rector</p>
    </div>
  </footer>

  <script>
    // Animación para las cards al cargar
    document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('.rector-card');
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
      
      // Actualizar stats (simulación)
      function updateStats() {
        const statCards = document.querySelectorAll('.hero-stat');
        statCards.forEach(card => {
          card.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
              this.style.transform = 'translateY(-5px)';
            }, 150);
          });
        });
      }
      
      updateStats();
    });
  </script>
</body>
</html>