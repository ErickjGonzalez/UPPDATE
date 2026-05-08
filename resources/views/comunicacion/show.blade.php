<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $convocatoria->titulo }} - Área de Comunicación</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        .hero-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        /* Badges */
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

        .tipo-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: var(--radius-lg);
            font-weight: 600;
            font-size: 0.875rem;
        }

        .tipo-convocatoria {
            background: linear-gradient(to right, #8b5cf6, #a78bfa);
            color: white;
        }

        .tipo-evento {
            background: linear-gradient(to right, #3b82f6, #60a5fa);
            color: white;
        }

        .tipo-anuncio {
            background: linear-gradient(to right, #f59e0b, #fbbf24);
            color: white;
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

        /* Contenido principal */
        .content-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 1024px) {
            .content-container {
                grid-template-columns: 2fr 1fr;
            }
        }

        /* Panel de información */
        .info-panel {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: 3rem;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
        }

        .info-panel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(to right, var(--info-blue), var(--primary-purple));
        }

        /* Información detallada */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        @media (min-width: 768px) {
            .info-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .info-item {
            margin-bottom: 0;
        }

        .info-label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .info-value {
            color: var(--text-gray);
            font-size: 1.1rem;
            line-height: 1.5;
        }

        .info-value.empty {
            color: #9ca3af;
            font-style: italic;
        }

        /* Descripción */
        .description-container {
            margin-top: 2rem;
            grid-column: 1 / -1;
        }

        .description-content {
            background: var(--lighter-purple);
            padding: 2rem;
            border-radius: var(--radius-lg);
            margin-top: 1rem;
            line-height: 1.7;
            white-space: pre-line;
        }

        /* Panel lateral */
        .sidebar-panel {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: 2.5rem;
            box-shadow: var(--shadow-lg);
            position: sticky;
            top: 120px;
            height: fit-content;
        }

        /* Archivos */
        .files-section {
            margin-top: 2rem;
        }

        .file-card {
            background: var(--lighter-purple);
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .file-card:hover {
            background: var(--light-purple);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .file-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .file-icon {
            width: 50px;
            height: 50px;
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .pdf-icon {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
        }

        .image-icon {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
        }

        .file-info {
            flex: 1;
        }

        .file-name {
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: var(--text-dark);
        }

        .file-meta {
            font-size: 0.875rem;
            color: var(--text-gray);
        }

        .file-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
            flex-wrap: wrap;
        }

        /* Imagen de vista previa */
        .image-preview-container {
            margin-top: 2rem;
        }

        .image-preview {
            width: 100%;
            border-radius: var(--radius-lg);
            overflow: hidden;
            margin-top: 1rem;
            box-shadow: var(--shadow-md);
        }

        .image-preview img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Botones */
        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius-lg);
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            border: none;
            font-family: 'Inter', sans-serif;
        }

        .btn-primary {
            background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
            color: var(--white);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn-secondary {
            background: var(--white);
            color: var(--primary-purple);
            border: 2px solid var(--primary-purple);
        }

        .btn-secondary:hover {
            background: var(--light-purple);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-success {
            background: linear-gradient(to right, var(--success-green), #34d399);
            color: white;
        }

        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-info {
            background: linear-gradient(to right, var(--info-blue), #60a5fa);
            color: white;
        }

        .btn-info:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-danger {
            background: linear-gradient(to right, var(--danger-red), #f87171);
            color: white;
        }

        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }

        /* Metadata */
        .metadata {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #e5e7eb;
        }

        .metadata-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-gray);
            font-size: 0.875rem;
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
            .header-content, .main-container {
                padding: 0 1rem;
            }
            
            .page-hero {
                padding: 3rem 2rem;
            }
            
            .page-title {
                font-size: 2.2rem;
            }
            
            .info-panel, .sidebar-panel {
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
            
            .page-hero {
                padding: 2rem 1.5rem;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .hero-actions {
                justify-content: center;
                width: 100%;
            }
            
            .sidebar-panel {
                position: static;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 0.75rem;
            }
        }

        @media (max-width: 480px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .file-actions {
                flex-direction: column;
            }
            
            .file-actions .btn {
                width: 100%;
            }
        }

        /* Vista PDF */
        .pdf-viewer-container {
            margin-top: 2rem;
        }

        .pdf-viewer {
            width: 100%;
            height: 600px;
            border-radius: var(--radius-lg);
            border: 1px solid #e5e7eb;
            margin-top: 1rem;
            box-shadow: var(--shadow-md);
        }

        /* Información no disponible */
        .no-content {
            text-align: center;
            padding: 3rem;
            color: var(--text-gray);
            background: var(--lighter-purple);
            border-radius: var(--radius-lg);
            margin-top: 1rem;
        }

        .no-content i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
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
                <a href="{{ route('comunicacion.create') }}" class="nav-link">
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
                <div class="hero-text">
                    <h1 class="page-title">{{ $convocatoria->titulo }}</h1>
                    <p class="page-subtitle">Detalles completos de la convocatoria</p>
                    
                    <div style="display: flex; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap;">
                        @php
                            $tipoClass = 'tipo-' . $convocatoria->tipo;
                            $tipoText = ucfirst($convocatoria->tipo);
                            $statusClass = $convocatoria->estado == 'publicado' ? 'status-publicado' : 'status-borrador';
                            $statusText = ucfirst($convocatoria->estado);
                        @endphp
                        
                        <span class="tipo-badge {{ $tipoClass }}">
                            @if($convocatoria->tipo == 'convocatoria')
                                <i class="fas fa-file-alt"></i>
                            @elseif($convocatoria->tipo == 'evento')
                                <i class="fas fa-calendar-alt"></i>
                            @else
                                <i class="fas fa-bullhorn"></i>
                            @endif
                            {{ $tipoText }}
                        </span>
                        
                        <span class="status-badge {{ $statusClass }}">
                            <i class="fas {{ $convocatoria->estado == 'publicado' ? 'fa-eye' : 'fa-pen' }}"></i>
                            {{ $statusText }}
                        </span>
                    </div>
                </div>
                
                <div class="hero-actions">
                    <a href="{{ route('comunicacion.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i>
                        Volver
                    </a>
                    <a href="{{ route('comunicacion.edit', $convocatoria->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                        Editar
                    </a>
                </div>
            </div>
        </section>

        <!-- Mensajes -->
        @if(session('success'))
            <div class="success-message">
                <i class="fas fa-check-circle"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        <!-- Contenido principal -->
        <div class="content-container">
            <!-- Panel de información principal -->
            <div class="info-panel fade-in">
                <div class="info-grid">
                    <div class="info-item">
                        <label class="info-label">
                            <i class="fas fa-heading"></i>
                            Título
                        </label>
                        <div class="info-value">{{ $convocatoria->titulo }}</div>
                    </div>

                    <div class="info-item">
                        <label class="info-label">
                            <i class="fas fa-tag"></i>
                            Tipo
                        </label>
                        <div class="info-value">{{ ucfirst($convocatoria->tipo) }}</div>
                    </div>

                    <div class="info-item">
                        <label class="info-label">
                            <i class="fas fa-toggle-on"></i>
                            Estado
                        </label>
                        <div class="info-value">{{ ucfirst($convocatoria->estado) }}</div>
                    </div>

                    <div class="info-item">
                        <label class="info-label">
                            <i class="fas fa-user"></i>
                            Creado por
                        </label>
                        <div class="info-value">{{ $convocatoria->user->name ?? 'Usuario' }}</div>
                    </div>

                    @if($convocatoria->fecha_inicio)
                    <div class="info-item">
                        <label class="info-label">
                            <i class="fas fa-calendar-alt"></i>
                            Fecha de inicio
                        </label>
                        <div class="info-value">{{ \Carbon\Carbon::parse($convocatoria->fecha_inicio)->format('d/m/Y') }}</div>
                    </div>
                    @endif

                    @if($convocatoria->fecha_fin)
                    <div class="info-item">
                        <label class="info-label">
                            <i class="fas fa-calendar-alt"></i>
                            Fecha de fin
                        </label>
                        <div class="info-value">{{ \Carbon\Carbon::parse($convocatoria->fecha_fin)->format('d/m/Y') }}</div>
                    </div>
                    @endif

                    @if($convocatoria->lugar)
                    <div class="info-item">
                        <label class="info-label">
                            <i class="fas fa-map-marker-alt"></i>
                            Lugar
                        </label>
                        <div class="info-value">{{ $convocatoria->lugar }}</div>
                    </div>
                    @endif
                </div>

                <!-- Descripción -->
                <div class="description-container">
                    <label class="info-label">
                        <i class="fas fa-align-left"></i>
                        Descripción
                    </label>
                    <div class="description-content">
                        {{ $convocatoria->descripcion }}
                    </div>
                </div>

                <!-- Metadata -->
                <div class="metadata">
                    <div class="metadata-item">
                        <i class="fas fa-calendar-plus"></i>
                        <span>Creado: {{ $convocatoria->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <div class="metadata-item">
                        <i class="fas fa-calendar-edit"></i>
                        <span>Actualizado: {{ $convocatoria->updated_at->format('d/m/Y H:i') }}</span>
                    </div>
                </div>
            </div>

            <!-- Panel lateral -->
            <div class="sidebar-panel fade-in">
                <!-- Archivos -->
                <div class="files-section">
                    <h3 style="margin-bottom: 1.5rem; color: var(--text-dark); font-weight: 700; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-paperclip"></i>
                        Archivos Adjuntos
                    </h3>

                    <!-- PDF -->
                    @if($convocatoria->pdf)
                    <div class="file-card">
                        <div class="file-header">
                            <div class="file-icon pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="file-info">
                                <div class="file-name">Documento PDF</div>
                                <div class="file-meta">Archivo oficial de la convocatoria</div>
                            </div>
                        </div>
                        <div class="file-actions">
                            <a href="{{ route('comunicacion.ver-pdf', $convocatoria->id) }}" 
                               class="btn btn-info btn-sm" target="_blank">
                                <i class="fas fa-eye"></i>
                                Ver en navegador
                            </a>
                            <a href="{{ route('comunicacion.descargar-pdf', $convocatoria->id) }}" 
                               class="btn btn-success btn-sm">
                                <i class="fas fa-download"></i>
                                Descargar PDF
                            </a>
                        </div>
                    </div>
                    @else
                    <div class="no-content">
                        <i class="fas fa-file-pdf"></i>
                        <p>No hay PDF disponible</p>
                    </div>
                    @endif

                    <!-- Imagen -->
                    @if($convocatoria->imagen)
                    <div class="file-card">
                        <div class="file-header">
                            <div class="file-icon image-icon">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="file-info">
                                <div class="file-name">Imagen de portada</div>
                                <div class="file-meta">Imagen promocional</div>
                            </div>
                        </div>
                        <div class="file-actions">
                            <a href="{{ asset('storage/convocatorias/imagenes/' . $convocatoria->imagen) }}" 
                               class="btn btn-info btn-sm" target="_blank">
                                <i class="fas fa-external-link-alt"></i>
                                Ver imagen completa
                            </a>
                        </div>
                    </div>
                    @else
                    <div class="no-content">
                        <i class="fas fa-image"></i>
                        <p>No hay imagen disponible</p>
                    </div>
                    @endif
                </div>

                <!-- Vista previa de imagen -->
                @if($convocatoria->imagen)
                <div class="image-preview-container">
                    <h4 style="margin-bottom: 1rem; color: var(--text-dark); font-weight: 600;">
                        <i class="fas fa-image"></i>
                        Vista previa de la imagen
                    </h4>
                    <div class="image-preview">
                        <img src="{{ asset('storage/convocatorias/imagenes/' . $convocatoria->imagen) }}" 
                             alt="Imagen de {{ $convocatoria->titulo }}">
                    </div>
                </div>
                @endif

                <!-- Acciones adicionales -->
                <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #e5e7eb;">
                    <h4 style="margin-bottom: 1rem; color: var(--text-dark); font-weight: 600;">
                        <i class="fas fa-cogs"></i>
                        Acciones
                    </h4>
                    
                    <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                        <!-- Cambiar estado -->
                        <form action="{{ route('comunicacion.cambiar-estado', ['id' => $convocatoria->id, 'estado' => $convocatoria->estado == 'publicado' ? 'borrador' : 'publicado']) }}" 
                              method="POST" 
                              style="width: 100%;">
                            @csrf
                            @method('POST')
                            <button type="submit" 
                                    class="btn btn-primary"
                                    style="width: 100%;">
                                <i class="fas {{ $convocatoria->estado == 'publicado' ? 'fa-eye-slash' : 'fa-eye' }}"></i>
                                {{ $convocatoria->estado == 'publicado' ? 'Cambiar a Borrador' : 'Publicar' }}
                            </button>
                        </form>

                        <!-- Eliminar -->
                        <form action="{{ route('comunicacion.destroy', $convocatoria->id) }}" 
                              method="POST" 
                              onsubmit="return confirm('¿Estás seguro de eliminar esta convocatoria? Esta acción no se puede deshacer.')"
                              style="width: 100%;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="btn btn-danger"
                                    style="width: 100%;">
                                <i class="fas fa-trash-alt"></i>
                                Eliminar Convocatoria
                            </button>
                        </form>
                    </div>
                </div>
            </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Efectos visuales para botones
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Confirmación para cambiar estado
            const stateForm = document.querySelector('form[action*="cambiar-estado"]');
            if (stateForm) {
                stateForm.addEventListener('submit', function(e) {
                    const action = this.querySelector('button').textContent.trim();
                    const confirmMessage = action === 'Publicar' 
                        ? '¿Publicar esta convocatoria? Será visible para todos los usuarios.'
                        : '¿Cambiar a borrador? Solo tú podrás ver esta convocatoria.';
                    
                    if (!confirm(confirmMessage)) {
                        e.preventDefault();
                    }
                });
            }

            // Efecto hover para tarjetas de archivos
            const fileCards = document.querySelectorAll('.file-card');
            fileCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = 'var(--shadow-md)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                });
            });

            // Animación de entrada
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
            });

            // Manejar clics en enlaces externos (abrir en nueva pestaña)
            document.querySelectorAll('a[href^="http"]').forEach(link => {
                if (!link.target) {
                    link.target = '_blank';
                }
            });
        });
    </script>
</body>
</html>