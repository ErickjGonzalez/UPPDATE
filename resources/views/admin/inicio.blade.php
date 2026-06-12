<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel Super Admin - UPPDATE</title>
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

    /* Header y navegación */
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

    /* Hero section */
    .admin-hero {
      background: linear-gradient(135deg, var(--primary-purple), var(--dark-purple));
      color: var(--white);
      border-radius: var(--radius-2xl);
      padding: 4rem 3rem;
      margin-bottom: 3rem;
      box-shadow: var(--shadow-lg);
      position: relative;
      overflow: hidden;
    }

    .admin-hero::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 300px;
      height: 300px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }

    .admin-hero::after {
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

    .admin-role {
      font-size: 1.25rem;
      opacity: 0.9;
      margin-bottom: 1.5rem;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1.5rem;
      margin-top: 2.5rem;
    }

    .stat-card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border-radius: var(--radius-xl);
      padding: 1.5rem;
      display: flex;
      align-items: center;
      gap: 1rem;
      transition: all 0.3s ease;
    }

    .stat-card:hover {
      background: rgba(255, 255, 255, 0.25);
      transform: translateY(-5px);
    }

    .stat-icon {
      background: var(--white);
      color: var(--primary-purple);
      width: 60px;
      height: 60px;
      border-radius: var(--radius-lg);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
    }

    .stat-info h3 {
      font-size: 2rem;
      font-weight: 800;
      margin-bottom: 0.25rem;
    }

    .stat-info p {
      opacity: 0.9;
      font-size: 0.9rem;
    }

    /* Dashboard Grid */
    .dashboard-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2rem;
      margin-bottom: 4rem;
    }

    /* Cards mejoradas */
    .dashboard-card {
      background: var(--white);
      border-radius: var(--radius-xl);
      padding: 2.5rem;
      box-shadow: var(--shadow-lg);
      transition: all 0.4s ease;
      border: 1px solid rgba(106, 13, 173, 0.1);
      position: relative;
      overflow: hidden;
    }

    .dashboard-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
    }

    .dashboard-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(106, 13, 173, 0.15);
    }

    .card-header {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .card-icon {
      background: linear-gradient(135deg, var(--primary-purple), var(--dark-purple));
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

    /* Quick links mejorados */
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
      border-color: var(--primary-purple);
      transform: translateX(5px);
      box-shadow: var(--shadow-md);
    }

    .link-content {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .link-icon {
      color: var(--primary-purple);
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
      color: var(--primary-purple);
      font-size: 1.2rem;
      opacity: 0.7;
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

    /* Responsividad */
    @media (max-width: 1024px) {
      .header-content {
        padding: 0 1rem;
      }
      
      .admin-hero {
        padding: 3rem 2rem;
      }
      
      .welcome-title {
        font-size: 2.5rem;
      }
      
      .dashboard-grid {
        grid-template-columns: 1fr;
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
      
      .admin-hero {
        padding: 2rem 1.5rem;
      }
      
      .welcome-title {
        font-size: 2rem;
      }
      
      .stats-grid {
        grid-template-columns: 1fr;
      }
      
      .footer-links {
        flex-direction: column;
        gap: 0.75rem;
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
  <!-- Header con navegación -->
  <header class="main-header">
    <div class="header-content">
      <div class="logo-section">
        <div class="logo-icon">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="logo-text">UPPDATE</div>
        <div class="admin-badge">
          <i class="fas fa-crown"></i> Super Admin
        </div>
      </div>
      
      <div class="nav-links">
        <a href="#" class="nav-link active">
          <i class="fas fa-home"></i>
          Inicio
        </a>
        <a href="{{ route('superadmin.carreras.index') }}" class="nav-link">
          <i class="fas fa-list"></i>
          Carreras
        </a>
        <a href="{{ route('admin.listausuario') }}" class="nav-link">
          <i class="fas fa-users"></i>
          Usuarios
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
    <!-- Hero section -->
    <section class="admin-hero fade-in">
      <div class="hero-content">
        <h1 class="welcome-title">Bienvenido, Super Admin</h1>
        <p class="admin-role">Panel de control administrativo completo de la plataforma UPPDATE</p>
        
        <div class="stats-grid">
          <div class="stat-card">
            <div class="stat-icon">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="stat-info">
              <h3>15</h3>
              <p>Carreras Activas</p>
            </div>
          </div>
          
          <div class="stat-card">
            <div class="stat-icon">
              <i class="fas fa-users"></i>
            </div>
            <div class="stat-info">
              <h3>48</h3>
              <p>Usuarios Registrados</p>
            </div>
          </div>
          
          <div class="stat-card">
            <div class="stat-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <div class="stat-info">
              <h3>24</h3>
              <p>Reportes Generados</p>
            </div>
          </div>
          
          <div class="stat-card">
            <div class="stat-icon">
              <i class="fas fa-cogs"></i>
            </div>
            <div class="stat-info">
              <h3>100%</h3>
              <p>Sistema Operativo</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Dashboard Grid -->
    <div class="dashboard-grid">
      <!-- Card 1: Panel de Control -->
      <div class="dashboard-card fade-in" style="animation-delay: 0.1s;">
        <div class="card-header">
          <div class="card-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <div>
            <h2 class="card-title">Panel de Control</h2>
            <p class="card-subtitle">Administración completa del sistema</p>
          </div>
        </div>
        <div class="card-content">
          <p>Como Super Admin, tienes control total sobre todas las funcionalidades del sistema. Gestiona carreras, usuarios, permisos y monitorea el rendimiento de la plataforma.</p>
          <div class="quick-links-grid" style="margin-top: 2rem;">
            <a href="{{ route('admin.usuarios') }}" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-user-cog"></i>
                </div>
                <div>
                  <div class="link-text">Gestión de Permisos</div>
                  <small style="color: var(--text-gray);">Configurar roles y accesos</small>
                </div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-database"></i>
                </div>
                <div>
                  <div class="link-text">Backup del Sistema</div>
                  <small style="color: var(--text-gray);">Copias de seguridad</small>
                </div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Card 2: Accesos Rápidos -->
      <div class="dashboard-card fade-in" style="animation-delay: 0.2s;">
        <div class="card-header">
          <div class="card-icon">
            <i class="fas fa-bolt"></i>
          </div>
          <div>
            <h2 class="card-title">Acciones Rápidas</h2>
            <p class="card-subtitle">Tareas administrativas frecuentes</p>
          </div>
        </div>
        <div class="card-content">
          <div class="quick-links-grid">
            <a href="{{ route('superadmin.carreras.create') }}" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-plus-circle"></i>
                </div>
                <div class="link-text">Crear Nueva Carrera</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="{{ route('admin.usuarios') }}" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-user-plus"></i>
                </div>
                <div class="link-text">Registrar Nuevo Usuario</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="{{ route('superadmin.carreras.index') }}" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-list-check"></i>
                </div>
                <div class="link-text">Ver Todas las Carreras</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="{{ route('admin.listausuario') }}" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-users-cog"></i>
                </div>
                <div class="link-text">Listado Usuarios</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-chart-pie"></i>
                </div>
                <div class="link-text">Ver Reportes Generales</div>
              </div>
              <i class="fas fa-chevron-right link-arrow"></i>
            </a>
            
            <a href="#" class="quick-link-item">
              <div class="link-content">
                <div class="link-icon">
                  <i class="fas fa-cog"></i>
                </div>
                <div class="link-text">Configuración del Sistema</div>
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
        <a href="#" class="footer-link">Documentación</a>
        <a href="#" class="footer-link">Soporte Técnico</a>
        <a href="#" class="footer-link">Política de Privacidad</a>
      </div>
      <p class="copyright">© {{ date('Y') }} UPPDATE - Sistema de Gestión Académica. Versión 2.0</p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('.dashboard-card');
      cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
      });
      
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
      
      function updateStats() {
        const statCards = document.querySelectorAll('.stat-card');
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