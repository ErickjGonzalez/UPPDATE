<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Convocatoria - Área de Comunicación</title>
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

        .role-badge {
            background: linear-gradient(to right, var(--info-blue), #1d4ed8);
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

        /* Mensajes */
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

        .error-message {
            background: linear-gradient(to right, var(--danger-red), #f87171);
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

        /* Contador de caracteres */
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

        /* Archivos actuales */
        .current-files {
            background: var(--lighter-purple);
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border: 2px dashed var(--light-purple);
        }

        .files-title {
            font-weight: 600;
            color: var(--primary-purple);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .files-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .file-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: var(--white);
            border-radius: var(--radius-md);
            border: 1px solid #e5e7eb;
        }

        .file-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .file-icon {
            width: 40px;
            height: 40px;
            background: var(--light-purple);
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-purple);
            font-size: 1.2rem;
        }

        .file-details {
            flex: 1;
        }

        .file-name {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .file-size {
            font-size: 0.85rem;
            color: var(--text-gray);
        }

        .file-actions {
            display: flex;
            gap: 0.5rem;
        }

        .file-btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: var(--radius-sm);
            font-weight: 500;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .file-btn.view {
            background: var(--info-blue);
            color: white;
        }

        .file-btn.view:hover {
            background: #2563eb;
            transform: translateY(-2px);
        }

        .file-btn.download {
            background: var(--success-green);
            color: white;
        }

        .file-btn.download:hover {
            background: #059669;
            transform: translateY(-2px);
        }

        /* Estilos para archivos */
        .file-upload-container {
            border: 2px dashed #e5e7eb;
            border-radius: var(--radius-md);
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            background: var(--lighter-purple);
        }

        .file-upload-container:hover {
            border-color: var(--primary-purple);
            background: var(--light-purple);
        }

        .file-upload-container.drag-over {
            border-color: var(--success-green);
            background: rgba(16, 185, 129, 0.1);
        }

        .file-input {
            display: none;
        }

        .file-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            cursor: pointer;
            color: var(--text-gray);
        }

        .upload-icon {
            font-size: 3rem;
            color: var(--primary-purple);
        }

        .file-hint {
            font-size: 0.875rem;
            color: var(--text-gray);
        }

        .file-preview {
            margin-top: 1rem;
            padding: 1rem;
            background: var(--white);
            border-radius: var(--radius-md);
            border: 1px solid #e5e7eb;
            display: none;
        }

        .new-file-name {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            color: var(--text-dark);
        }

        .file-remove {
            color: var(--danger-red);
            cursor: pointer;
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }

        /* Input de fecha */
        .date-inputs {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .date-separator {
            color: var(--text-gray);
            font-weight: 600;
        }

        /* Información del formulario */
        .info-box {
            background: var(--lighter-purple);
            border-left: 4px solid var(--info-blue);
            padding: 1.5rem;
            border-radius: var(--radius-md);
            margin-bottom: 2rem;
            grid-column: 1 / -1;
        }

        .info-title {
            font-weight: 600;
            color: var(--info-blue);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .info-text {
            color: var(--text-gray);
            font-size: 0.95rem;
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
            flex: 2;
            justify-content: center;
        }

        .btn-submit:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
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

        .btn-draft {
            background: var(--light-purple);
            color: var(--primary-purple);
            padding: 1rem 2rem;
            border: 2px solid var(--light-purple);
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

        .btn-draft:hover {
            background: var(--primary-purple);
            color: var(--white);
            transform: translateY(-3px);
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

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .pulse {
            animation: pulse 0.5s ease-in-out;
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
            
            .date-inputs {
                flex-direction: column;
                gap: 1rem;
            }
            
            .date-separator {
                display: none;
            }
            
            .file-item {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
            
            .file-info {
                flex-direction: column;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 0.75rem;
            }
        }

        @media (max-width: 480px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .file-actions {
                flex-direction: column;
                width: 100%;
            }
            
            .file-btn {
                width: 100%;
                justify-content: center;
            }
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
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="logo-text">UPPDATE</div>
                <div class="role-badge">
                    <i class="fas fa-comments"></i> Área de Comunicación
                </div>
            </div>
            
            <div class="nav-links">
                <a href="{{ route('comunicacion.inicio') }}" class="nav-link">
                    <i class="fas fa-home"></i>
                    Inicio
                </a>
                <a href="{{ route('comunicacion.index') }}" class="nav-link">
                    <i class="fas fa-list"></i>
                    Mis Convocatorias
                </a>
                <a href="{{ route('comunicacion.edit', $convocatoria->id) }}" class="nav-link active">
                    <i class="fas fa-edit"></i>
                    Editar Convocatoria
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
                <h1 class="page-title">Editar Convocatoria</h1>
                <p class="page-subtitle">Modifica los detalles de tu convocatoria. Actualiza la información y archivos según sea necesario.</p>
            </div>
        </section>

        <!-- Mensajes -->
        @if(session('success'))
            <div class="success-message">
                <i class="fas fa-check-circle"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        @if($errors->any())
            <div class="error-message">
                <i class="fas fa-exclamation-triangle"></i>
                <div>
                    <strong>Por favor corrige los siguientes errores:</strong>
                    <ul style="margin-top: 0.5rem; padding-left: 1.5rem;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <!-- Información importante -->
        <div class="info-box">
            <h3 class="info-title">
                <i class="fas fa-info-circle"></i>
                Información importante
            </h3>
            <p class="info-text">
                Puedes actualizar cualquier campo de la convocatoria. Si no deseas cambiar el PDF o la imagen, déjalos en blanco.
                Los archivos actuales se conservarán si no subes nuevos.
            </p>
        </div>

        <!-- Formulario -->
        <div class="form-container">
            <form method="POST" action="{{ route('comunicacion.update', $convocatoria->id) }}" enctype="multipart/form-data" id="convocatoriaForm">
                @csrf
                @method('PUT')
                
                <div class="form-grid">
                    <!-- Información básica -->
                    <div class="form-group full-width">
                        <label class="form-label">
                            <i class="fas fa-heading"></i>
                            Título de la convocatoria
                            <span class="required">*</span>
                        </label>
                        <input type="text" name="titulo" id="titulo" 
                               value="{{ old('titulo', $convocatoria->titulo) }}" 
                               class="form-input" required maxlength="80"
                               placeholder="Ej: Convocatoria para becas académicas 2024">
                        <div class="char-counter-container">
                            <div class="char-counter" id="titulo-counter">
                                <span id="titulo-current">{{ mb_strlen(old('titulo', $convocatoria->titulo)) }}</span>/80
                            </div>
                            <div class="char-limits">Máx. 80 caracteres</div>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">
                            <i class="fas fa-align-left"></i>
                            Descripción
                            <span class="required">*</span>
                        </label>
                        <textarea name="descripcion" id="descripcion" rows="4" 
                                  class="form-textarea" required
                                  placeholder="Describe los detalles, requisitos y beneficios de la convocatoria">{{ old('descripcion', $convocatoria->descripcion) }}</textarea>
                        <div class="char-counter-container">
                            <div class="char-counter" id="descripcion-counter">
                                <span id="descripcion-current">{{ mb_strlen(old('descripcion', $convocatoria->descripcion)) }}</span>/2000
                            </div>
                            <div class="char-limits">Máx. 2000 caracteres</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-tag"></i>
                            Tipo
                            <span class="required">*</span>
                        </label>
                        <select name="tipo" id="tipo" class="form-select" required>
                            <option value="">Selecciona un tipo</option>
                            <option value="convocatoria" {{ old('tipo', $convocatoria->tipo) == 'convocatoria' ? 'selected' : '' }}>Convocatoria</option>
                            <option value="evento" {{ old('tipo', $convocatoria->tipo) == 'evento' ? 'selected' : '' }}>Evento</option>
                            <option value="anuncio" {{ old('tipo', $convocatoria->tipo) == 'anuncio' ? 'selected' : '' }}>Anuncio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-toggle-on"></i>
                            Estado
                            <span class="required">*</span>
                        </label>
                        <select name="estado" id="estado" class="form-select" required>
                            <option value="borrador" {{ old('estado', $convocatoria->estado) == 'borrador' ? 'selected' : '' }}>Borrador</option>
                            <option value="publicado" {{ old('estado', $convocatoria->estado) == 'publicado' ? 'selected' : '' }}>Publicado</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-calendar-alt"></i>
                            Fecha de inicio
                        </label>
                        <input type="date" name="fecha_inicio" id="fecha_inicio" 
                               value="{{ old('fecha_inicio', $convocatoria->fecha_inicio ? $convocatoria->fecha_inicio->format('Y-m-d') : '') }}" 
                               class="form-input">
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-calendar-alt"></i>
                            Fecha de fin
                        </label>
                        <input type="date" name="fecha_fin" id="fecha_fin" 
                               value="{{ old('fecha_fin', $convocatoria->fecha_fin ? $convocatoria->fecha_fin->format('Y-m-d') : '') }}" 
                               class="form-input">
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">
                            <i class="fas fa-map-marker-alt"></i>
                            Lugar
                        </label>
                        <input type="text" name="lugar" id="lugar" 
                               value="{{ old('lugar', $convocatoria->lugar) }}" 
                               class="form-input" maxlength="80"
                               placeholder="Ej: Auditorio principal, Edificio A, Sala de conferencias">
                        <div class="char-counter-container">
                            <div class="char-counter" id="lugar-counter">
                                <span id="lugar-current">{{ mb_strlen(old('lugar', $convocatoria->lugar)) }}</span>/80
                            </div>
                        </div>
                    </div>

                    <!-- Archivos actuales -->
                    <div class="form-group full-width">
                        <div class="current-files">
                            <h4 class="files-title">
                                <i class="fas fa-paperclip"></i>
                                Archivos actuales
                            </h4>
                            <div class="files-list">
                                @if($convocatoria->pdf)
                                    <div class="file-item">
                                        <div class="file-info">
                                            <div class="file-icon">
                                                <i class="fas fa-file-pdf"></i>
                                            </div>
                                            <div class="file-details">
                                                <div class="file-name">{{ $convocatoria->pdf }}</div>
                                                <div class="file-size">Documento PDF</div>
                                            </div>
                                        </div>
                                        <div class="file-actions">
                                            <a href="{{ route('comunicacion.ver-pdf', $convocatoria->id) }}" 
                                               target="_blank"
                                               class="file-btn view">
                                                <i class="fas fa-eye"></i> Ver
                                            </a>
                                            <a href="{{ route('comunicacion.descargar-pdf', $convocatoria->id) }}" 
                                               class="file-btn download">
                                                <i class="fas fa-download"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                @endif
                                
                                @if($convocatoria->imagen)
                                    <div class="file-item">
                                        <div class="file-info">
                                            <div class="file-icon">
                                                <i class="fas fa-image"></i>
                                            </div>
                                            <div class="file-details">
                                                <div class="file-name">{{ $convocatoria->imagen }}</div>
                                                <div class="file-size">Imagen</div>
                                            </div>
                                        </div>
                                        <div class="file-actions">
                                            <a href="{{ asset('storage/convocatorias/imagenes/' . $convocatoria->imagen) }}" 
                                               target="_blank"
                                               class="file-btn view">
                                                <i class="fas fa-eye"></i> Ver
                                            </a>
                                        </div>
                                    </div>
                                @endif
                                
                                @if(!$convocatoria->pdf && !$convocatoria->imagen)
                                    <p style="color: var(--text-gray); text-align: center; font-style: italic;">
                                        No hay archivos adjuntos actualmente
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Nuevo PDF -->
                    <div class="form-group full-width">
                        <label class="form-label">
                            <i class="fas fa-file-pdf"></i>
                            Nuevo documento PDF
                            <span class="optional">(Opcional - mantener actual si no se cambia)</span>
                        </label>
                        <div class="file-upload-container" id="pdf-upload-container">
                            <input type="file" name="pdf" id="pdf" class="file-input" accept=".pdf">
                            <label for="pdf" class="file-label">
                                <div class="upload-icon">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div>
                                    <strong>Haz clic para subir nuevo PDF</strong>
                                    <div class="file-hint">o arrastra y suelta el archivo aquí</div>
                                </div>
                                <div class="file-hint">Tamaño máximo: 10MB • Formato: PDF</div>
                            </label>
                            <div class="file-preview" id="pdf-preview">
                                <div class="new-file-name">
                                    <i class="fas fa-file-pdf" style="color: #e74c3c;"></i>
                                    <span id="pdf-name"></span>
                                </div>
                                <div class="file-size" id="pdf-size"></div>
                                <div class="file-remove" onclick="removeFile('pdf')">
                                    <i class="fas fa-trash"></i> Eliminar archivo
                                </div>
                            </div>
                        </div>
                        <div style="font-size: 0.85rem; color: var(--warning-yellow); margin-top: 0.5rem;">
                            <i class="fas fa-exclamation-triangle"></i>
                            Si subes un nuevo PDF, reemplazará el archivo actual
                        </div>
                    </div>

                    <!-- Nueva imagen -->
                    <div class="form-group full-width">
                        <label class="form-label">
                            <i class="fas fa-image"></i>
                            Nueva imagen de portada
                            <span class="optional">(Opcional - mantener actual si no se cambia)</span>
                        </label>
                        <div class="file-upload-container" id="imagen-upload-container">
                            <input type="file" name="imagen" id="imagen" class="file-input" accept="image/*">
                            <label for="imagen" class="file-label">
                                <div class="upload-icon">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div>
                                    <strong>Haz clic para subir nueva imagen</strong>
                                    <div class="file-hint">o arrastra y suelta el archivo aquí</div>
                                </div>
                                <div class="file-hint">Tamaño máximo: 2MB • Formatos: JPG, PNG, GIF, WEBP</div>
                            </label>
                            <div class="file-preview" id="imagen-preview">
                                <div class="new-file-name">
                                    <i class="fas fa-image" style="color: #3498db;"></i>
                                    <span id="imagen-name"></span>
                                </div>
                                <div class="file-size" id="imagen-size"></div>
                                <div class="file-remove" onclick="removeFile('imagen')">
                                    <i class="fas fa-trash"></i> Eliminar archivo
                                </div>
                            </div>
                        </div>
                        <div style="font-size: 0.85rem; color: var(--warning-yellow); margin-top: 0.5rem;">
                            <i class="fas fa-exclamation-triangle"></i>
                            Si subes una nueva imagen, reemplazará la imagen actual
                        </div>
                    </div>

                    <!-- Acciones del formulario -->
                    <div class="form-actions">
                        <button type="submit" class="btn-submit" id="submitBtn">
                            <i class="fas fa-save"></i>
                            <span id="submitText">Guardar Cambios</span>
                        </button>
                        <a href="{{ route('comunicacion.index') }}" class="btn-secondary">
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
                <a href="{{ route('comunicacion.inicio') }}" class="footer-link">Inicio</a>
                <a href="{{ route('comunicacion.index') }}" class="footer-link">Convocatorias</a>
                <a href="{{ route('comunicacion.create') }}" class="footer-link">Nueva Convocatoria</a>
                <a href="#" class="footer-link">Ayuda</a>
            </div>
            <p class="copyright">© {{ date('Y') }} UPPDATE - Sistema de Gestión de Comunicación</p>
        </div>
    </footer>

    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos del formulario
            const form = document.getElementById('convocatoriaForm');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const loadingOverlay = document.getElementById('loadingOverlay');
            
            // Elementos de archivos
            const pdfInput = document.getElementById('pdf');
            const imagenInput = document.getElementById('imagen');
            const pdfContainer = document.getElementById('pdf-upload-container');
            const imagenContainer = document.getElementById('imagen-upload-container');
            
            // Inicializar contadores de caracteres
            const textFields = ['titulo', 'descripcion', 'lugar'];
            
            textFields.forEach(fieldId => {
                const field = document.getElementById(fieldId);
                const counter = document.getElementById(fieldId + '-counter');
                const currentSpan = document.getElementById(fieldId + '-current');
                const maxLength = field.getAttribute('maxlength') || 2000;
                
                if (field && counter && currentSpan) {
                    // Actualizar inicialmente
                    updateCharCounter(field, counter, currentSpan, maxLength);
                    
                    // Escuchar cambios
                    field.addEventListener('input', () => {
                        updateCharCounter(field, counter, currentSpan, maxLength);
                    });
                }
            });
            
            // Función para actualizar contador de caracteres
            function updateCharCounter(field, counter, currentSpan, maxLength) {
                const length = field.value.length;
                currentSpan.textContent = length;
                
                // Actualizar estilo
                counter.classList.remove('success', 'warning', 'danger');
                
                if (length === 0) {
                    // Vacío
                } else if (length > maxLength * 0.9) {
                    counter.classList.add('danger');
                } else if (length > maxLength * 0.75) {
                    counter.classList.add('warning');
                } else {
                    counter.classList.add('success');
                }
            }
            
            // Validación de fechas
            const fechaInicio = document.getElementById('fecha_inicio');
            const fechaFin = document.getElementById('fecha_fin');
            
            fechaInicio.addEventListener('change', function() {
                if (fechaFin.value && this.value > fechaFin.value) {
                    fechaFin.value = this.value;
                    showNotification('La fecha fin se ajustó automáticamente', 'warning');
                }
            });
            
            fechaFin.addEventListener('change', function() {
                if (fechaInicio.value && this.value < fechaInicio.value) {
                    alert('La fecha fin no puede ser anterior a la fecha inicio');
                    this.value = fechaInicio.value;
                }
            });
            
            // Manejo de arrastrar y soltar archivos
            function setupDragAndDrop(container, input) {
                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                    container.addEventListener(eventName, preventDefaults, false);
                });
                
                function preventDefaults(e) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                
                ['dragenter', 'dragover'].forEach(eventName => {
                    container.addEventListener(eventName, highlight, false);
                });
                
                ['dragleave', 'drop'].forEach(eventName => {
                    container.addEventListener(eventName, unhighlight, false);
                });
                
                function highlight() {
                    container.classList.add('drag-over');
                }
                
                function unhighlight() {
                    container.classList.remove('drag-over');
                }
                
                container.addEventListener('drop', handleDrop, false);
                
                function handleDrop(e) {
                    const dt = e.dataTransfer;
                    const files = dt.files;
                    
                    if (files.length > 0) {
                        input.files = files;
                        updateFilePreview(input);
                    }
                }
            }
            
            // Configurar drag and drop para PDF e imagen
            setupDragAndDrop(pdfContainer, pdfInput);
            setupDragAndDrop(imagenContainer, imagenInput);
            
            // Actualizar vista previa de archivos
            pdfInput.addEventListener('change', function() {
                updateFilePreview(this);
            });
            
            imagenInput.addEventListener('change', function() {
                updateFilePreview(this);
            });
            
            // Función para actualizar vista previa de archivos
            function updateFilePreview(input) {
                const file = input.files[0];
                const previewId = input.id + '-preview';
                const preview = document.getElementById(previewId);
                const nameId = input.id + '-name';
                const sizeId = input.id + '-size';
                
                if (file) {
                    // Validar tamaño máximo
                    const maxSize = input.id === 'pdf' ? 10 * 1024 * 1024 : 2 * 1024 * 1024; // 10MB o 2MB
                    
                    if (file.size > maxSize) {
                        alert(`El archivo es demasiado grande. Tamaño máximo: ${input.id === 'pdf' ? '10MB' : '2MB'}`);
                        input.value = '';
                        preview.style.display = 'none';
                        return;
                    }
                    
                    // Mostrar vista previa
                    document.getElementById(nameId).textContent = file.name;
                    document.getElementById(sizeId).textContent = formatFileSize(file.size);
                    preview.style.display = 'block';
                } else {
                    preview.style.display = 'none';
                }
            }
            
            // Función para formatear tamaño de archivo
            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }
            
            // Función para eliminar archivo
            window.removeFile = function(type) {
                const input = document.getElementById(type);
                const preview = document.getElementById(type + '-preview');
                
                input.value = '';
                preview.style.display = 'none';
                showNotification('Archivo eliminado', 'info');
            };
            
            // Mostrar notificación
            function showNotification(message, type = 'info') {
                // Eliminar notificaciones anteriores
                document.querySelectorAll('.floating-notification').forEach(n => n.remove());
                
                const notification = document.createElement('div');
                notification.className = 'floating-notification';
                notification.style.cssText = `
                    position: fixed;
                    top: 100px;
                    right: 20px;
                    z-index: 1000;
                    padding: 1rem 1.5rem;
                    border-radius: var(--radius-md);
                    background: ${type === 'success' ? 'var(--success-green)' : 
                                type === 'error' ? 'var(--danger-red)' : 
                                type === 'warning' ? 'var(--warning-yellow)' : 'var(--info-blue)'};
                    color: white;
                    font-weight: 500;
                    box-shadow: var(--shadow-md);
                    animation: slideIn 0.3s ease-out;
                `;
                
                let icon = 'fa-info-circle';
                if (type === 'warning') icon = 'fa-exclamation-triangle';
                if (type === 'error') icon = 'fa-exclamation-circle';
                if (type === 'success') icon = 'fa-check-circle';
                
                notification.innerHTML = `
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <i class="fas ${icon}"></i>
                        <span>${message}</span>
                    </div>
                `;
                
                document.body.appendChild(notification);
                
                // Auto-eliminar después de 3 segundos
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.style.animation = 'slideIn 0.3s ease-out reverse';
                        setTimeout(() => notification.remove(), 300);
                    }
                }, 3000);
            }
            
          
                // Validar archivos
                if (pdfInput.files.length > 0) {
                    const file = pdfInput.files[0];
                    if (!file.type.includes('pdf')) {
                        e.preventDefault();
                        alert('El archivo PDF debe ser un documento PDF válido');
                        return;
                    }
                    
                    if (file.size > 10 * 1024 * 1024) {
                        e.preventDefault();
                        alert('El PDF no debe exceder los 10MB');
                        return;
                    }
                }
                
                if (imagenInput.files.length > 0) {
                    const file = imagenInput.files[0];
                    const validTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                    
                    if (!validTypes.includes(file.type)) {
                        e.preventDefault();
                        alert('La imagen debe ser JPG, PNG, GIF o WEBP');
                        return;
                    }
                    
                    if (file.size > 2 * 1024 * 1024) {
                        e.preventDefault();
                        alert('La imagen no debe exceder los 2MB');
                        return;
                    }
                }
                
                // Mostrar overlay de carga
                loadingOverlay.style.display = 'flex';
                submitBtn.disabled = true;
                submitText.textContent = 'Guardando...';
                
                // El envío real se realiza aquí
            });
            
            // Efectos visuales para botones
            const buttons = [submitBtn, ...document.querySelectorAll('.btn-secondary')];
            buttons.forEach(button => {
                if (button) {
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
                }
            });
            
            // Prevenir navegación si hay cambios sin guardar
            let formChanged = false;
            const initialValues = {
                titulo: document.getElementById('titulo').value,
                descripcion: document.getElementById('descripcion').value,
                tipo: document.getElementById('tipo').value,
                estado: document.getElementById('estado').value,
                fecha_inicio: document.getElementById('fecha_inicio').value,
                fecha_fin: document.getElementById('fecha_fin').value,
                lugar: document.getElementById('lugar').value
            };
            
            // Detectar cambios en campos del formulario
            form.querySelectorAll('input, textarea, select').forEach(field => {
                field.addEventListener('input', () => {
                    formChanged = true;
                });
                
                field.addEventListener('change', () => {
                    formChanged = true;
                });
            });
            
            window.addEventListener('beforeunload', (e) => {
                if (formChanged) {
                    e.preventDefault();
                    e.returnValue = 'Tienes cambios sin guardar. ¿Estás seguro de que quieres salir?';
                }
            });
            
            // Confirmación al salir si hay archivos seleccionados
            form.addEventListener('submit', () => {
                formChanged = false;
            });
            
            // Función para ver archivos
            window.openFile = function(url) {
                window.open(url, '_blank');
            };
        });
    </script>
</body>
</html>