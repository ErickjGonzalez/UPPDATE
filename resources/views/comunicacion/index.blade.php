<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mis Convocatorias - Área de Comunicación</title>
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
            margin: 3rem auto;
            padding: 0 2rem;
        }

        /* Hero section para convocatorias */
        .convocatorias-hero {
            background: linear-gradient(135deg, #7c3aed, #8b5cf6);
            color: var(--white);
            border-radius: var(--radius-2xl);
            padding: 3rem 2.5rem;
            margin-bottom: 3rem;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
        }

        .convocatorias-hero::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
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
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            background: linear-gradient(to right, #ffffff, #ede9fe);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .page-subtitle {
            font-size: 1.125rem;
            opacity: 0.9;
            margin-bottom: 1.5rem;
        }

        .convocatoria-stats {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .stat-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: var(--radius-xl);
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
        }

        .stat-badge:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-3px);
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 800;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .hero-actions {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            min-width: 250px;
        }

        .btn-primary {
            background: linear-gradient(to right, #ffffff, #f0e7ff);
            color: var(--primary-purple);
            padding: 1rem 2rem;
            border: none;
            border-radius: var(--radius-lg);
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            text-decoration: none;
            text-align: center;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        /* Panel de gestión */
        .management-panel {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: 2.5rem;
            box-shadow: var(--shadow-lg);
            margin-bottom: 3rem;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .panel-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .search-filter {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .search-box {
            position: relative;
            min-width: 250px;
        }

        .search-input {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 3rem;
            border: 2px solid #e5e7eb;
            border-radius: var(--radius-lg);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-purple);
            box-shadow: 0 0 0 3px rgba(106, 13, 173, 0.2);
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-gray);
        }

        .filter-select {
            padding: 0.875rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: var(--radius-lg);
            font-size: 1rem;
            background: var(--white);
            min-width: 180px;
            cursor: pointer;
        }

        .filter-select:focus {
            outline: none;
            border-color: var(--primary-purple);
            box-shadow: 0 0 0 3px rgba(106, 13, 173, 0.2);
        }

        /* Tabla mejorada para convocatorias */
        .convocatorias-table-container {
            overflow-x: auto;
            border-radius: var(--radius-lg);
            border: 1px solid #e5e7eb;
            margin-top: 1.5rem;
        }

        .convocatorias-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1000px;
        }

        .convocatorias-table thead {
            background: linear-gradient(to right, var(--light-purple), #e9d8fd);
        }

        .convocatorias-table th {
            padding: 1.25rem 1.5rem;
            text-align: left;
            font-weight: 700;
            color: var(--dark-purple);
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid var(--primary-purple);
        }

        .convocatorias-table tbody tr {
            border-bottom: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .convocatorias-table tbody tr:hover {
            background: var(--lighter-purple);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .convocatorias-table td {
            padding: 1.25rem 1.5rem;
            vertical-align: middle;
        }

        /* Badge de estado */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: var(--radius-full);
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-publicado {
            background: linear-gradient(to right, #10b981, #34d399);
            color: white;
        }

        .status-borrador {
            background: linear-gradient(to right, #6b7280, #9ca3af);
            color: white;
        }

        /* Badge de tipo */
        .tipo-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: var(--radius-full);
            font-size: 0.85rem;
            font-weight: 600;
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

        /* Convocatoria info */
        .convocatoria-info {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .convocatoria-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #7c3aed, #8b5cf6);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .convocatoria-details {
            flex: 1;
        }

        .convocatoria-title {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .convocatoria-desc {
            font-size: 0.9rem;
            color: var(--text-gray);
            margin-bottom: 0.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .convocatoria-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.8rem;
            color: var(--text-gray);
            flex-wrap: wrap;
        }

        .convocatoria-meta-item {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        /* Archivos adjuntos */
        .file-attachments {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .file-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.4rem 0.8rem;
            background: var(--lighter-purple);
            border-radius: var(--radius-full);
            font-size: 0.8rem;
            color: var(--primary-purple);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .file-badge:hover {
            background: var(--light-purple);
            transform: translateY(-2px);
        }

        .pdf-badge {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger-red);
        }

        .pdf-badge:hover {
            background: rgba(239, 68, 68, 0.2);
        }

        .image-badge {
            background: rgba(59, 130, 246, 0.1);
            color: var(--info-blue);
        }

        .image-badge:hover {
            background: rgba(59, 130, 246, 0.2);
        }

        /* Acciones */
        .actions-cell {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            min-width: 200px;
        }

        .btn-action {
            padding: 0.6rem 1rem;
            border: none;
            border-radius: var(--radius-md);
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            min-width: 90px;
            justify-content: center;
        }

        .btn-edit {
            background: linear-gradient(to right, var(--warning-yellow), #fbbf24);
            color: var(--text-dark);
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }

        .btn-delete {
            background: linear-gradient(to right, var(--danger-red), #f87171);
            color: white;
        }

        .btn-delete:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }

        .btn-view {
            background: linear-gradient(to right, var(--info-blue), #60a5fa);
            color: white;
        }

        .btn-view:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .btn-download {
            background: linear-gradient(to right, var(--success-green), #34d399);
            color: white;
        }

        .btn-download:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }

        .btn-state {
            background: linear-gradient(to right, #8b5cf6, #a78bfa);
            color: white;
        }

        .btn-state:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 92, 246, 0.3);
        }

        /* Estados vacíos */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--text-gray);
        }

        .empty-icon {
            font-size: 4rem;
            color: #d1d5db;
            margin-bottom: 1.5rem;
        }

        .empty-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .empty-text {
            margin-bottom: 2rem;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
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

        /* Modal de confirmación */
        .confirm-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: 2.5rem;
            max-width: 500px;
            width: 90%;
            box-shadow: var(--shadow-lg);
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .modal-text {
            color: var(--text-gray);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .modal-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
        }

        .modal-btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: var(--radius-md);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .modal-btn-confirm {
            background: linear-gradient(to right, var(--danger-red), #f87171);
            color: white;
        }

        .modal-btn-confirm:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }

        .modal-btn-cancel {
            background: var(--white);
            color: var(--text-dark);
            border: 2px solid #e5e7eb;
        }

        .modal-btn-cancel:hover {
            background: #f9fafb;
            transform: translateY(-2px);
        }

        /* Responsividad */
        @media (max-width: 1024px) {
            .header-content, .main-container {
                padding: 0 1rem;
            }
            
            .convocatorias-hero {
                padding: 2.5rem 2rem;
            }
            
            .page-title {
                font-size: 2.2rem;
            }
            
            .management-panel {
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
            
            .hero-content {
                flex-direction: column;
                text-align: center;
            }
            
            .convocatoria-stats {
                justify-content: center;
            }
            
            .panel-header {
                flex-direction: column;
                align-items: stretch;
            }
            
            .search-filter {
                flex-direction: column;
            }
            
            .search-box, .filter-select {
                min-width: 100%;
            }
            
            .actions-cell {
                flex-direction: column;
            }
            
            .btn-action {
                min-width: 100%;
            }
            
            .convocatoria-info {
                flex-direction: column;
                text-align: center;
            }
            
            .convocatoria-icon {
                align-self: center;
            }
            
            .convocatoria-meta {
                justify-content: center;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 0.75rem;
            }
            
            .file-attachments {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .convocatorias-table {
                min-width: 800px;
            }
            
            .btn-action {
                min-width: 80px;
                font-size: 0.8rem;
                padding: 0.5rem 0.75rem;
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
                <a href="{{ route('comunicacion.index') }}" class="nav-link active">
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
        <!-- Hero section para Convocatorias -->
        <section class="convocatorias-hero">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="page-title">Mis Convocatorias</h1>
                    <p class="page-subtitle">Administra todas tus convocatorias, eventos y anuncios. Crea, edita y publica contenido para la comunidad universitaria.</p>
                    
                    <div class="convocatoria-stats">
                        <div class="stat-badge">
                            <div class="stat-number">{{ $convocatorias->count() }}</div>
                            <div class="stat-label">Total Convocatorias</div>
                        </div>
                        
                        <div class="stat-badge">
                            <div class="stat-number">{{ $convocatorias->where('estado', 'publicado')->count() }}</div>
                            <div class="stat-label">Publicadas</div>
                        </div>
                        
                        <div class="stat-badge">
                            <div class="stat-number">{{ $convocatorias->where('tipo', 'convocatoria')->count() }}</div>
                            <div class="stat-label">Convocatorias</div>
                        </div>
                        
                        <div class="stat-badge">
                            <div class="stat-number">{{ $convocatorias->where('tipo', 'evento')->count() }}</div>
                            <div class="stat-label">Eventos</div>
                        </div>
                    </div>
                </div>
                
                <div class="hero-actions">
                    <a href="{{ route('comunicacion.create') }}" class="btn-primary">
                        <i class="fas fa-plus-circle"></i>
                        Crear Nueva Convocatoria
                    </a>
                    <p style="font-size: 0.9rem; opacity: 0.9; text-align: center;">Crea convocatorias, eventos o anuncios</p>
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

        @if(session('error'))
            <div class="error-message">
                <i class="fas fa-exclamation-triangle"></i>
                <div>{{ session('error') }}</div>
            </div>
        @endif

        <!-- Panel de gestión -->
        <div class="management-panel">
            <div class="panel-header">
                <h2 class="panel-title">Todas mis convocatorias</h2>
                
                <div class="search-filter">
                    <div class="search-box">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Buscar convocatoria..." id="searchInput">
                    </div>
                    
                    <select class="filter-select" id="filterEstado">
                        <option value="">Todos los estados</option>
                        <option value="publicado">Publicados</option>
                        <option value="borrador">Borradores</option>
                    </select>
                    
                    <select class="filter-select" id="filterTipo">
                        <option value="">Todos los tipos</option>
                        <option value="convocatoria">Convocatorias</option>
                        <option value="evento">Eventos</option>
                        <option value="anuncio">Anuncios</option>
                    </select>
                </div>
            </div>

            <div class="convocatorias-table-container">
                @if($convocatorias->count() > 0)
                    <table class="convocatorias-table" id="convocatoriasTable">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Tipo</th>
                                <th>Fechas</th>
                                <th>Archivos</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($convocatorias as $convocatoria)
                                <tr class="fade-in" data-estado="{{ $convocatoria->estado }}" data-tipo="{{ $convocatoria->tipo }}">
                                    <td>
                                        <div class="convocatoria-info">
                                            <div class="convocatoria-icon">
                                                @if($convocatoria->tipo == 'convocatoria')
                                                    <i class="fas fa-file-alt"></i>
                                                @elseif($convocatoria->tipo == 'evento')
                                                    <i class="fas fa-calendar-alt"></i>
                                                @else
                                                    <i class="fas fa-bullhorn"></i>
                                                @endif
                                            </div>
                                            <div class="convocatoria-details">
                                                <div class="convocatoria-title">{{ $convocatoria->titulo }}</div>
                                                <div class="convocatoria-desc">{{ Str::limit($convocatoria->descripcion, 100) }}</div>
                                                <div class="convocatoria-meta">
                                                    @if($convocatoria->lugar)
                                                        <span class="convocatoria-meta-item">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            {{ Str::limit($convocatoria->lugar, 30) }}
                                                        </span>
                                                    @endif
                                                    <span class="convocatoria-meta-item">
                                                        <i class="fas fa-calendar-alt"></i>
                                                        Creado: {{ $convocatoria->created_at->format('d/m/Y') }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                            $tipoClass = 'tipo-' . $convocatoria->tipo;
                                            $tipoText = ucfirst($convocatoria->tipo);
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
                                    </td>
                                    <td>
                                        <div style="display: flex; flex-direction: column; gap: 0.25rem;">
                                            @if($convocatoria->fecha_inicio)
                                                <div>
                                                    <strong>Inicio:</strong><br>
                                                    {{ \Carbon\Carbon::parse($convocatoria->fecha_inicio)->format('d/m/Y') }}
                                                </div>
                                            @endif
                                            @if($convocatoria->fecha_fin)
                                                <div>
                                                    <strong>Fin:</strong><br>
                                                    {{ \Carbon\Carbon::parse($convocatoria->fecha_fin)->format('d/m/Y') }}
                                                </div>
                                            @endif
                                            @if(!$convocatoria->fecha_inicio && !$convocatoria->fecha_fin)
                                                <span style="color: var(--text-gray); font-style: italic;">Sin fechas</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="file-attachments">
                                            @if($convocatoria->pdf)
                                                <a href="{{ route('comunicacion.descargar-pdf', $convocatoria->id) }}" 
                                                   class="file-badge pdf-badge" 
                                                   title="Descargar PDF">
                                                    <i class="fas fa-file-pdf"></i>
                                                    PDF
                                                </a>
                                                <a href="{{ route('comunicacion.ver-pdf', $convocatoria->id) }}" 
                                                   class="file-badge" 
                                                   target="_blank"
                                                   title="Ver PDF">
                                                    <i class="fas fa-eye"></i>
                                                    Ver
                                                </a>
                                            @endif
                                            @if($convocatoria->imagen)
                                                <span class="file-badge image-badge">
                                                    <i class="fas fa-image"></i>
                                                    Imagen
                                                </span>
                                            @endif
                                            @if(!$convocatoria->pdf && !$convocatoria->imagen)
                                                <span style="color: var(--text-gray); font-style: italic;">Sin archivos</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                            $statusClass = $convocatoria->estado == 'publicado' ? 'status-publicado' : 'status-borrador';
                                            $statusIcon = $convocatoria->estado == 'publicado' ? 'fa-eye' : 'fa-pen';
                                            $statusText = ucfirst($convocatoria->estado);
                                        @endphp
                                        <span class="status-badge {{ $statusClass }}">
                                            <i class="fas {{ $statusIcon }}" style="font-size: 0.8rem;"></i>
                                            {{ $statusText }}
                                        </span>
                                    </td>
                                    <td class="actions-cell">
                                        <a href="{{ route('comunicacion.show', $convocatoria->id) }}" 
                                           class="btn-action btn-view" 
                                           title="Ver detalles">
                                            <i class="fas fa-eye"></i>
                                            Ver
                                        </a>
                                        
                                        <a href="{{ route('comunicacion.edit', $convocatoria->id) }}" 
                                           class="btn-action btn-edit"
                                           title="Editar convocatoria">
                                            <i class="fas fa-edit"></i>
                                            Editar
                                        </a>
                                        
                                        <form action="{{ route('comunicacion.cambiar-estado', ['id' => $convocatoria->id, 'estado' => $convocatoria->estado == 'publicado' ? 'borrador' : 'publicado']) }}" 
                                              method="POST" 
                                              style="display: inline;">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" 
                                                    class="btn-action btn-state"
                                                    title="{{ $convocatoria->estado == 'publicado' ? 'Cambiar a borrador' : 'Publicar' }}">
                                                <i class="fas {{ $convocatoria->estado == 'publicado' ? 'fa-eye-slash' : 'fa-eye' }}"></i>
                                                {{ $convocatoria->estado == 'publicado' ? 'Ocultar' : 'Publicar' }}
                                            </button>
                                        </form>
                                        
                                        <button type="button" 
                                                class="btn-action btn-delete" 
                                                onclick="showDeleteModal({{ $convocatoria->id }}, '{{ addslashes($convocatoria->titulo) }}')"
                                                title="Eliminar convocatoria">
                                            <i class="fas fa-trash-alt"></i>
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="empty-state">
                        <div class="empty-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3 class="empty-title">No hay convocatorias registradas</h3>
                        <p class="empty-text">Comienza creando tu primera convocatoria para compartir información con la comunidad universitaria.</p>
                        <a href="{{ route('comunicacion.create') }}" class="btn-primary" style="display: inline-flex; width: auto;">
                            <i class="fas fa-plus-circle"></i>
                            Crear Primera Convocatoria
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </main>

    <!-- Modal de confirmación para eliminar -->
    <div class="confirm-modal" id="deleteModal">
        <div class="modal-content">
            <h3 class="modal-title">¿Eliminar convocatoria?</h3>
            <p class="modal-text" id="modalText">
                ¿Estás seguro de que quieres eliminar la convocatoria "<span id="convocatoriaTitle"></span>"?
                Esta acción eliminará todos los archivos asociados (PDF e imagen) y no se puede deshacer.
            </p>
            <form method="POST" action="" id="deleteForm">
                @csrf
                @method('DELETE')
                <div class="modal-actions">
                    <button type="button" class="modal-btn modal-btn-cancel" onclick="hideDeleteModal()">
                        Cancelar
                    </button>
                    <button type="submit" class="modal-btn modal-btn-confirm">
                        Sí, eliminar
                    </button>
                </div>
            </form>
        </div>
    </div>

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
            <p class="copyright">© {{ date('Y') }} UPPDATE - Sistema de Gestión de Comunicación</p>
        </div>
    </footer>

    <script>
        // Variables globales
        let convocatoriaToDelete = null;
        let convocatoriaTitle = '';

        // Mostrar modal de eliminación
        function showDeleteModal(id, title) {
            convocatoriaToDelete = id;
            convocatoriaTitle = title;
            
            document.getElementById('convocatoriaTitle').textContent = title;
            document.getElementById('deleteForm').action = `/comunicacion/convocatorias/${id}`;
            document.getElementById('deleteModal').style.display = 'flex';
        }

        // Ocultar modal de eliminación
        function hideDeleteModal() {
            document.getElementById('deleteModal').style.display = 'none';
            convocatoriaToDelete = null;
            convocatoriaTitle = '';
        }

        // Cerrar modal al hacer clic fuera
        document.getElementById('deleteModal').addEventListener('click', function(e) {
            if (e.target === this) {
                hideDeleteModal();
            }
        });

        // Filtrado y búsqueda en tiempo real
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const filterEstado = document.getElementById('filterEstado');
            const filterTipo = document.getElementById('filterTipo');
            const tableRows = document.querySelectorAll('#convocatoriasTable tbody tr');
            
            function filterConvocatorias() {
                const searchTerm = searchInput.value.toLowerCase();
                const estadoFilter = filterEstado.value;
                const tipoFilter = filterTipo.value;
                
                tableRows.forEach(row => {
                    const title = row.cells[0].textContent.toLowerCase();
                    const tipo = row.getAttribute('data-tipo');
                    const estado = row.getAttribute('data-estado');
                    
                    const matchesSearch = searchTerm === '' || title.includes(searchTerm);
                    const matchesEstado = estadoFilter === '' || estado === estadoFilter;
                    const matchesTipo = tipoFilter === '' || tipo === tipoFilter;
                    
                    if (matchesSearch && matchesEstado && matchesTipo) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }
            
            // Event listeners para filtros
            if (searchInput) {
                searchInput.addEventListener('input', filterConvocatorias);
            }
            
            if (filterEstado) {
                filterEstado.addEventListener('change', filterConvocatorias);
            }
            
            if (filterTipo) {
                filterTipo.addEventListener('change', filterConvocatorias);
            }
            
            // Animación para filas al cargar
            tableRows.forEach((row, index) => {
                row.style.animationDelay = `${index * 0.05}s`;
                row.classList.add('fade-in');
            });
            
            // Efectos hover para botones de acción
            const actionButtons = document.querySelectorAll('.btn-action');
            actionButtons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Efecto hover para filas de la tabla
            const tableRowsAll = document.querySelectorAll('.convocatorias-table tbody tr');
            tableRowsAll.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = 'var(--shadow-md)';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                });
            });
            
            // Confirmación para cambiar estado
            const stateButtons = document.querySelectorAll('.btn-state');
            stateButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const form = this.closest('form');
                    if (form) {
                        const action = this.textContent.trim();
                        const confirmMessage = action === 'Publicar' 
                            ? '¿Publicar esta convocatoria? Será visible para todos los usuarios.'
                            : '¿Cambiar a borrador? Solo tú podrás ver esta convocatoria.';
                        
                        if (!confirm(confirmMessage)) {
                            e.preventDefault();
                        }
                    }
                });
            });
            
            // Prevenir envío de formulario de eliminación si se cancela
            document.querySelectorAll('form').forEach(form => {
                if (form.action.includes('destroy')) {
                    form.addEventListener('submit', function(e) {
                        if (!confirm('¿Estás seguro de eliminar esta convocatoria? Esta acción no se puede deshacer.')) {
                            e.preventDefault();
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>