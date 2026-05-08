<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Convocatoria - Área de Comunicación</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        /* Hero section */
        .page-hero {
            background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
            color: var(--white);
            border-radius: var(--radius-2xl);
            padding: 3rem 2.5rem;
            margin-bottom: 2rem;
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
            background: linear-gradient(to right, var(--info-blue), var(--primary-purple));
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
            min-height: 150px;
        }

        .form-select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1.5em;
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

        .file-icon {
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
        }

        .file-name {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            color: var(--text-dark);
        }

        .file-size {
            font-size: 0.875rem;
            color: var(--text-gray);
            margin-top: 0.25rem;
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

        /* Vista previa de imagen */
        .image-preview-container {
            margin-top: 1rem;
            text-align: center;
        }

        .image-preview {
            max-width: 200px;
            max-height: 150px;
            border-radius: var(--radius-md);
            border: 2px solid #e5e7eb;
            object-fit: cover;
            display: none;
            margin: 0 auto;
        }

        .pdf-preview {
            display: none;
            margin-top: 1rem;
            padding: 1rem;
            background: var(--lighter-purple);
            border-radius: var(--radius-md);
            text-align: center;
        }

        .pdf-icon {
            font-size: 3rem;
            color: #e74c3c;
            margin-bottom: 0.5rem;
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

        /* Estado visual */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: var(--radius-lg);
            font-weight: 600;
            font-size: 0.875rem;
        }

        .status-borrador {
            background: var(--light-purple);
            color: var(--primary-purple);
        }

        .status-publicado {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-green);
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

        /* Mensajes de validación */
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

        /* Vista previa de la convocatoria */
        .preview-container {
            background: var(--lighter-purple);
            border-radius: var(--radius-lg);
            padding: 2rem;
            margin-top: 2rem;
            border: 2px solid var(--light-purple);
        }

        .preview-title {
            color: var(--primary-purple);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .preview-content {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        @media (min-width: 768px) {
            .preview-content {
                grid-template-columns: 2fr 1fr;
            }
        }

        .preview-info {
            background: var(--white);
            padding: 1.5rem;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-sm);
        }

        .preview-files {
            background: var(--white);
            padding: 1.5rem;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-sm);
        }

        .preview-item {
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .preview-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .preview-label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.25rem;
            font-size: 0.9rem;
        }

        .preview-value {
            color: var(--text-gray);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .preview-value.empty {
            color: #9ca3af;
            font-style: italic;
        }

        .preview-image {
            max-width: 100%;
            max-height: 150px;
            border-radius: var(--radius-sm);
            object-fit: cover;
            margin-top: 0.5rem;
            border: 2px solid #e5e7eb;
        }

        .preview-pdf {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #e74c3c;
            font-weight: 500;
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
            
            .footer-links {
                flex-direction: column;
                gap: 0.75rem;
            }
            
            .preview-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .form-grid {
                grid-template-columns: 1fr;
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
                <a href="{{ route('comunicacion.create') }}" class="nav-link active">
                    <i class="fas fa-plus-circle"></i>
                    Crear Convocatoria
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
                <h1 class="page-title">Crear Nueva Convocatoria</h1>
                <p class="page-subtitle">Crea y gestiona convocatorias, eventos y anuncios para toda la comunidad universitaria.</p>
            </div>
        </section>

        <!-- Mensajes de éxito/error -->
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
                • Todos los campos marcados con asterisco (*) son obligatorios.<br>
                • No se permiten emojis ni caracteres especiales en los campos de texto.<br>
                • El PDF es requerido (máx. 10MB) y la imagen es opcional (máx. 2MB).<br>
                • Puedes guardar como borrador para editar más tarde o publicar directamente.
            </p>
        </div>

        <!-- Formulario -->
        <div class="form-container">
            <form method="POST" action="{{ route('comunicacion.store') }}" enctype="multipart/form-data" id="convocatoriaForm">
                @csrf
                
                <div class="form-grid">
                    <!-- Información básica -->
                    <div class="form-group full-width">
                        <label class="form-label">
                            <i class="fas fa-heading"></i>
                            Título de la convocatoria
                            <span class="required">*</span>
                            <span class="optional">(Sin emojis ni caracteres especiales)</span>
                        </label>
                        <input type="text" name="titulo" id="titulo" 
                               value="{{ old('titulo') }}" 
                               class="form-input" required maxlength="80"
                               placeholder="Ej: Convocatoria para becas académicas 2024"
                               pattern="[A-Za-z0-9áéíóúÁÉÍÓÚñÑüÜ\s.,;:()\-]+"
                               title="Solo letras, números, espacios y signos de puntuación básicos">
                        <div class="char-counter-container">
                            <div class="char-counter" id="titulo-counter">
                                <span id="titulo-current">{{ mb_strlen(old('titulo', '')) }}</span>/80
                            </div>
                            <div class="char-limits">Máx. 80 caracteres • Sin emojis</div>
                        </div>
                        <div class="validation-message validation-info">
                            <i class="fas fa-info-circle"></i>
                            <span>Permitido: letras, números, espacios y signos básicos de puntuación</span>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">
                            <i class="fas fa-align-left"></i>
                            Descripción
                            <span class="required">*</span>
                            <span class="optional">(Sin emojis)</span>
                        </label>
                        <textarea name="descripcion" id="descripcion" rows="5" 
                                  class="form-textarea" required maxlength="250"
                                  placeholder="Describe los detalles, requisitos y beneficios de la convocatoria"
                                  oninput="sanitizeTextarea(this)">{{ old('descripcion') }}</textarea>
                        <div class="char-counter-container">
                            <div class="char-counter" id="descripcion-counter">
                                <span id="descripcion-current">{{ mb_strlen(old('descripcion', '')) }}</span>/250
                            </div>
                            <div class="char-limits">Máx. 250 caracteres • Sin emojis</div>
                        </div>
                        <div class="validation-message validation-info">
                            <i class="fas fa-info-circle"></i>
                            <span>Los emojis serán eliminados automáticamente</span>
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
                            <option value="convocatoria" {{ old('tipo') == 'convocatoria' ? 'selected' : '' }}>Convocatoria</option>
                            <option value="evento" {{ old('tipo') == 'evento' ? 'selected' : '' }}>Evento</option>
                            <option value="anuncio" {{ old('tipo') == 'anuncio' ? 'selected' : '' }}>Anuncio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-calendar-alt"></i>
                            Fechas
                        </label>
                        <div class="date-inputs">
                            <input type="date" name="fecha_inicio" id="fecha_inicio" 
                                   value="{{ old('fecha_inicio') }}" 
                                   class="form-input" style="flex: 1;">
                            <span class="date-separator">a</span>
                            <input type="date" name="fecha_fin" id="fecha_fin" 
                                   value="{{ old('fecha_fin') }}" 
                                   class="form-input" style="flex: 1;">
                        </div>
                        <div class="validation-message validation-info" style="margin-top: 0.5rem;">
                            <i class="fas fa-info-circle"></i>
                            <span>La fecha fin debe ser igual o posterior a la fecha inicio</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-map-marker-alt"></i>
                            Lugar
                            <span class="optional">(Sin emojis)</span>
                        </label>
                        <input type="text" name="lugar" id="lugar" 
                               value="{{ old('lugar') }}" 
                               class="form-input" maxlength="100"
                               placeholder="Ej: Auditorio principal, Edificio A"
                               pattern="[A-Za-z0-9áéíóúÁÉÍÓÚñÑüÜ\s.,;:()\-]+">
                        <div class="char-counter-container">
                            <div class="char-counter" id="lugar-counter">
                                <span id="lugar-current">{{ mb_strlen(old('lugar', '')) }}</span>/100
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-toggle-on"></i>
                            Estado
                            <span class="required">*</span>
                        </label>
                        <select name="estado" id="estado" class="form-select" required>
                            <option value="borrador" {{ old('estado') == 'borrador' ? 'selected' : '' }}>Borrador</option>
                            <option value="publicado" {{ old('estado') == 'publicado' ? 'selected' : '' }}>Publicado</option>
                        </select>
                        <div class="validation-message validation-info" style="margin-top: 0.5rem;">
                            <i class="fas fa-info-circle"></i>
                            <span>Los borradores solo son visibles para ti</span>
                        </div>
                    </div>

                    <!-- Archivo PDF -->
                    <div class="form-group full-width">
                        <label class="form-label">
                            <i class="fas fa-file-pdf"></i>
                            Documento PDF
                            <span class="required">*</span>
                        </label>
                        <div class="file-upload-container" id="pdf-upload-container">
                            <input type="file" name="pdf" id="pdf" class="file-input" accept=".pdf" required>
                            <label for="pdf" class="file-label">
                                <div class="file-icon">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div>
                                    <strong>Haz clic para subir PDF</strong>
                                    <div class="file-hint">o arrastra y suelta el archivo aquí</div>
                                </div>
                                <div class="file-hint">Tamaño máximo: 10MB • Formato: PDF</div>
                            </label>
                            <div class="file-preview" id="pdf-preview" style="display: none;">
                                <div class="file-name">
                                    <i class="fas fa-file-pdf" style="color: #e74c3c;"></i>
                                    <span id="pdf-name"></span>
                                </div>
                                <div class="file-size" id="pdf-size"></div>
                                <div class="pdf-preview" id="pdf-thumbnail">
                                    <div class="pdf-icon">
                                        <i class="fas fa-file-pdf"></i>
                                    </div>
                                    <div>Vista previa del PDF disponible</div>
                                </div>
                                <div class="file-remove" onclick="removeFile('pdf')">
                                    <i class="fas fa-trash"></i> Eliminar archivo
                                </div>
                            </div>
                        </div>
                        <div class="validation-message validation-info" style="margin-top: 0.5rem;">
                            <i class="fas fa-info-circle"></i>
                            <span>Documento oficial en formato PDF. Requerido para todas las convocatorias.</span>
                        </div>
                    </div>

                    <!-- Imagen -->
                    <div class="form-group full-width">
                        <label class="form-label">
                            <i class="fas fa-image"></i>
                            Imagen de portada
                            <span class="optional">(Opcional)</span>
                        </label>
                        <div class="file-upload-container" id="imagen-upload-container">
                            <input type="file" name="imagen" id="imagen" class="file-input" accept="image/*">
                            <label for="imagen" class="file-label">
                                <div class="file-icon">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div>
                                    <strong>Haz clic para subir imagen</strong>
                                    <div class="file-hint">o arrastra y suelta el archivo aquí</div>
                                </div>
                                <div class="file-hint">Tamaño máximo: 2MB • Formatos: JPG, PNG, GIF, WEBP</div>
                            </label>
                            <div class="file-preview" id="imagen-preview" style="display: none;">
                                <div class="file-name">
                                    <i class="fas fa-image" style="color: #3498db;"></i>
                                    <span id="imagen-name"></span>
                                </div>
                                <div class="file-size" id="imagen-size"></div>
                                <div class="image-preview-container">
                                    <img id="imagen-thumbnail" class="image-preview" alt="Vista previa de la imagen">
                                </div>
                                <div class="file-remove" onclick="removeFile('imagen')">
                                    <i class="fas fa-trash"></i> Eliminar archivo
                                </div>
                            </div>
                        </div>
                        <div class="validation-message validation-info" style="margin-top: 0.5rem;">
                            <i class="fas fa-info-circle"></i>
                            <span>Imagen promocional o descriptiva. Mejora la presentación de tu convocatoria.</span>
                        </div>
                    </div>

                    <!-- Vista previa de la convocatoria -->
                    <div class="form-group full-width">
                        <div class="preview-container">
                            <h3 class="preview-title">
                                <i class="fas fa-eye"></i>
                                Vista Previa de la Convocatoria
                            </h3>
                            <div class="preview-content">
                                <div class="preview-info">
                                    <h4 style="margin-bottom: 1rem; color: var(--text-dark);">Información</h4>
                                    <div class="preview-item">
                                        <div class="preview-label">Título:</div>
                                        <div class="preview-value" id="preview-titulo">Sin título</div>
                                    </div>
                                    <div class="preview-item">
                                        <div class="preview-label">Tipo:</div>
                                        <div class="preview-value" id="preview-tipo">No seleccionado</div>
                                    </div>
                                    <div class="preview-item">
                                        <div class="preview-label">Estado:</div>
                                        <div class="preview-value" id="preview-estado">Borrador</div>
                                    </div>
                                    <div class="preview-item">
                                        <div class="preview-label">Lugar:</div>
                                        <div class="preview-value" id="preview-lugar">No especificado</div>
                                    </div>
                                    <div class="preview-item">
                                        <div class="preview-label">Fechas:</div>
                                        <div class="preview-value" id="preview-fechas">Sin fechas definidas</div>
                                    </div>
                                </div>
                                
                                <div class="preview-files">
                                    <h4 style="margin-bottom: 1rem; color: var(--text-dark);">Archivos</h4>
                                    <div class="preview-item">
                                        <div class="preview-label">PDF:</div>
                                        <div class="preview-value" id="preview-pdf">
                                            <div class="preview-pdf">
                                                <i class="fas fa-file-pdf"></i>
                                                <span>Sin PDF</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item">
                                        <div class="preview-label">Imagen:</div>
                                        <div class="preview-value" id="preview-imagen">
                                            Sin imagen
                                        </div>
                                        <img id="preview-imagen-thumb" class="preview-image" style="display: none;" alt="Vista previa">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Acciones del formulario -->
                    <div class="form-actions">
                        <button type="submit" class="btn-submit" id="submitBtn">
                            <i class="fas fa-paper-plane"></i>
                            <span id="submitText">Publicar Convocatoria</span>
                        </button>
                        <button type="button" class="btn-draft" id="saveDraftBtn">
                            <i class="fas fa-save"></i>
                            Guardar como Borrador
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
                <a href="#" class="footer-link">Eventos</a>
                <a href="#" class="footer-link">Anuncios</a>
                <a href="#" class="footer-link">Contacto</a>
            </div>
            <p class="copyright">© {{ date('Y') }} UPPDATE - Sistema de Gestión de Comunicación. Todos los derechos reservados.</p>
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
            const saveDraftBtn = document.getElementById('saveDraftBtn');
            const estadoSelect = document.getElementById('estado');
            const loadingOverlay = document.getElementById('loadingOverlay');
            
            // Elementos de archivos
            const pdfInput = document.getElementById('pdf');
            const imagenInput = document.getElementById('imagen');
            const pdfContainer = document.getElementById('pdf-upload-container');
            const imagenContainer = document.getElementById('imagen-upload-container');
            
            // Elementos de vista previa
            const previewTitulo = document.getElementById('preview-titulo');
            const previewTipo = document.getElementById('preview-tipo');
            const previewEstado = document.getElementById('preview-estado');
            const previewLugar = document.getElementById('preview-lugar');
            const previewFechas = document.getElementById('preview-fechas');
            const previewPdf = document.getElementById('preview-pdf');
            const previewImagen = document.getElementById('preview-imagen');
            const previewImagenThumb = document.getElementById('preview-imagen-thumb');
            
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
                        updatePreview();
                    });
                    
                    // Validar caracteres especiales en tiempo real
                    if (fieldId === 'titulo' || fieldId === 'lugar') {
                        field.addEventListener('input', function() {
                            const original = this.value;
                            const cleaned = original.replace(/[^\w\sáéíóúÁÉÍÓÚñÑüÜ.,;:()\-]/gi, '');
                            if (original !== cleaned) {
                                this.value = cleaned;
                                // Mostrar mensaje de advertencia
                                showValidationMessage(this, 'Se han eliminado caracteres especiales no permitidos');
                            }
                        });
                    }
                }
            });
            
            // Función para mostrar mensaje de validación
            function showValidationMessage(element, message) {
                // Remover mensaje anterior si existe
                const existingMessage = element.parentNode.querySelector('.validation-warning');
                if (existingMessage) {
                    existingMessage.remove();
                }
                
                // Crear nuevo mensaje
                const warning = document.createElement('div');
                warning.className = 'validation-message validation-error';
                warning.innerHTML = `<i class="fas fa-exclamation-triangle"></i><span>${message}</span>`;
                
                // Insertar después del elemento
                element.parentNode.insertBefore(warning, element.nextSibling);
                
                // Eliminar después de 3 segundos
                setTimeout(() => {
                    if (warning.parentNode) {
                        warning.remove();
                    }
                }, 3000);
            }
            
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
            
            // Función para eliminar emojis del textarea
            function sanitizeTextarea(textarea) {
                const original = textarea.value;
                // Eliminar emojis y caracteres especiales
                const cleaned = original.replace(/[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}]/gu, '');
                
                if (original !== cleaned) {
                    textarea.value = cleaned;
                    showValidationMessage(textarea, 'Se han eliminado emojis y caracteres especiales');
                }
                
                // Actualizar contador
                const counter = document.getElementById('descripcion-counter');
                const currentSpan = document.getElementById('descripcion-current');
                if (counter && currentSpan) {
                    updateCharCounter(textarea, counter, currentSpan, 2000);
                }
                
                updatePreview();
            }
            
            // Actualizar vista previa
            function updatePreview() {
                // Título
                const titulo = document.getElementById('titulo').value || 'Sin título';
                previewTitulo.textContent = titulo || 'Sin título';
                previewTitulo.className = titulo ? 'preview-value' : 'preview-value empty';
                
                // Tipo
                const tipoSelect = document.getElementById('tipo');
                const tipo = tipoSelect.options[tipoSelect.selectedIndex];
                previewTipo.textContent = tipo.text || 'No seleccionado';
                previewTipo.className = tipo.value ? 'preview-value' : 'preview-value empty';
                
                // Estado
                const estadoSelect = document.getElementById('estado');
                const estado = estadoSelect.options[estadoSelect.selectedIndex];
                previewEstado.textContent = estado.text || 'Borrador';
                previewEstado.className = 'preview-value';
                
                // Lugar
                const lugar = document.getElementById('lugar').value;
                previewLugar.textContent = lugar || 'No especificado';
                previewLugar.className = lugar ? 'preview-value' : 'preview-value empty';
                
                // Fechas
                const fechaInicio = document.getElementById('fecha_inicio').value;
                const fechaFin = document.getElementById('fecha_fin').value;
                let fechasText = 'Sin fechas definidas';
                
                if (fechaInicio && fechaFin) {
                    const inicio = new Date(fechaInicio).toLocaleDateString('es-ES');
                    const fin = new Date(fechaFin).toLocaleDateString('es-ES');
                    fechasText = `${inicio} - ${fin}`;
                } else if (fechaInicio) {
                    fechasText = `Desde ${new Date(fechaInicio).toLocaleDateString('es-ES')}`;
                } else if (fechaFin) {
                    fechasText = `Hasta ${new Date(fechaFin).toLocaleDateString('es-ES')}`;
                }
                
                previewFechas.textContent = fechasText;
                previewFechas.className = (fechaInicio || fechaFin) ? 'preview-value' : 'preview-value empty';
            }
            
            // Actualizar vista previa de archivos
            function updateFilePreview(input) {
                const file = input.files[0];
                const previewId = input.id + '-preview';
                const preview = document.getElementById(previewId);
                const nameId = input.id + '-name';
                const sizeId = input.id + '-size';
                
                if (file) {
                    // Validar tamaño máximo
                    const maxSize = input.id === 'pdf' ? 10 * 1024 * 1024 : 2 * 1024 * 1024;
                    
                    if (file.size > maxSize) {
                        alert(`El archivo es demasiado grande. Tamaño máximo: ${input.id === 'pdf' ? '10MB' : '2MB'}`);
                        input.value = '';
                        preview.style.display = 'none';
                        updateFilePreviews();
                        return;
                    }
                    
                    // Mostrar vista previa
                    document.getElementById(nameId).textContent = file.name;
                    document.getElementById(sizeId).textContent = formatFileSize(file.size);
                    preview.style.display = 'block';
                    
                    // Si es imagen, mostrar miniatura
                    if (input.id === 'imagen' && file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const thumbnail = document.getElementById('imagen-thumbnail');
                            thumbnail.src = e.target.result;
                            thumbnail.style.display = 'block';
                            
                            // Actualizar vista previa
                            previewImagenThumb.src = e.target.result;
                            previewImagenThumb.style.display = 'block';
                            previewImagen.textContent = file.name;
                            previewImagen.style.display = 'none';
                        };
                        reader.readAsDataURL(file);
                    } else if (input.id === 'pdf') {
                        // Para PDF, mostrar icono
                        const pdfThumbnail = document.getElementById('pdf-thumbnail');
                        pdfThumbnail.style.display = 'block';
                        
                        // Actualizar vista previa
                        previewPdf.innerHTML = `
                            <div class="preview-pdf">
                                <i class="fas fa-file-pdf"></i>
                                <span>${file.name}</span>
                            </div>
                        `;
                    }
                } else {
                    preview.style.display = 'none';
                    updateFilePreviews();
                }
            }
            
            // Actualizar vista previa de archivos en el panel
            function updateFilePreviews() {
                // PDF
                if (pdfInput.files.length > 0) {
                    previewPdf.innerHTML = `
                        <div class="preview-pdf">
                            <i class="fas fa-file-pdf"></i>
                            <span>${pdfInput.files[0].name}</span>
                        </div>
                    `;
                } else {
                    previewPdf.innerHTML = `
                        <div class="preview-pdf">
                            <i class="fas fa-file-pdf"></i>
                            <span>Sin PDF</span>
                        </div>
                    `;
                }
                
                // Imagen
                if (imagenInput.files.length > 0) {
                    previewImagen.textContent = imagenInput.files[0].name;
                    previewImagen.style.display = 'none';
                    previewImagenThumb.style.display = 'block';
                } else {
                    previewImagen.textContent = 'Sin imagen';
                    previewImagen.style.display = 'block';
                    previewImagenThumb.style.display = 'none';
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
                
                if (type === 'imagen') {
                    const thumbnail = document.getElementById('imagen-thumbnail');
                    thumbnail.style.display = 'none';
                    thumbnail.src = '';
                    
                    previewImagen.textContent = 'Sin imagen';
                    previewImagen.style.display = 'block';
                    previewImagenThumb.style.display = 'none';
                } else if (type === 'pdf') {
                    const pdfThumbnail = document.getElementById('pdf-thumbnail');
                    pdfThumbnail.style.display = 'none';
                    
                    previewPdf.innerHTML = `
                        <div class="preview-pdf">
                            <i class="fas fa-file-pdf"></i>
                            <span>Sin PDF</span>
                        </div>
                    `;
                }
            };
            
            // Manejar el cambio de estado
            estadoSelect.addEventListener('change', function() {
                updatePreview();
            });
            
            // Botón para guardar como borrador
            saveDraftBtn.addEventListener('click', function() {
                estadoSelect.value = 'borrador';
                updatePreview();
                form.submit();
            });
            
            // Validación de fechas
            const fechaInicio = document.getElementById('fecha_inicio');
            const fechaFin = document.getElementById('fecha_fin');
            
            fechaInicio.addEventListener('change', function() {
                if (fechaFin.value && this.value > fechaFin.value) {
                    fechaFin.value = this.value;
                }
                updatePreview();
            });
            
            fechaFin.addEventListener('change', function() {
                if (fechaInicio.value && this.value < fechaInicio.value) {
                    alert('La fecha fin no puede ser anterior a la fecha inicio');
                    this.value = fechaInicio.value;
                }
                updatePreview();
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
            
            // Validación del formulario antes de enviar
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validar campos de texto sin emojis
                const titulo = document.getElementById('titulo').value;
                const descripcion = document.getElementById('descripcion').value;
                const lugar = document.getElementById('lugar').value;
                
                // Expresión regular para detectar emojis
                const emojiRegex = /[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}]/gu;
                
                if (emojiRegex.test(titulo)) {
                    alert('El título no puede contener emojis. Por favor, elimínalos.');
                    document.getElementById('titulo').focus();
                    return;
                }
                
                if (emojiRegex.test(descripcion)) {
                    alert('La descripción no puede contener emojis. Por favor, elimínalos.');
                    document.getElementById('descripcion').focus();
                    return;
                }
                
                if (lugar && emojiRegex.test(lugar)) {
                    alert('El lugar no puede contener emojis. Por favor, elimínalos.');
                    document.getElementById('lugar').focus();
                    return;
                }
                
                // Validar archivo PDF
                if (!pdfInput.files.length) {
                    alert('Debes subir un archivo PDF');
                    pdfContainer.scrollIntoView({ behavior: 'smooth' });
                    return;
                }
                
               
                }
                
                // Mostrar overlay de carga
                loadingOverlay.style.display = 'flex';
                
                // Enviar formulario
                this.submit();
            });
            
            // Efectos visuales para botones
            const buttons = [submitBtn, saveDraftBtn, ...document.querySelectorAll('.btn-secondary')];
            buttons.forEach(button => {
                if (button) {
                    button.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-3px)';
                    });
                    
                    button.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0)';
                    });
                    
                    button.addEventListener('mousedown', function() {
                        this.style.transform = 'translateY(1px)';
                    });
                    
                    button.addEventListener('mouseup', function() {
                        this.style.transform = 'translateY(-3px)';
                    });
                }
            });
            
            // Establecer fecha mínima para los campos de fecha (hoy)
            
            
            // Escuchar cambios en todos los campos para actualizar vista previa
            document.querySelectorAll('#titulo, #tipo, #estado, #lugar, #fecha_inicio, #fecha_fin').forEach(field => {
                field.addEventListener('change', updatePreview);
                field.addEventListener('input', updatePreview);
            });
            
            // Inicializar vista previa
            updatePreview();
            updateFilePreviews();
            
            // Mostrar vista previa inicial si hay valores antiguos
            @if(old('titulo'))
                updatePreview();
            @endif
        });
    </script>
</body>
</html>