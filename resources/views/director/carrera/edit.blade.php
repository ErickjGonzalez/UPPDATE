<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Carrera - UPPDATE</title>
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

    /* Header y navegación - Mismo diseño que Director */
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
      max-width: 1200px;
      margin: 3rem auto;
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
      margin-bottom: 0.5rem;
      color: var(--text-dark);
      font-size: 0.95rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .form-input, .form-textarea {
      width: 100%;
      padding: 0.875rem 1rem;
      border: 2px solid #e5e7eb;
      border-radius: var(--radius-md);
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      transition: all 0.3s ease;
      background: var(--white);
    }

    .form-input:focus, .form-textarea:focus {
      outline: none;
      border-color: var(--primary-purple);
      box-shadow: 0 0 0 3px rgba(106, 13, 173, 0.2);
    }

    .form-textarea {
      resize: vertical;
      min-height: 120px;
    }

    /* Input con ícono */
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

    /* Mensajes de validación */
    .validation-message {
      font-size: 0.875rem;
      margin-top: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      animation: fadeIn 0.3s ease-out;
    }

    .validation-error {
      color: var(--danger-red);
    }

    .validation-warning {
      color: var(--warning-yellow);
    }

    .validation-success {
      color: var(--success-green);
    }

    .validation-info {
      color: var(--text-gray);
    }

    /* Contador de caracteres */
    .char-counter {
      font-size: 0.875rem;
      color: var(--text-gray);
      text-align: right;
      margin-top: 0.25rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .char-counter.warning {
      color: var(--warning-yellow);
    }

    .char-counter.danger {
      color: var(--danger-red);
      font-weight: 600;
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

    .success-icon {
      font-size: 1.5rem;
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

    /* Indicador de validación general */
    .validation-summary {
      background: var(--lighter-purple);
      border-radius: var(--radius-lg);
      padding: 1.5rem;
      margin-bottom: 2rem;
      border: 2px solid var(--light-purple);
    }

    .validation-header {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin-bottom: 1rem;
    }

    .validation-icon {
      font-size: 1.5rem;
      color: var(--primary-purple);
    }

    .validation-stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 1rem;
    }

    .validation-stat {
      text-align: center;
      padding: 1rem;
      background: var(--white);
      border-radius: var(--radius-md);
      border: 1px solid #e5e7eb;
    }

    .stat-value {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 0.25rem;
    }

    .stat-label {
      font-size: 0.875rem;
      color: var(--text-gray);
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
    }

    @media (max-width: 480px) {
      .form-grid {
        grid-template-columns: 1fr;
      }
      
      .validation-stats {
        grid-template-columns: 1fr;
      }
    }

    /* Animaciones */
    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
      20%, 40%, 60%, 80% { transform: translateX(5px); }
    }

    .shake {
      animation: shake 0.5s ease-in-out;
    }

    /* Estilos para campos inválidos */
    .invalid {
      border-color: var(--danger-red) !important;
      background-color: rgba(239, 68, 68, 0.05) !important;
    }

    .valid {
      border-color: var(--success-green) !important;
      background-color: rgba(16, 185, 129, 0.05) !important;
    }
  </style>
</head>
<body>
  <!-- Header con navegación - Mismo diseño que Director -->
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
        <a href="{{ route('director.inicio') }}" class="nav-link">
          <i class="fas fa-home"></i>
          Inicio
        </a>
        <a href="{{ route('director.carrera.edit') }}" class="nav-link active">
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
    <!-- Hero section -->
    <section class="page-hero fade-in">
      <div class="hero-content">
        <h1 class="page-title">Editar Carrera</h1>
        <p class="page-subtitle">Actualiza la información de la carrera académica. Todos los campos son importantes para mantener la información precisa y actualizada.</p>
      </div>
    </section>

    <!-- Mensaje de éxito -->
    @if (session('success'))
      <div class="success-message">
        <i class="fas fa-check-circle success-icon"></i>
        <div>{{ session('success') }}</div>
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
          <div class="stat-value" id="totalFields">12</div>
          <div class="stat-label">Campos Totales</div>
        </div>
      </div>
    </div>

    <!-- Formulario -->
    <div class="form-container">
      <form method="POST" action="{{ route('director.carrera.update') }}" id="carreraForm">
        @csrf
        @method('PATCH')
        
        <div class="form-grid">
          <!-- Información básica -->
          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-graduation-cap"></i>
              Nombre de la carrera *
            </label>
            <input type="text" name="nombre" value="{{ old('nombre', $carrera->nombre) }}" 
                   class="form-input" required maxlength="50" minlength="5"
                   data-validation="required,minLength,maxLength,noEmojis"
                   data-min-length="5" data-max-length="50">
            <div class="validation-message validation-info" id="nombre-validation">
              <i class="fas fa-info-circle"></i>
              <span>Mínimo 5, máximo 50 caracteres</span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-user-tie"></i>
              Coordinador
            </label>
            <input type="text" name="coordinador" value="{{ old('coordinador', $carrera->coordinador) }}" 
                   class="form-input" maxlength="60" minlength="5"
                   data-validation="minLength,maxLength,noEmojis"
                   data-min-length="5" data-max-length="60">
            <div class="validation-message validation-info" id="coordinador-validation">
              <i class="fas fa-info-circle"></i>
              <span>Mínimo 5, máximo 60 caracteres</span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-clock"></i>
              Duración *
            </label>
            <input type="text" name="duracion" value="{{ old('duracion', $carrera->duracion) }}" 
                   class="form-input" required placeholder="Ej: 4 años, 8 semestres" maxlength="20"
                   data-validation="required,maxLength,noEmojis"
                   data-max-length="20">
            <div class="validation-message validation-info" id="duracion-validation">
              <i class="fas fa-info-circle"></i>
              <span>Máximo 20 caracteres</span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-laptop-house"></i>
              Modalidad *
            </label>
            <input type="text" name="modalidad" value="{{ old('modalidad', $carrera->modalidad) }}" 
                   class="form-input" required placeholder="Ej: Presencial, Híbrida, Online" maxlength="40"
                   data-validation="required,maxLength,noEmojis"
                   data-max-length="40">
            <div class="validation-message validation-info" id="modalidad-validation">
              <i class="fas fa-info-circle"></i>
              <span>Máximo 40 caracteres</span>
            </div>
          </div>

          <!-- URLs y enlaces -->
          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-link"></i>
              Plan de estudios (URL)
            </label>
            <div class="input-with-icon">
              <input type="url" name="plan_estudios_url" value="{{ old('plan_estudios_url', $carrera->plan_estudios_url) }}" 
                     class="form-input" placeholder="https://ejemplo.com/plan-estudios" maxlength="250"
                     data-validation="optionalUrl,maxLength" pattern="https?://.+" data-max-length="250">
              <i class="fas fa-external-link-alt input-icon"></i>
            </div>
            <div class="validation-message validation-info" id="plan_estudios_url-validation">
              <i class="fas fa-info-circle"></i>
              <span>URL válida con http:// o https:// (máx. 250 caracteres)</span>
            </div>
          </div>

          <!-- Descripciones largas -->
          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-align-left"></i>
              Descripción *
            </label>
            <textarea name="descripcion" class="form-textarea" required rows="4" maxlength="250" minlength="5"
                      data-validation="required,minLength,maxLength,noEmojis"
                      data-min-length="5" data-max-length="250">{{ old('descripcion', $carrera->descripcion) }}</textarea>
            <div class="char-counter" id="descripcion-counter">
              <span id="descripcion-current">0</span> / 250 caracteres
            </div>
            <div class="validation-message validation-info" id="descripcion-validation">
              <i class="fas fa-info-circle"></i>
              <span>Mínimo 5, máximo 250 caracteres</span>
            </div>
          </div>

          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-user-graduate"></i>
              Perfil de ingreso
            </label>
            <textarea name="perfil_ingreso" class="form-textarea" rows="4" maxlength="250" minlength="5"
                      data-validation="minLength,maxLength,noEmojis"
                      data-min-length="5" data-max-length="250">{{ old('perfil_ingreso', $carrera->perfil_ingreso) }}</textarea>
            <div class="char-counter" id="perfil_ingreso-counter">
              <span id="perfil_ingreso-current">0</span> / 250 caracteres
            </div>
            <div class="validation-message validation-info" id="perfil_ingreso-validation">
              <i class="fas fa-info-circle"></i>
              <span>Mínimo 5, máximo 250 caracteres</span>
            </div>
          </div>

          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-user-md"></i>
              Perfil de egreso
            </label>
            <textarea name="perfil_egreso" class="form-textarea" rows="4" maxlength="250" minlength="5"
                      data-validation="minLength,maxLength,noEmojis"
                      data-min-length="5" data-max-length="250">{{ old('perfil_egreso', $carrera->perfil_egreso) }}</textarea>
            <div class="char-counter" id="perfil_egreso-counter">
              <span id="perfil_egreso-current">0</span> / 250 caracteres
            </div>
            <div class="validation-message validation-info" id="perfil_egreso-validation">
              <i class="fas fa-info-circle"></i>
              <span>Mínimo 5, máximo 250 caracteres</span>
            </div>
          </div>

          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-cogs"></i>
              Áreas de especialización
            </label>
            <textarea name="areas_especializacion" class="form-textarea" rows="4" maxlength="250" minlength="5"
                      data-validation="minLength,maxLength,noEmojis"
                      data-min-length="5" data-max-length="250">{{ old('areas_especializacion', $carrera->areas_especializacion) }}</textarea>
            <div class="char-counter" id="areas_especializacion-counter">
              <span id="areas_especializacion-current">0</span> / 250 caracteres
            </div>
            <div class="validation-message validation-info" id="areas_especializacion-validation">
              <i class="fas fa-info-circle"></i>
              <span>Mínimo 5, máximo 250 caracteres</span>
            </div>
          </div>

          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-briefcase"></i>
              Campo profesional
            </label>
            <textarea name="campo_profesional" class="form-textarea" rows="4" maxlength="250" minlength="5"
                      data-validation="minLength,maxLength,noEmojis"
                      data-min-length="5" data-max-length="250">{{ old('campo_profesional', $carrera->campo_profesional) }}</textarea>
            <div class="char-counter" id="campo_profesional-counter">
              <span id="campo_profesional-current">0</span> / 250 caracteres
            </div>
            <div class="validation-message validation-info" id="campo_profesional-validation">
              <i class="fas fa-info-circle"></i>
              <span>Mínimo 5, máximo 250 caracteres</span>
            </div>
          </div>

          <div class="form-group full-width">
            <label class="form-label">
              <i class="fas fa-comment-alt"></i>
              Testimonios
            </label>
            <textarea name="testimonios" class="form-textarea" rows="4" maxlength="250" minlength="5"
                      data-validation="minLength,maxLength,noEmojis"
                      data-min-length="5" data-max-length="250">{{ old('testimonios', $carrera->testimonios) }}</textarea>
            <div class="char-counter" id="testimonios-counter">
              <span id="testimonios-current">0</span> / 250 caracteres
            </div>
            <div class="validation-message validation-info" id="testimonios-validation">
              <i class="fas fa-info-circle"></i>
              <span>Mínimo 5, máximo 250 caracteres</span>
            </div>
          </div>

          <!-- Acciones del formulario -->
          <div class="form-actions">
            <button type="submit" class="btn-submit" id="submitBtn" disabled>
              <i class="fas fa-save"></i>
              Actualizar Carrera
            </button>
            <a href="{{ route('director.inicio') }}" class="btn-secondary">
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
        <a href="{{ route('director.inicio') }}" class="footer-link">Inicio</a>
        <a href="#" class="footer-link">Acerca de</a>
        <a href="#" class="footer-link">Contacto</a>
        <a href="#" class="footer-link">Política de privacidad</a>
      </div>
      <p class="copyright">© {{ date('Y') }} UPPDATE - Sistema de Gestión Académica. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Configuración de validación
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
          message: 'No se permiten emojis ni caracteres especiales',
          test: (value) => {
            // Expresión regular para detectar emojis y caracteres no permitidos
            const emojiRegex = /[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}]/u;
            const specialCharsRegex = /[<>[\]{}]/;
            return !emojiRegex.test(value) && !specialCharsRegex.test(value);
          }
        },
        optionalUrl: {
          message: 'Debe ser una URL válida (http:// o https://)',
          test: (value) => {
            if (!value.trim()) return true; // Opcional
            try {
              new URL(value);
              return value.startsWith('http://') || value.startsWith('https://');
            } catch {
              return false;
            }
          }
        }
      };

      // Elementos del formulario
      const form = document.getElementById('carreraForm');
      const submitBtn = document.getElementById('submitBtn');
      const fields = form.querySelectorAll('[data-validation]');
      
      // Contadores para el resumen
      let validCount = 0;
      let warningCount = 0;
      let errorCount = 0;
      
      // Objeto para almacenar el estado de validación de cada campo
      const fieldStatus = {};
      
      // Inicializar contadores de caracteres
      function initCharCounters() {
        const textareas = form.querySelectorAll('textarea[maxlength]');
        const inputs = form.querySelectorAll('input[maxlength]');
        
        // Para textareas
        textareas.forEach(textarea => {
          const counterId = textarea.name + '-counter';
          const currentSpan = document.getElementById(textarea.name + '-current');
          
          if (currentSpan) {
            // Actualizar contador inicial
            const currentLength = textarea.value.length;
            currentSpan.textContent = currentLength;
            updateCounterStyle(counterId, currentLength, textarea.maxLength);
            
            // Escuchar cambios
            textarea.addEventListener('input', function() {
              const length = this.value.length;
              currentSpan.textContent = length;
              updateCounterStyle(counterId, length, this.maxLength);
            });
          }
        });
        
        // Para inputs (excepto URL que es muy largo)
        inputs.forEach(input => {
          if (input.type !== 'url' && input.maxlength) {
            input.addEventListener('input', function() {
              const current = this.value.length;
              const max = parseInt(this.maxlength);
              
              // Mostrar contador en el atributo title
              this.title = `${current}/${max} caracteres`;
              
              // Cambiar color del borde según el uso
              const percentage = (current / max) * 100;
              this.style.borderColor = percentage >= 90 ? 'var(--danger-red)' : 
                                     percentage >= 75 ? 'var(--warning-yellow)' : 
                                     this.checkValidity() ? '#e5e7eb' : 'var(--danger-red)';
            });
          }
        });
      }
      
      // Actualizar estilo del contador
      function updateCounterStyle(counterId, current, max) {
        const counter = document.getElementById(counterId);
        if (!counter) return;
        
        const percentage = (current / max) * 100;
        
        counter.classList.remove('warning', 'danger');
        
        if (percentage >= 90) {
          counter.classList.add('danger');
        } else if (percentage >= 75) {
          counter.classList.add('warning');
        }
      }
      
      // Función para mostrar mensaje de validación
      function showValidationMessage(field, isValid, isWarning = false, message = '') {
        const validationId = field.name + '-validation';
        const validationDiv = document.getElementById(validationId);
        
        if (!validationDiv) return;
        
        // Limpiar clases anteriores
        validationDiv.className = 'validation-message';
        
        if (isValid) {
          if (isWarning) {
            validationDiv.classList.add('validation-warning');
            validationDiv.innerHTML = `<i class="fas fa-exclamation-triangle"></i><span>${message}</span>`;
          } else {
            validationDiv.classList.add('validation-success');
            validationDiv.innerHTML = `<i class="fas fa-check-circle"></i><span>✓ Campo válido</span>`;
          }
        } else {
          validationDiv.classList.add('validation-error');
          validationDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i><span>${message}</span>`;
        }
        
        // Actualizar clases del campo
        field.classList.remove('invalid', 'valid');
        if (!isValid) {
          field.classList.add('invalid');
          if (!field.classList.contains('shake')) {
            field.classList.add('shake');
            setTimeout(() => field.classList.remove('shake'), 500);
          }
        } else if (!isWarning) {
          field.classList.add('valid');
        }
      }
      
      // Función para validar un campo individual - CORREGIDA
      function validateField(field) {
        const validationRules = field.dataset.validation.split(',');
        const value = field.value.trim();
        
        let isValid = true;
        let isWarning = false;
        let errorMessage = '';
        
        // Para campos opcionales vacíos (excepto URL)
        if (!value && !field.hasAttribute('required')) {
          if (field.name !== 'plan_estudios_url') {
            fieldStatus[field.name] = { isValid: true, isWarning: true };
            showValidationMessage(field, true, true, 'Campo opcional - puede dejarse vacío');
            return { isValid: true, isWarning: true };
          }
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
            param = field.dataset[ruleName.toLowerCase().replace(' ', '-')];
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
            
            // Para campos opcionales vacíos, mostrar advertencia en lugar de error
            if (ruleName === 'optionalUrl' && !value) {
              isWarning = true;
              isValid = true;
              errorMessage = 'Campo opcional - puede dejarse vacío';
            }
            break;
          }
        }
        
        // Validación especial para campos con minLength pero que están vacíos y no son requeridos
        if (!value && !field.hasAttribute('required') && validationRules.includes('minLength')) {
          // Si está vacío y no es requerido, es válido con advertencia
          isValid = true;
          isWarning = true;
          errorMessage = 'Campo opcional - puede dejarse vacío';
        }
        
        // Actualizar estado del campo
        fieldStatus[field.name] = { isValid, isWarning };
        
        // Mostrar mensaje
        showValidationMessage(field, isValid, isWarning, errorMessage);
        
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
        
        // Actualizar UI
        document.getElementById('validCount').textContent = validCount;
        document.getElementById('warningCount').textContent = warningCount;
        document.getElementById('errorCount').textContent = errorCount;
        
        // Habilitar/deshabilitar botón de envío
        const allRequiredValid = Array.from(fields)
          .filter(field => field.hasAttribute('required'))
          .every(field => fieldStatus[field.name]?.isValid === true);
        
        submitBtn.disabled = !allRequiredValid || errorCount > 0;
        
        // Actualizar texto del botón
        if (submitBtn.disabled) {
          if (errorCount > 0) {
            submitBtn.innerHTML = '<i class="fas fa-exclamation-circle"></i> Corrige los errores (' + errorCount + ')';
          } else if (!allRequiredValid) {
            submitBtn.innerHTML = '<i class="fas fa-edit"></i> Completa los campos requeridos';
          }
        } else {
          submitBtn.innerHTML = '<i class="fas fa-save"></i> Actualizar Carrera';
        }
      }
      
      // Función para validar todos los campos
      function validateAllFields() {
        fields.forEach(field => {
          validateField(field);
        });
        updateGlobalCounters();
      }
      
      // Inicializar validaciones
      function initValidation() {
        // Configurar event listeners para cada campo
        fields.forEach(field => {
          field.addEventListener('input', function() {
            validateField(this);
            updateGlobalCounters();
          });
          
          field.addEventListener('blur', function() {
            validateField(this);
            updateGlobalCounters();
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
      
      // Limpiar emojis automáticamente
      function initEmojiCleaner() {
        const inputs = form.querySelectorAll('input, textarea');
        inputs.forEach(input => {
          input.addEventListener('input', function() {
            const hasEmojis = /[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}]/u.test(this.value);
            const hasSpecial = /[<>[\]{}]/.test(this.value);
            
            if (hasEmojis || hasSpecial) {
              // Limpiar automáticamente
              this.value = this.value.replace(/[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}]/ug, '');
              this.value = this.value.replace(/[<>[\]{}]/g, '');
              
              // Mostrar notificación
              showTempNotification('Se han eliminado emojis y caracteres especiales no permitidos', 'warning');
            }
          });
        });
      }
      
      // Mostrar notificación temporal
      function showTempNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `validation-message validation-${type}`;
        notification.innerHTML = `<i class="fas fa-${type === 'warning' ? 'exclamation-triangle' : 'info-circle'}"></i><span>${message}</span>`;
        notification.style.position = 'fixed';
        notification.style.top = '100px';
        notification.style.right = '20px';
        notification.style.zIndex = '1000';
        notification.style.maxWidth = '300px';
        notification.style.boxShadow = 'var(--shadow-lg)';
        notification.style.animation = 'slideIn 0.3s ease-out';
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
          notification.style.animation = 'slideIn 0.3s ease-out reverse';
          setTimeout(() => notification.remove(), 300);
        }, 3000);
      }
      
      // Validar antes del envío
      form.addEventListener('submit', function(event) {
        validateAllFields();
        
        if (errorCount > 0) {
          event.preventDefault();
          showTempNotification('Por favor, corrige los errores antes de enviar el formulario', 'error');
          
          // Enfocar el primer campo con error
          const firstErrorField = Array.from(fields).find(field => 
            fieldStatus[field.name]?.isValid === false
          );
          if (firstErrorField) {
            firstErrorField.focus();
            firstErrorField.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        } else if (warningCount > 0) {
          // Mostrar confirmación si hay advertencias
          if (!confirm('Hay algunos campos con advertencias. ¿Deseas continuar de todos modos?')) {
            event.preventDefault();
          }
        }
      });
      
      // Efecto hover para botones
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
      });
      
      // Inicializar
      initCharCounters();
      initValidation();
      initEmojiCleaner();
      
      // Validación inicial
      validateAllFields();
      
      // Actualizar contador de campos totales
      document.getElementById('totalFields').textContent = fields.length;
      
      // Mostrar límites iniciales en inputs
      form.querySelectorAll('input[maxlength]').forEach(input => {
        const current = input.value.length;
        const max = parseInt(input.maxlength);
        input.title = `${current}/${max} caracteres`;
      });
      
      // Mostrar límites iniciales en textareas
      form.querySelectorAll('textarea[maxlength]').forEach(textarea => {
        const current = textarea.value.length;
        const max = parseInt(textarea.maxlength);
        textarea.title = `${current}/${max} caracteres`;
      });
    });
  </script>
</body>
</html>