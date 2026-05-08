<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Carrera - Superadministrador | UPPDATE</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-purple: #6a0dad;
      --dark-purple: #4b0082;
      --light-purple: #f3e8ff;
      --lighter-purple: #f9f5ff;
      --white: #ffffff;
      --text-dark: #1f2937;
      --text-gray: #6b7280;
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

    /* Header y navegación - Del primer código */
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

    /* Mensaje de éxito */
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

    .success-icon {
      font-size: 1.5rem;
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
      gap: 2rem;
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

    .form-input, .form-textarea, .form-select {
      width: 100%;
      padding: 0.875rem 1rem;
      border: 2px solid #e5e7eb;
      border-radius: var(--radius-md);
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      transition: all 0.3s ease;
      background: var(--white);
    }

    .form-input:focus, .form-textarea:focus, .form-select:focus {
      outline: none;
      border-color: var(--primary-purple);
      box-shadow: 0 0 0 3px rgba(106, 13, 173, 0.2);
    }

    .form-textarea {
      resize: vertical;
      min-height: 120px;
    }

    .form-select {
      cursor: pointer;
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 1rem center;
      background-size: 1.5em;
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

    /* Información adicional (colapsable) */
    .additional-info summary {
      cursor: pointer;
      padding: 1.25rem;
      background: var(--light-purple);
      border-radius: var(--radius-md);
      font-weight: 600;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.5rem;
      transition: all 0.3s ease;
      list-style: none;
      font-size: 1rem;
    }

    .additional-info summary:hover {
      background: #e9d8fd;
    }

    .additional-info summary::after {
      content: '▼';
      font-size: 0.9rem;
      transition: transform 0.3s ease;
    }

    .additional-info[open] summary::after {
      transform: rotate(180deg);
    }

    .additional-info summary::-webkit-details-marker {
      display: none;
    }

    .additional-content {
      margin-top: 1rem;
      padding: 2rem;
      background: var(--lighter-purple);
      border-radius: var(--radius-md);
      animation: fadeIn 0.3s ease-out;
      border: 1px solid var(--light-purple);
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
      
      .form-container {
        padding: 2rem 1.5rem;
      }
      
      .form-actions {
        flex-direction: column;
      }
      
      .footer-links {
        flex-direction: column;
        gap: 0.75rem;
      }
      
      .validation-stats {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .additional-info summary {
        padding: 1rem;
      }
      
      .additional-content {
        padding: 1.5rem;
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
        <a href="{{ route('admin.inicio') }}" class="nav-link">
          <i class="fas fa-home"></i>
          Inicio
        </a>
        <a href="{{ route('superadmin.carreras.index') }}" class="nav-link active">
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
    <section class="page-hero">
      <div class="hero-content">
        <h1 class="page-title">Editar Carrera</h1>
        <p class="page-subtitle">Modifica los detalles de la carrera y asigna un director responsable. Los cambios se reflejarán inmediatamente en el sistema.</p>
      </div>
    </section>

    <!-- Mensaje de éxito -->
    @if(session('message'))
      <div class="success-message">
        <i class="fas fa-check-circle success-icon"></i>
        <div>{{ session('message') }}</div>
      </div>
    @endif

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

    <!-- Formulario -->
    <div class="form-container">
      <form method="POST" action="{{ route('superadmin.carreras.update', $carrera) }}" id="carreraForm">
        @csrf
        @method('PUT')
        
        <div class="form-grid">
          <!-- Información básica -->
          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-graduation-cap"></i>
              Nombre de la carrera
              <span class="required">*</span>
            </label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $carrera->nombre) }}" 
                   class="form-input" required maxlength="60" minlength="5"
                   data-validation="required,minLength,maxLength,noSpecialChars,noEmojis"
                   data-min-length="5" data-max-length="100"
                   placeholder="Ingrese el nombre completo de la carrera">
            <div class="char-counter-container">
              <div class="char-counter" id="nombre-counter">
                <span id="nombre-current">{{ mb_strlen(old('nombre', $carrera->nombre)) }}</span>/100
              </div>
              <div class="char-limits">Mín. 5 - Máx. 60 caracteres</div>
            </div>
            <div class="validation-message validation-info" id="nombre-validation">
              <i class="fas fa-info-circle"></i>
              <span>Solo letras, números y espacios. No se permiten símbolos especiales ni emojis.</span>
            </div>
          </div>

          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-align-left"></i>
              Descripción
              <span class="required">*</span>
            </label>
            <textarea id="descripcion" name="descripcion" rows="5" 
                      class="form-textarea" required maxlength="500" minlength="20"
                      data-validation="required,minLength,maxLength,noEmojis"
                      data-min-length="20" data-max-length="500"
                      placeholder="Describa la carrera académica, objetivos y características principales">{{ old('descripcion', $carrera->descripcion) }}</textarea>
            <div class="char-counter-container">
              <div class="char-counter" id="descripcion-counter">
                <span id="descripcion-current">{{ mb_strlen(old('descripcion', $carrera->descripcion)) }}</span>/500
              </div>
              <div class="char-limits">Mín. 20 - Máx. 500 caracteres</div>
            </div>
            <div class="validation-message validation-info" id="descripcion-validation">
              <i class="fas fa-info-circle"></i>
              <span>No se permiten emojis ni caracteres especiales peligrosos (&lt; &gt; [ ] { }).</span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-user-tie"></i>
              Coordinador
              <span class="optional">(Opcional)</span>
            </label>
            <input type="text" id="coordinador" name="coordinador" value="{{ old('coordinador', $carrera->coordinador) }}" 
                   class="form-input" maxlength="50" minlength="2"
                   data-validation="minLength,maxLength,validName,noEmojis"
                   data-min-length="4" data-max-length="80"
                   placeholder="Nombre completo del coordinador">
            <div class="char-counter-container">
              <div class="char-counter" id="coordinador-counter">
                <span id="coordinador-current">{{ mb_strlen(old('coordinador', $carrera->coordinador)) }}</span>/80
              </div>
              <div class="char-limits">Mín. 4 - Máx. 50 caracteres</div>
            </div>
            <div class="validation-message validation-info" id="coordinador-validation">
              <i class="fas fa-info-circle"></i>
              <span>Solo letras, espacios y guiones. No números ni símbolos.</span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-link"></i>
              Plan de estudios (URL)
              <span class="optional">(Opcional)</span>
            </label>
            <div class="input-with-icon">
              <input type="url" id="plan_estudios_url" name="plan_estudios_url" 
                     value="{{ old('plan_estudios_url', $carrera->plan_estudios_url) }}" 
                     class="form-input" 
                     placeholder="https://ejemplo.com/plan-estudios" maxlength="250"
                     data-validation="optionalUrl,maxLength,validUrl" data-max-length="250"
                     pattern="https?://.+">
              <i class="fas fa-external-link-alt input-icon"></i>
            </div>
            <div class="char-counter-container">
              <div class="char-counter" id="plan_estudios_url-counter">
                <span id="plan_estudios_url-current">{{ mb_strlen(old('plan_estudios_url', $carrera->plan_estudios_url)) }}</span>/250
              </div>
              <div class="char-limits">Máx. 250 caracteres</div>
            </div>
            <div class="validation-message validation-info" id="plan_estudios_url-validation">
              <i class="fas fa-info-circle"></i>
              <span>URL válida con http:// o https://. No se permiten caracteres especiales.</span>
            </div>
          </div>

          <!-- Director asignado -->
          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-user-shield"></i>
              Director asignado
              <span class="required">*</span>
            </label>
            <select id="director_id" name="director_id" 
                    class="form-select" required
                    data-validation="required,validSelection">
              <option value="">Selecciona un director</option>
              @foreach ($directores as $director)
                <option value="{{ $director->id }}" 
                        @selected(old('director_id', $carrera->director_id) == $director->id)
                        data-email="{{ $director->email }}"
                        data-name="{{ $director->name }}">
                  {{ $director->name }} ({{ $director->email }})
                </option>
              @endforeach
            </select>
            <div class="validation-message validation-info" id="director_id-validation">
              <i class="fas fa-info-circle"></i>
              <span>Selecciona un director de la lista. Campo obligatorio.</span>
            </div>
          </div>

          <!-- Información adicional (colapsable) -->
          <div class="form-group full-width">
            <details class="additional-info">
              <summary>
                <span><i class="fas fa-plus-circle"></i> Información adicional de la carrera</span>
              </summary>
              <div class="additional-content">
                <div style="display: grid; gap: 1.5rem; margin-top: 0.5rem;">
                  <div>
                    <label class="form-label">
                      <i class="fas fa-clock"></i>
                      Duración
                      <span class="optional">(Opcional)</span>
                    </label>
                    <input type="text" name="duracion" value="{{ old('duracion', $carrera->duracion ?? '') }}" 
                           class="form-input" placeholder="Ej: 4 años, 8 semestres" maxlength="30"
                           data-validation="maxLength,noEmojis" data-max-length="30">
                    <div class="char-counter-container">
                      <div class="char-counter" id="duracion-counter">
                        <span id="duracion-current">{{ mb_strlen(old('duracion', $carrera->duracion ?? '')) }}</span>/30
                      </div>
                      <div class="char-limits">Máx. 30 caracteres</div>
                    </div>
                    <div class="validation-message validation-info" id="duracion-validation">
                      <i class="fas fa-info-circle"></i>
                      <span>No se permiten emojis ni caracteres especiales.</span>
                    </div>
                  </div>
                  
                  <div>
                    <label class="form-label">
                      <i class="fas fa-laptop-house"></i>
                      Modalidad
                      <span class="optional">(Opcional)</span>
                    </label>
                    <input type="text" name="modalidad" value="{{ old('modalidad', $carrera->modalidad ?? '') }}" 
                           class="form-input" placeholder="Ej: Presencial, Híbrida, Online" maxlength="50"
                           data-validation="maxLength,noEmojis" data-max-length="50">
                    <div class="char-counter-container">
                      <div class="char-counter" id="modalidad-counter">
                        <span id="modalidad-current">{{ mb_strlen(old('modalidad', $carrera->modalidad ?? '')) }}</span>/50
                      </div>
                      <div class="char-limits">Máx. 50 caracteres</div>
                    </div>
                    <div class="validation-message validation-info" id="modalidad-validation">
                      <i class="fas fa-info-circle"></i>
                      <span>No se permiten emojis ni caracteres especiales.</span>
                    </div>
                  </div>
                </div>
              </div>
            </details>
          </div>

          <!-- Acciones del formulario -->
          <div class="form-actions">
            <button type="submit" class="btn-submit" id="submitBtn" disabled>
              <i class="fas fa-save"></i>
              <span id="submitText">Guardar Cambios</span>
            </button>
            <a href="{{ route('superadmin.carreras.index') }}" class="btn-secondary">
              <i class="fas fa-times"></i>
              Cancelar
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
        <a href="{{ route('superadmin.carreras.index') }}" class="footer-link">Carreras</a>
        <a href="{{ route('admin.listausuario') }}" class="footer-link">Usuarios</a>
        <a href="#" class="footer-link">Configuración</a>
      </div>
      <p class="copyright">© {{ date('Y') }} UPPDATE - Panel de Superadministrador. Todos los derechos reservados.</p>
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
        noEmojis: {
          message: 'No se permiten emojis',
          test: (value) => {
            const emojiRegex = /[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}\u{1F900}-\u{1F9FF}]/u;
            return !emojiRegex.test(value);
          }
        },
        noSpecialChars: {
          message: 'No se permiten símbolos especiales (@#$%^&*_+=|\\:;"\'<>,?)',
          test: (value) => {
            const specialCharsRegex = /[@#$%^&*_+=|\\:;"'<>,?]/;
            return !specialCharsRegex.test(value);
          }
        },
        validName: {
          message: 'Solo letras, espacios y guiones permitidos',
          test: (value) => {
            if (!value.trim()) return true;
            const validNameRegex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s\-]+$/;
            return validNameRegex.test(value);
          }
        },
        optionalUrl: {
          message: 'Debe ser una URL válida (http:// o https://)',
          test: (value) => {
            if (!value.trim()) return true;
            try {
              new URL(value);
              return value.startsWith('http://') || value.startsWith('https://');
            } catch {
              return false;
            }
          }
        },
        validUrl: {
          message: 'URL inválida o contiene caracteres no permitidos',
          test: (value) => {
            if (!value.trim()) return true;
            const urlRegex = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
            return urlRegex.test(value);
          }
        },
        validSelection: {
          message: 'Selecciona una opción válida',
          test: (value) => value !== ''
        }
      };

      // Elementos del formulario
      const form = document.getElementById('carreraForm');
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
      
      // Inicializar contadores de caracteres para TODOS los campos
      function initCharCounters() {
        const allTextElements = form.querySelectorAll('input[type="text"], input[type="url"], textarea');
        
        allTextElements.forEach(element => {
          const maxLength = element.getAttribute('maxlength');
          if (!maxLength) return;
          
          const counterId = element.id ? element.id + '-counter' : element.name + '-counter';
          const currentSpan = element.id ? 
            document.getElementById(element.id + '-current') : 
            document.getElementById(element.name + '-current');
          
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
            
            // Actualizar límite visual en el campo
            this.style.borderColor = this.checkValidity() ? '#e5e7eb' : 'var(--danger-red)';
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
        const validationId = field.id ? field.id + '-validation' : field.name + '-validation';
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
        if (field.type !== 'url' && field.type !== 'select-one') {
          // Eliminar emojis y caracteres especiales peligrosos
          value = value.replace(/[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}\u{1F900}-\u{1F9FF}]/ug, '');
          
          // Eliminar caracteres especiales según el tipo de campo
          if (field.name === 'nombre' || field.name === 'coordinador') {
            value = value.replace(/[@#$%^&*_+=|\\:;"'<>,?0-9]/g, '');
          }
          
          // Eliminar caracteres peligrosos para todos
          value = value.replace(/[<>[\]{}]/g, '');
          
          // Actualizar el valor en el campo si cambió
          if (value !== field.value) {
            field.value = value;
            showTempNotification('Se eliminaron caracteres no permitidos', 'warning');
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
        
        // Validaciones adicionales
        if (isValid && value) {
          // Validar que los nombres no tengan números
          if ((field.name === 'nombre' || field.name === 'coordinador') && /\d/.test(value)) {
            isValid = false;
            errorMessage = 'No se permiten números en nombres';
          }
          
          // Validar URL más específicamente
          if (field.type === 'url' && value) {
            const urlRegex = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
            if (!urlRegex.test(value)) {
              isValid = false;
              errorMessage = 'URL inválida. Use formato: https://ejemplo.com';
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
        
        // Actualizar clases de los contadores
        const validStat = document.querySelector('.validation-stat:nth-child(1)');
        const warningStat = document.querySelector('.validation-stat:nth-child(2)');
        const errorStat = document.querySelector('.validation-stat:nth-child(3)');
        
        [validStat, warningStat, errorStat].forEach(stat => stat.classList.remove('pulse'));
        
        if (validCount > 0) validStat.classList.add('pulse');
        if (warningCount > 0) warningStat.classList.add('pulse');
        if (errorCount > 0) errorStat.classList.add('pulse');
        
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
          submitText.textContent = 'Guardar Cambios';
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
          showTempNotification('Procesando cambios... Por favor, espere.', 'info');
          
          // Simular envío (en producción, esto sería real)
          setTimeout(() => {
            loadingOverlay.style.display = 'none';
            showTempNotification('¡Cambios guardados exitosamente!', 'success');
          }, 1500);
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
      
      // Cambiar ícono del details cuando se abre/cierra
      const additionalInfo = document.querySelector('.additional-info');
      if (additionalInfo) {
        additionalInfo.addEventListener('toggle', function() {
          const summaryIcon = this.querySelector('summary i');
          if (this.open) {
            summaryIcon.className = 'fas fa-minus-circle';
            summaryIcon.style.color = 'var(--primary-purple)';
          } else {
            summaryIcon.className = 'fas fa-plus-circle';
            summaryIcon.style.color = '';
          }
        });
      }
    });
  </script>
</body>
</html>