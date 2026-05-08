<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Usuario - UPPDATE</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
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

    /* Header y navegación - MEJORADA */
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
      border-radius: var(--radius-lg);
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
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
    }

    .logout-btn:hover {
      background: var(--primary-purple);
      color: var(--white);
      transform: translateY(-2px);
    }

    /* Contenedor principal */
    .main-container {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    /* Hero section */
    .page-hero {
      background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
      color: var(--white);
      border-radius: var(--radius-2xl);
      padding: 3rem 2.5rem;
      margin-bottom: 3rem;
      box-shadow: var(--shadow-lg);
      position: relative;
      overflow: hidden;
    }

    .page-hero::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 300px;
      height: 300px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }

    .page-hero::after {
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
      align-items: center;
      gap: 1.5rem;
    }

    .user-avatar {
      width: 80px;
      height: 80px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2.5rem;
      border: 3px solid rgba(255, 255, 255, 0.3);
    }

    .hero-text {
      flex: 1;
    }

    .page-title {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
      background: linear-gradient(to right, #ffffff, #e0e7ff);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .page-subtitle {
      font-size: 1.125rem;
      opacity: 0.9;
      max-width: 600px;
    }

    /* Badge de rol - ACTUALIZADO */
    .role-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      border-radius: var(--radius-md);
      font-weight: 600;
      font-size: 0.875rem;
      margin-top: 0.5rem;
    }

    .role-badge.director {
      background-color: #dbeafe;
      color: #1e40af;
    }

    .role-badge.rector {
      background-color: #fef3c7;
      color: #92400e;
    }

    .role-badge.superadmin {
      background-color: #f3e8ff;
      color: var(--primary-purple);
    }

    .role-badge.comunicacion {
      background-color: #d1fae5;
      color: #065f46;
    }

    .role-badge.aspirante {
      background-color: #e0e7ff;
      color: #3730a3;
    }

    /* Mensaje de éxito */
    .success-message {
      background: linear-gradient(to right, #10b981, #34d399);
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

    /* Contador de caracteres - MEJORADO */
    .char-counter-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 0.5rem;
      font-size: 0.875rem;
    }

    .char-counter {
      color: var(--text-gray);
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .char-counter.warning {
      color: var(--warning-yellow);
      font-weight: 600;
    }

    .char-counter.danger {
      color: var(--danger-red);
      font-weight: 700;
    }

    .char-counter.success {
      color: var(--success-green);
      font-weight: 600;
    }

    .char-limits {
      color: var(--text-gray);
      font-size: 0.8rem;
    }

    /* Mensajes de validación - MEJORADOS */
    .validation-message {
      font-size: 0.875rem;
      margin-top: 0.5rem;
      display: flex;
      align-items: flex-start;
      gap: 0.5rem;
      animation: fadeIn 0.3s ease-out;
      line-height: 1.4;
    }

    .validation-error {
      color: var(--danger-red);
      background: rgba(239, 68, 68, 0.05);
      padding: 0.75rem;
      border-radius: var(--radius-sm);
      border-left: 3px solid var(--danger-red);
    }

    .validation-warning {
      color: var(--warning-yellow);
      background: rgba(245, 158, 11, 0.05);
      padding: 0.75rem;
      border-radius: var(--radius-sm);
      border-left: 3px solid var(--warning-yellow);
    }

    .validation-success {
      color: var(--success-green);
      background: rgba(16, 185, 129, 0.05);
      padding: 0.75rem;
      border-radius: var(--radius-sm);
      border-left: 3px solid var(--success-green);
    }

    .validation-info {
      color: var(--text-gray);
      background: rgba(107, 114, 128, 0.05);
      padding: 0.75rem;
      border-radius: var(--radius-sm);
      border-left: 3px solid var(--text-gray);
    }

    /* Resumen de validación */
    .validation-summary {
      background: var(--lighter-purple);
      border-radius: var(--radius-lg);
      padding: 2rem;
      margin-bottom: 2rem;
      border: 2px solid var(--light-purple);
      box-shadow: var(--shadow-sm);
    }

    .validation-header {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin-bottom: 1.5rem;
    }

    .validation-icon {
      font-size: 1.5rem;
      color: var(--primary-purple);
    }

    .validation-stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 1.5rem;
    }

    .validation-stat {
      text-align: center;
      padding: 1.5rem 1rem;
      background: var(--white);
      border-radius: var(--radius-md);
      border: 1px solid #e5e7eb;
      transition: all 0.3s ease;
    }

    .validation-stat:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-sm);
    }

    .stat-value {
      font-size: 2rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
    }

    .stat-label {
      font-size: 0.875rem;
      color: var(--text-gray);
      font-weight: 600;
    }

    /* Contenedor del formulario */
    .form-container {
      background: var(--white);
      border-radius: var(--radius-xl);
      padding: 3rem;
      box-shadow: var(--shadow-lg);
      margin-bottom: 3rem;
      position: relative;
      overflow: hidden;
    }

    .form-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
    }

    /* Grid de formulario */
    .form-grid {
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      gap: 1.5rem;
    }

    @media (min-width: 768px) {
      .form-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    .form-group {
      margin-bottom: 0;
      position: relative;
    }

    .form-group.full-width {
      grid-column: 1 / -1;
    }

    .form-label {
      display: block;
      font-weight: 600;
      margin-bottom: 0.75rem;
      color: var(--text-dark);
      font-size: 0.95rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .form-label .required {
      color: var(--danger-red);
      margin-left: 0.25rem;
    }

    .form-label .optional {
      color: var(--text-gray);
      font-size: 0.85rem;
      font-weight: normal;
      margin-left: 0.5rem;
    }

    .form-input, .form-select {
      width: 100%;
      padding: 0.875rem 1rem;
      border: 2px solid #e5e7eb;
      border-radius: var(--radius-md);
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      transition: all 0.3s ease;
      background: var(--white);
    }

    .form-input:focus, .form-select:focus {
      outline: none;
      border-color: var(--primary-purple);
      box-shadow: 0 0 0 3px rgba(106, 13, 173, 0.2);
    }

    .input-with-icon {
      position: relative;
    }

    .input-icon {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-gray);
      font-size: 1.125rem;
    }

    /* Botones */
    .form-actions {
      display: flex;
      gap: 1rem;
      margin-top: 3rem;
      grid-column: 1 / -1;
    }

    .btn-submit {
      background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
      color: var(--white);
      padding: 1rem 2rem;
      border: none;
      border-radius: var(--radius-lg);
      font-weight: 600;
      font-size: 1.125rem;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      flex: 1;
      justify-content: center;
    }

    .btn-submit:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-lg);
    }

    .btn-submit:disabled {
      opacity: 0.6;
      cursor: not-allowed;
      transform: none !important;
      box-shadow: none !important;
    }

    .btn-secondary {
      background: var(--white);
      color: var(--primary-purple);
      padding: 1rem 2rem;
      border: 2px solid var(--primary-purple);
      border-radius: var(--radius-lg);
      font-weight: 600;
      font-size: 1.125rem;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      text-decoration: none;
      flex: 1;
      justify-content: center;
    }

    .btn-secondary:hover {
      background: var(--light-purple);
      transform: translateY(-3px);
      box-shadow: var(--shadow-md);
    }

    /* Información del usuario */
    .user-info-card {
      background: var(--white);
      border-radius: var(--radius-lg);
      padding: 2rem;
      box-shadow: var(--shadow-md);
      margin-bottom: 2rem;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
    }

    .info-item {
      display: flex;
      flex-direction: column;
      gap: 0.25rem;
    }

    .info-label {
      font-size: 0.875rem;
      color: var(--text-gray);
      font-weight: 500;
    }

    .info-value {
      font-weight: 600;
      color: var(--text-dark);
    }

    /* Footer */
    .main-footer {
      background: var(--white);
      border-top: 1px solid #e5e7eb;
      padding: 2rem 0;
      margin-top: 4rem;
    }

    .footer-content {
      max-width: 1200px;
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
        transform: translateY(-5px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
      20%, 40%, 60%, 80% { transform: translateX(5px); }
    }

    .shake {
      animation: shake 0.5s ease-in-out;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }

    .pulse {
      animation: pulse 0.5s ease-in-out;
    }

    /* Estilos para campos inválidos */
    .invalid {
      border-color: var(--danger-red) !important;
      background-color: rgba(239, 68, 68, 0.05) !important;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ef4444' viewBox='0 0 24 24'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 1rem center;
      background-size: 1.5em;
      padding-right: 3rem;
    }

    .valid {
      border-color: var(--success-green) !important;
      background-color: rgba(16, 185, 129, 0.05) !important;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%2310b981' viewBox='0 0 24 24'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 1rem center;
      background-size: 1.5em;
      padding-right: 3rem;
    }

    .warning {
      border-color: var(--warning-yellow) !important;
      background-color: rgba(245, 158, 11, 0.05) !important;
    }

    /* Responsividad */
    @media (max-width: 1024px) {
      .header-content, .main-container {
        padding: 0 1rem;
      }
      
      .page-hero {
        padding: 3rem 2rem;
      }
      
      .page-title {
        font-size: 2.2rem;
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
      
      .page-hero {
        padding: 2rem 1.5rem;
      }
      
      .page-title {
        font-size: 2rem;
      }
      
      .hero-content {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
      }
      
      .form-container {
        padding: 2rem 1.5rem;
      }
      
      .form-actions {
        flex-direction: column;
      }
      
      .user-info-card {
        grid-template-columns: 1fr;
      }
      
      .footer-links {
        flex-direction: column;
        gap: 0.75rem;
      }
      
      .validation-stats {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 480px) {
      .form-grid {
        grid-template-columns: 1fr;
      }
      
      .validation-stats {
        grid-template-columns: 1fr;
      }
    }

    /* Notificaciones flotantes */
    .floating-notification {
      position: fixed;
      top: 100px;
      right: 20px;
      z-index: 1000;
      max-width: 350px;
      animation: slideIn 0.3s ease-out;
      box-shadow: var(--shadow-lg);
      border-radius: var(--radius-lg);
      overflow: hidden;
    }

    /* Loading overlay */
    .loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 2000;
      display: none;
    }

    .loading-spinner {
      width: 60px;
      height: 60px;
      border: 4px solid var(--light-purple);
      border-top: 4px solid var(--primary-purple);
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>
  <!-- Header con navegación MEJORADA -->
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
        <a href="{{ route('admin.inicio') }}" class="nav-link">
          <i class="fas fa-home"></i>
          Inicio
        </a>
        <a href="{{ route('superadmin.carreras.index') }}" class="nav-link">
          <i class="fas fa-list"></i>
          Carreras
        </a>
        <a href="{{ route('admin.listausuario') }}" class="nav-link active">
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
    <section class="page-hero">
      <div class="hero-content">
        <div class="user-avatar">
          <i class="fas fa-user-edit"></i>
        </div>
        <div class="hero-text">
          <h1 class="page-title">Editar Usuario</h1>
          <p class="page-subtitle">Actualiza la información del usuario del sistema. Modifica los datos personales y permisos según sea necesario.</p>
          @if($usuario->role)
          <div class="role-badge {{ $usuario->role }}">
            <i class="fas fa-user-tag"></i>
            @switch($usuario->role)
              @case('director')
                Rol actual: Director
                @break
              @case('rector')
                Rol actual: Rector
                @break
              @case('superadmin')
                Rol actual: Super Admin
                @break
              @case('comunicacion')
                Rol actual: Comunicación
                @break
            
              @default
                Rol actual: {{ ucfirst($usuario->role) }}
            @endswitch
          </div>
          @endif
        </div>
      </div>
    </section>

    <!-- Información actual del usuario -->
    <div class="user-info-card">
      <div class="info-item">
        <span class="info-label">ID de Usuario</span>
        <span class="info-value">#{{ $usuario->id }}</span>
      </div>
      <div class="info-item">
        <span class="info-label">Fecha de Creación</span>
        <span class="info-value">{{ $usuario->created_at->format('d/m/Y') }}</span>
      </div>
      <div class="info-item">
        <span class="info-label">Última Actualización</span>
        <span class="info-value">{{ $usuario->updated_at->format('d/m/Y H:i') }}</span>
      </div>
      <div class="info-item">
        <span class="info-label">Estado</span>
        <span class="info-value" style="color: #10b981;">
          <i class="fas fa-circle" style="font-size: 0.75rem;"></i> Activo
        </span>
      </div>
    </div>

    <!-- Resumen de validación -->
    <div class="validation-summary">
      <div class="validation-header">
        <i class="fas fa-clipboard-check validation-icon"></i>
        <h3 style="font-size: 1.2rem; font-weight: 600;">Validación de Campos</h3>
      </div>
      <div class="validation-stats">
        <div class="validation-stat">
          <div class="stat-value" id="validCount">0</div>
          <div class="stat-label">Válidos</div>
        </div>
        <div class="validation-stat">
          <div class="stat-value" id="warningCount">0</div>
          <div class="stat-label">Advertencias</div>
        </div>
        <div class="validation-stat">
          <div class="stat-value" id="errorCount">0</div>
          <div class="stat-label">Errores</div>
        </div>
        <div class="validation-stat">
          <div class="stat-value" id="totalFields">7</div>
          <div class="stat-label">Campos Totales</div>
        </div>
      </div>
    </div>

    <!-- Mensaje de éxito -->
    @if (session('message'))
      <div class="success-message">
        <i class="fas fa-check-circle success-icon"></i>
        <div>{{ session('message') }}</div>
      </div>
    @endif

    <!-- Formulario -->
    <div class="form-container">
      <form method="POST" action="{{ route('admin.usuarios.update', $usuario->id) }}" id="usuarioForm">
        @csrf
        @method('PATCH')
        
        <div class="form-grid">
          <!-- Información personal -->
          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-user"></i>
              Nombre completo
              <span class="required">*</span>
            </label>
            <input type="text" name="name" value="{{ old('name', $usuario->name) }}" 
                   class="form-input" required maxlength="60" minlength="3"
                   data-validation="required,minLength,maxLength,validName,noEmojis"
                   data-min-length="3" data-max-length="60"
                   placeholder="Ej: Juan Pérez López">
            <div class="char-counter-container">
              <div class="char-counter" id="name-counter">
                <span id="name-current">{{ mb_strlen(old('name', $usuario->name)) }}</span>/60
              </div>
              <div class="char-limits">Mín. 3 - Máx. 60 caracteres</div>
            </div>
            <div class="validation-message validation-info" id="name-validation">
              <i class="fas fa-info-circle"></i>
              <span>Solo letras, espacios y guiones. No números ni símbolos especiales.</span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-at"></i>
              Nombre de usuario
              <span class="required">*</span>
            </label>
            <div class="input-with-icon">
              <input type="text" name="username" value="{{ old('username', $usuario->username) }}" 
                     class="form-input" required maxlength="50" minlength="3"
                     data-validation="required,minLength,maxLength,validUsername,noEmojis"
                     data-min-length="3" data-max-length="50"
                     placeholder="Ej: jperez">
              <i class="fas fa-user-circle input-icon"></i>
            </div>
            <div class="char-counter-container">
              <div class="char-counter" id="username-counter">
                <span id="username-current">{{ mb_strlen(old('username', $usuario->username)) }}</span>/50
              </div>
              <div class="char-limits">Mín. 3 - Máx. 50 caracteres</div>
            </div>
            <div class="validation-message validation-info" id="username-validation">
              <i class="fas fa-info-circle"></i>
              <span>Solo letras, números, puntos y guiones bajos. Sin espacios ni caracteres especiales.</span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-envelope"></i>
              Correo electrónico
              <span class="required">*</span>
            </label>
            <div class="input-with-icon">
              <input type="email" name="email" value="{{ old('email', $usuario->email) }}" 
                     class="form-input" required maxlength="100"
                     data-validation="required,email,maxLength,noEmojis"
                     data-max-length="100"
                     placeholder="Ej: usuario@uppdate.edu.mx">
              <i class="fas fa-mail-bulk input-icon"></i>
            </div>
            <div class="char-counter-container">
              <div class="char-counter" id="email-counter">
                <span id="email-current">{{ mb_strlen(old('email', $usuario->email)) }}</span>/100
              </div>
              <div class="char-limits">Máx. 100 caracteres</div>
            </div>
            <div class="validation-message validation-info" id="email-validation">
              <i class="fas fa-info-circle"></i>
              <span>Formato de email válido. No se permiten emojis ni caracteres especiales.</span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-phone"></i>
              Teléfono
              <span class="optional">(Opcional)</span>
            </label>
            <div class="input-with-icon">
              <input type="text" name="telefono" value="{{ old('telefono', $usuario->telefono) }}" 
                     class="form-input" maxlength="20"
                     data-validation="phone,maxLength"
                     data-max-length="20"
                     placeholder="Ej: (999) 123-4567">
              <i class="fas fa-phone-alt input-icon"></i>
            </div>
            <div class="char-counter-container">
              <div class="char-counter" id="telefono-counter">
                <span id="telefono-current">{{ mb_strlen(old('telefono', $usuario->telefono)) }}</span>/20
              </div>
              <div class="char-limits">Máx. 20 caracteres</div>
            </div>
            <div class="validation-message validation-info" id="telefono-validation">
              <i class="fas fa-info-circle"></i>
              <span>Formato: (XXX) XXX-XXXX o 10 dígitos. Solo números, paréntesis y guiones.</span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-id-card"></i>
              CURP
              <span class="optional">(Opcional)</span>
            </label>
            <div class="input-with-icon">
              <input type="text" name="curp" value="{{ old('curp', $usuario->curp) }}" 
                     class="form-input" maxlength="18" minlength="18"
                     data-validation="curp,maxLength"
                     data-max-length="18"
                     placeholder="Ej: PEDJ840101HDFLRN09">
              <i class="fas fa-id-badge input-icon"></i>
            </div>
            <div class="char-counter-container">
              <div class="char-counter" id="curp-counter">
                <span id="curp-current">{{ mb_strlen(old('curp', $usuario->curp)) }}</span>/18
              </div>
              <div class="char-limits">Exactamente 18 caracteres</div>
            </div>
            <div class="validation-message validation-info" id="curp-validation">
              <i class="fas fa-info-circle"></i>
              <span>Formato válido de 18 caracteres (letras y números). Se convertirá a mayúsculas.</span>
            </div>
          </div>

          <!-- SELECCIÓN DE ROL ACTUALIZADA -->
          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-user-tag"></i>
              Rol del usuario
              <span class="required">*</span>
            </label>
            <div class="input-with-icon">
              <select name="role" class="form-select" required
                      data-validation="required,validSelection">
                <option value="">Selecciona un rol</option>
                <option value="director" {{ old('role', $usuario->role) === 'director' ? 'selected' : '' }}>Director</option>
                <option value="rector" {{ old('role', $usuario->role) === 'rector' ? 'selected' : '' }}>Rector</option>
                <option value="superadmin" {{ old('role', $usuario->role) === 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                <option value="comunicacion" {{ old('role', $usuario->role) === 'comunicacion' ? 'selected' : '' }}>Comunicación</option>
              </select>
              <i class="fas fa-chevron-down input-icon"></i>
            </div>
            <div class="role-description mt-2" id="role-description" style="font-size: 0.875rem; color: var(--text-gray); padding: 0.5rem; background: var(--lighter-purple); border-radius: var(--radius-sm);">
              <strong>Selecciona un rol:</strong> Los permisos se actualizarán inmediatamente después de guardar.
            </div>
          </div>

          <!-- Acciones del formulario -->
          <div class="form-actions">
            <button type="submit" class="btn-submit" id="submitBtn" disabled>
              <i class="fas fa-save"></i>
              <span id="submitText">Actualizar Usuario</span>
            </button>
            <a href="{{ route('admin.listausuario') }}" class="btn-secondary">
              <i class="fas fa-arrow-left"></i>
              Volver a Usuarios
            </a>
          </div>
        </div>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="footer-content">
      <div class="footer-links">
         <a href="{{ route('admin.inicio') }}" class="footer-link">Inicio</a>
         <a href="{{ route('admin.listausuario') }}" class="footer-link">Gestión de Usuarios</a>
        <a href="#" class="footer-link">Contacto</a>
        <a href="#" class="footer-link">Política de privacidad</a>
      </div>
      <p class="copyright">© {{ date('Y') }} UPPDATE - Sistema de Gestión Académica. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Loading Overlay -->
  <div class="loading-overlay" id="loadingOverlay">
    <div class="loading-spinner"></div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Configuración de validación - SUPER ROBUSTA
      const validationConfig = {
        required: {
          message: 'Este campo es obligatorio',
          test: (value) => value.trim().length > 0
        },
        minLength: {
          message: (min) => `Mínimo ${min} caracteres`,
          test: (value, min) => value.trim().length >= parseInt(min)
        },
        maxLength: {
          message: (max) => `Máximo ${max} caracteres`,
          test: (value, max) => value.trim().length <= parseInt(max)
        },
        email: {
          message: 'Correo electrónico inválido',
          test: (value) => {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(value);
          }
        },
        noEmojis: {
          message: 'No se permiten emojis',
          test: (value) => {
            const emojiRegex = /[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}\u{1F900}-\u{1F9FF}]/u;
            return !emojiRegex.test(value);
          }
        },
        validName: {
          message: 'Solo letras, espacios y guiones permitidos',
          test: (value) => {
            const validNameRegex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s\-']+$/;
            return validNameRegex.test(value);
          }
        },
        validUsername: {
          message: 'Solo letras, números, puntos y guiones bajos',
          test: (value) => {
            const usernameRegex = /^[a-zA-Z0-9._]+$/;
            return usernameRegex.test(value);
          }
        },
        phone: {
          message: 'Formato de teléfono inválido',
          test: (value) => {
            if (!value.trim()) return true;
            const phoneRegex = /^(\(\d{3}\)\s?\d{3}-\d{4}|\d{10})$/;
            return phoneRegex.test(value.replace(/\s/g, ''));
          }
        },
        curp: {
          message: 'CURP inválido. Debe tener 18 caracteres alfanuméricos',
          test: (value) => {
            if (!value.trim()) return true;
            const curpRegex = /^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9A-Z]{2}$/;
            return curpRegex.test(value.toUpperCase());
          }
        },
        validSelection: {
          message: 'Selecciona una opción válida',
          test: (value) => value !== ''
        }
      };

      // Elementos del formulario
      const form = document.getElementById('usuarioForm');
      const submitBtn = document.getElementById('submitBtn');
      const submitText = document.getElementById('submitText');
      const fields = form.querySelectorAll('[data-validation]');
      const loadingOverlay = document.getElementById('loadingOverlay');
      
      // Contadores para el resumen
      let validCount = 0;
      let warningCount = 0;
      let errorCount = 0;
      
      // Objeto para almacenar el estado de validación de cada campo
      const fieldStatus = {};
      
      // DESCRIPCIONES DE ROLES ACTUALIZADAS
      const roleDescriptions = {
        'director': 'Acceso a gestión de carreras, estudiantes y docentes de su facultad.',
        'rector': 'Acceso completo a todas las facultades, reportes institucionales y estadísticas.',
        'superadmin': 'Acceso total al sistema, incluyendo gestión de usuarios y configuración del sistema.',
        'comunicacion': 'Acceso a gestión de contenido, noticias y comunicación institucional.',
        'aspirante': 'Acceso limitado para consulta de información y postulación a programas.'
      };
      
      // Inicializar contadores de caracteres para TODOS los campos
      function initCharCounters() {
        const allTextElements = form.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"]');
        
        allTextElements.forEach(element => {
          const maxLength = element.getAttribute('maxlength');
          if (!maxLength) return;
          
          const counterId = element.name ? element.name + '-counter' : element.id + '-counter';
          const currentSpan = element.name ? 
            document.getElementById(element.name + '-current') : 
            document.getElementById(element.id + '-current');
          
          if (!currentSpan) return;
          
          // Actualizar contador inicial
          const currentLength = element.value.length;
          currentSpan.textContent = currentLength;
          updateCounterStyle(counterId, currentLength, maxLength);
          
          // Escuchar cambios en tiempo real
          element.addEventListener('input', function() {
            const length = this.value.length;
            currentSpan.textContent = length;
            updateCounterStyle(counterId, length, maxLength);
          });
        });
      }
      
      // Actualizar estilo del contador de caracteres
      function updateCounterStyle(counterId, current, max) {
        const counter = document.getElementById(counterId);
        if (!counter) return;
        
        const percentage = (current / max) * 100;
        
        counter.classList.remove('warning', 'danger', 'success');
        
        if (percentage >= 90) {
          counter.classList.add('danger');
        } else if (percentage >= 75) {
          counter.classList.add('warning');
        } else if (current > 0 && percentage < 75) {
          counter.classList.add('success');
        }
      }
      
      // Función para mostrar mensaje de validación mejorado
      function showValidationMessage(field, isValid, isWarning = false, message = '') {
        const validationId = field.name ? field.name + '-validation' : field.id + '-validation';
        const validationDiv = document.getElementById(validationId);
        
        if (!validationDiv) return;
        
        // Limpiar clases anteriores
        validationDiv.className = 'validation-message';
        
        // Determinar icono y clase
        let iconClass = 'fa-info-circle';
        let divClass = 'validation-info';
        
        if (isValid) {
          if (isWarning) {
            iconClass = 'fa-exclamation-triangle';
            divClass = 'validation-warning';
          } else {
            iconClass = 'fa-check-circle';
            divClass = 'validation-success';
          }
        } else {
          iconClass = 'fa-exclamation-circle';
          divClass = 'validation-error';
        }
        
        validationDiv.classList.add(divClass);
        validationDiv.innerHTML = `<i class="fas ${iconClass}"></i><span>${message}</span>`;
        
        // Actualizar clases del campo
        field.classList.remove('invalid', 'valid', 'warning');
        
        if (!isValid) {
          field.classList.add('invalid');
          if (!field.classList.contains('shake')) {
            field.classList.add('shake');
            setTimeout(() => field.classList.remove('shake'), 500);
          }
        } else if (isWarning) {
          field.classList.add('warning');
        } else {
          field.classList.add('valid');
          field.classList.add('pulse');
          setTimeout(() => field.classList.remove('pulse'), 500);
        }
      }
      
      // Función para validar un campo individual con filtros robustos
      function validateField(field) {
        const validationRules = field.dataset.validation.split(',');
        let value = field.value;
        
        // Aplicar filtros de limpieza ANTES de validar
        if (field.type !== 'select-one') {
          // Eliminar emojis y caracteres especiales peligrosos
          value = value.replace(/[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}\u{1F900}-\u{1F9FF}]/ug, '');
          
          // Eliminar caracteres especiales según el tipo de campo
          if (field.name === 'name') {
            value = value.replace(/[@#$%^&*_+=|\\:;"'<>,?0-9]/g, '');
          } else if (field.name === 'username') {
            value = value.replace(/[^a-zA-Z0-9._]/g, '');
          } else if (field.name === 'curp') {
            value = value.toUpperCase().replace(/[^A-Z0-9]/g, '');
          } else if (field.name === 'telefono') {
            value = value.replace(/[^\d()\s-]/g, '');
          }
          
          // Eliminar caracteres peligrosos para todos
          value = value.replace(/[<>[\]{}]/g, '');
          
          // Actualizar el valor en el campo si cambió
          if (value !== field.value) {
            field.value = value;
            if (field.name) {
              showTempNotification(`Se limpiaron caracteres no permitidos en ${field.name}`, 'warning');
            }
          }
        }
        
        value = value.trim();
        
        let isValid = true;
        let isWarning = false;
        let errorMessage = '';
        
        // Para campos opcionales vacíos
        if (!value && !field.hasAttribute('required')) {
          fieldStatus[field.name] = { isValid: true, isWarning: false };
          showValidationMessage(field, true, false, '✓ Campo opcional - correcto');
          return { isValid: true, isWarning: false };
        }
        
        // Validar cada regla
        for (const rule of validationRules) {
          const ruleName = rule.trim();
          const config = validationConfig[ruleName];
          if (!config) continue;
          
          let param;
          
          // Obtener el parámetro correcto según la regla
          if (ruleName === 'minLength') {
            param = field.dataset.minLength || field.getAttribute('minlength');
          } else if (ruleName === 'maxLength') {
            param = field.dataset.maxLength || field.getAttribute('maxlength');
          } else {
            param = field.dataset[ruleName.toLowerCase()];
          }
          
          // Convertir a número si es necesario
          if (param && (ruleName === 'minLength' || ruleName === 'maxLength')) {
            param = parseInt(param);
          }
          
          const testResult = config.test(value, param);
          
          if (!testResult) {
            isValid = false;
            const message = typeof config.message === 'function' 
              ? config.message(param) 
              : config.message;
            errorMessage = message;
            break;
          }
        }
        
        // Validaciones adicionales específicas
        if (isValid && value) {
          // Validar CURP específicamente
          if (field.name === 'curp' && value.length !== 18) {
            isValid = false;
            errorMessage = 'El CURP debe tener exactamente 18 caracteres';
          }
          
          // Validar email específicamente
          if (field.name === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
              isValid = false;
              errorMessage = 'Formato de email inválido';
            }
          }
          
          // Validar teléfono específicamente
          if (field.name === 'telefono' && value) {
            // Limpiar para validación
            const cleanPhone = value.replace(/[^\d]/g, '');
            if (cleanPhone.length !== 10) {
              isValid = false;
              errorMessage = 'El teléfono debe tener 10 dígitos';
            }
          }
        }
        
        // Actualizar estado del campo
        fieldStatus[field.name] = { isValid, isWarning };
        
        // Mostrar mensaje apropiado
        if (isValid) {
          if (value.length > 0) {
            showValidationMessage(field, true, false, '✓ Campo válido');
          } else {
            showValidationMessage(field, true, false, '✓ Campo opcional - correcto');
          }
        } else {
          showValidationMessage(field, false, false, errorMessage);
        }
        
        return { isValid, isWarning };
      }
      
      // Función para actualizar contadores globales
      function updateGlobalCounters() {
        validCount = 0;
        warningCount = 0;
        errorCount = 0;
        
        Object.values(fieldStatus).forEach(status => {
          if (status.isValid && !status.isWarning) {
            validCount++;
          } else if (status.isWarning) {
            warningCount++;
          } else {
            errorCount++;
          }
        });
        
        // Actualizar UI del resumen
        document.getElementById('validCount').textContent = validCount;
        document.getElementById('warningCount').textContent = warningCount;
        document.getElementById('errorCount').textContent = errorCount;
        
        // Habilitar/deshabilitar botón de envío
        const allRequiredValid = Array.from(fields)
          .filter(field => field.hasAttribute('required'))
          .every(field => fieldStatus[field.name]?.isValid === true);
        
        const hasErrors = errorCount > 0;
        submitBtn.disabled = !allRequiredValid || hasErrors;
        
        // Actualizar texto del botón
        if (submitBtn.disabled) {
          if (hasErrors) {
            submitText.textContent = `Corrige los errores (${errorCount})`;
            submitBtn.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + submitText.textContent;
          } else if (!allRequiredValid) {
            submitText.textContent = 'Completa los campos requeridos';
            submitBtn.innerHTML = '<i class="fas fa-edit"></i> ' + submitText.textContent;
          }
        } else {
          submitText.textContent = 'Actualizar Usuario';
          submitBtn.innerHTML = '<i class="fas fa-save"></i> ' + submitText.textContent;
          submitBtn.classList.add('pulse');
          setTimeout(() => submitBtn.classList.remove('pulse'), 1000);
        }
      }
      
      // Función para validar todos los campos
      function validateAllFields() {
        fields.forEach(field => {
          validateField(field);
        });
        updateGlobalCounters();
      }
      
      // Inicializar sistema de validación
      function initValidation() {
        // Configurar event listeners para cada campo
        fields.forEach(field => {
          // Validar en tiempo real
          field.addEventListener('input', function() {
            validateField(this);
            updateGlobalCounters();
          });
          
          // Validar al perder foco
          field.addEventListener('blur', function() {
            validateField(this);
            updateGlobalCounters();
          });
          
          // Validar al ganar foco (para limpiar)
          field.addEventListener('focus', function() {
            this.style.borderColor = 'var(--primary-purple)';
          });
          
          // Validación inicial
          const result = validateField(field);
          fieldStatus[field.name] = { 
            isValid: result.isValid, 
            isWarning: result.isWarning 
          };
        });
        
        updateGlobalCounters();
      }
      
      // Mostrar notificación temporal mejorada
      function showTempNotification(message, type = 'info', duration = 4000) {
        // Eliminar notificaciones anteriores
        document.querySelectorAll('.floating-notification').forEach(n => n.remove());
        
        const notification = document.createElement('div');
        notification.className = `floating-notification validation-message validation-${type}`;
        
        let icon = 'fa-info-circle';
        if (type === 'warning') icon = 'fa-exclamation-triangle';
        if (type === 'error') icon = 'fa-exclamation-circle';
        if (type === 'success') icon = 'fa-check-circle';
        
        notification.innerHTML = `
          <div style="padding: 1.25rem; display: flex; align-items: flex-start; gap: 1rem;">
            <i class="fas ${icon}" style="font-size: 1.5rem; margin-top: 0.125rem;"></i>
            <div style="flex: 1;">
              <strong style="display: block; margin-bottom: 0.25rem;">${type === 'error' ? 'Error' : type === 'warning' ? 'Advertencia' : 'Información'}</strong>
              <span>${message}</span>
            </div>
            <button onclick="this.parentElement.parentElement.remove()" style="background: none; border: none; color: inherit; cursor: pointer; font-size: 1.25rem; opacity: 0.7;">×</button>
          </div>
        `;
        
        document.body.appendChild(notification);
        
        // Auto-eliminar después del tiempo especificado
        setTimeout(() => {
          if (notification.parentNode) {
            notification.style.animation = 'slideIn 0.3s ease-out reverse';
            setTimeout(() => notification.remove(), 300);
          }
        }, duration);
      }
      
      // Mostrar descripción del rol seleccionado
      const roleSelect = document.querySelector('select[name="role"]');
      const roleDescription = document.getElementById('role-description');
      
      function updateRoleDescription() {
        const selectedRole = roleSelect.value;
        if (roleDescriptions[selectedRole]) {
          roleDescription.innerHTML = `<strong>${selectedRole.toUpperCase()}:</strong> ${roleDescriptions[selectedRole]}`;
        } else {
          roleDescription.innerHTML = '<strong>Selecciona un rol:</strong> Los permisos se actualizarán inmediatamente después de guardar.';
        }
      }
      
      if (roleSelect) {
        roleSelect.addEventListener('change', updateRoleDescription);
        // Inicializar descripción
        updateRoleDescription();
      }
      
      // Validar antes del envío con overlay de carga
      form.addEventListener('submit', function(event) {
        validateAllFields();
        
        if (errorCount > 0) {
          event.preventDefault();
          showTempNotification('Hay errores en el formulario. Por favor, corrígelos antes de enviar.', 'error');
          
          // Enfocar el primer campo con error
          const firstErrorField = Array.from(fields).find(field => 
            fieldStatus[field.name]?.isValid === false
          );
          if (firstErrorField) {
            firstErrorField.focus();
            firstErrorField.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        } else {
          // Mostrar overlay de carga
          loadingOverlay.style.display = 'flex';
          showTempNotification('Actualizando usuario... Por favor, espere.', 'info');
          
          // El envío real se realiza aquí
        }
      });
      
      // Efectos visuales para botones
      document.querySelectorAll('.nav-link, .logout-btn, .btn-submit:not(:disabled), .btn-secondary').forEach(button => {
        button.addEventListener('mouseenter', function() {
          if (!this.disabled) {
            this.style.transform = 'translateY(-3px)';
          }
        });
        
        button.addEventListener('mouseleave', function() {
          if (!this.disabled) {
            this.style.transform = 'translateY(0)';
          }
        });
        
        button.addEventListener('mousedown', function() {
          if (!this.disabled) {
            this.style.transform = 'translateY(1px)';
          }
        });
        
        button.addEventListener('mouseup', function() {
          if (!this.disabled) {
            this.style.transform = 'translateY(-3px)';
          }
        });
      });
      
      // Formatear teléfono mientras escribe
      const telefonoInput = document.querySelector('input[name="telefono"]');
      if (telefonoInput) {
        telefonoInput.addEventListener('input', function() {
          let value = this.value.replace(/\D/g, '');
          
          if (value.length > 10) {
            value = value.substring(0, 10);
          }
          
          if (value.length > 6) {
            value = '(' + value.substring(0, 3) + ') ' + value.substring(3, 6) + '-' + value.substring(6);
          } else if (value.length > 3) {
            value = '(' + value.substring(0, 3) + ') ' + value.substring(3);
          } else if (value.length > 0) {
            value = '(' + value;
          }
          
          this.value = value;
        });
      }
      
      // Convertir CURP a mayúsculas automáticamente
      const curpInput = document.querySelector('input[name="curp"]');
      if (curpInput) {
        curpInput.addEventListener('input', function() {
          this.value = this.value.toUpperCase();
        });
      }
      
      // Inicializar todo
      initCharCounters();
      initValidation();
      
      // Validación inicial
      validateAllFields();
      
      // Actualizar contador de campos totales
      const totalFieldsCount = fields.length;
      document.getElementById('totalFields').textContent = totalFieldsCount;
      
      // Efecto inicial para resumen
      document.querySelectorAll('.validation-stat').forEach((stat, index) => {
        setTimeout(() => {
          stat.classList.add('pulse');
          setTimeout(() => stat.classList.remove('pulse'), 1000);
        }, index * 200);
      });
      
      // Tooltips para límites de caracteres
      fields.forEach(field => {
        const max = field.getAttribute('maxlength');
        const min = field.getAttribute('minlength');
        if (max) {
          field.title = `Mínimo: ${min || '0'} caracteres | Máximo: ${max} caracteres`;
        }
      });
      
      // Detectar cambios en el formulario
      let formChanged = false;
      const initialValues = {};
      
      fields.forEach(field => {
        initialValues[field.name] = field.value;
        field.addEventListener('input', () => {
          formChanged = true;
          if (submitBtn.disabled) {
            submitBtn.style.cursor = 'not-allowed';
          } else {
            submitBtn.style.cursor = 'pointer';
          }
        });
      });
      
      // Prevenir navegación si hay cambios sin guardar
      window.addEventListener('beforeunload', (e) => {
        if (formChanged) {
          e.preventDefault();
          e.returnValue = 'Tienes cambios sin guardar. ¿Estás seguro de que quieres salir?';
        }
      });
    });
  </script>
</body>
</html>