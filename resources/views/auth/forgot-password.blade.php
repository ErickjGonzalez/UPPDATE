<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar Contraseña - UPPDATE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Scripts de Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        /* Contenedor principal */
        .password-reset-container {
            width: 100%;
            max-width: 480px;
            background: var(--white);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header */
        .reset-header {
            background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
            padding: 2.5rem 2rem;
            text-align: center;
            color: var(--white);
        }

        .logo-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .logo-icon {
            background: var(--white);
            color: var(--primary-purple);
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
            color: var(--white);
        }

        .header-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .header-subtitle {
            opacity: 0.9;
            font-size: 1rem;
            max-width: 400px;
            margin: 0 auto;
        }

        /* Contenido del formulario */
        .reset-content {
            padding: 2.5rem 2rem;
        }

        /* Mensaje informativo */
        .info-message {
            background: var(--lighter-purple);
            border-left: 4px solid var(--primary-purple);
            padding: 1.25rem;
            border-radius: var(--radius-md);
            margin-bottom: 2rem;
            display: flex;
            gap: 1rem;
        }

        .info-icon {
            color: var(--primary-purple);
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .info-text {
            color: var(--text-dark);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Mensajes de estado */
        .status-message {
            background: linear-gradient(to right, var(--success-green), #34d399);
            color: var(--white);
            padding: 1.25rem;
            border-radius: var(--radius-lg);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .status-icon {
            font-size: 1.5rem;
        }

        /* Formulario */
        .reset-form {
            margin-top: 2rem;
        }

        .form-group {
            margin-bottom: 1.75rem;
        }

        .input-group {
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 3rem;
            border: 2px solid #e5e7eb;
            border-radius: var(--radius-lg);
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-purple);
            box-shadow: 0 0 0 4px rgba(106, 13, 173, 0.15);
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-gray);
            font-size: 1.2rem;
        }

        .error-message {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .error-icon {
            font-size: 1rem;
        }

        /* Botón */
        .submit-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
            color: var(--white);
            border: none;
            border-radius: var(--radius-lg);
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Enlace de regreso */
        .back-link {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #e5e7eb;
        }

        .back-link a {
            color: var(--primary-purple);
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: color 0.3s;
        }

        .back-link a:hover {
            color: var(--dark-purple);
            text-decoration: underline;
        }

        /* Pasos del proceso */
        .process-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2.5rem;
            position: relative;
        }

        .process-steps::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 25px;
            right: 25px;
            height: 2px;
            background: #e5e7eb;
            z-index: 1;
        }

        .step {
            text-align: center;
            position: relative;
            z-index: 2;
            flex: 1;
        }

        .step-circle {
            width: 40px;
            height: 40px;
            background: var(--white);
            border: 2px solid #e5e7eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.75rem;
            font-weight: 600;
            color: var(--text-gray);
            transition: all 0.3s ease;
        }

        .step.active .step-circle {
            background: var(--primary-purple);
            border-color: var(--primary-purple);
            color: var(--white);
        }

        .step-label {
            font-size: 0.85rem;
            color: var(--text-gray);
            font-weight: 500;
        }

        .step.active .step-label {
            color: var(--primary-purple);
            font-weight: 600;
        }

        /* Mensaje de éxito */
        .success-message {
            text-align: center;
            padding: 2rem 0;
        }

        .success-icon {
            font-size: 4rem;
            color: var(--success-green);
            margin-bottom: 1.5rem;
        }

        .success-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .success-text {
            color: var(--text-gray);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .success-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        /* Responsividad */
        @media (max-width: 640px) {
            .password-reset-container {
                max-width: 100%;
            }
            
            .reset-header {
                padding: 2rem 1.5rem;
            }
            
            .reset-content {
                padding: 2rem 1.5rem;
            }
            
            .logo-section {
                margin-bottom: 1rem;
            }
            
            .logo-icon {
                width: 40px;
                height: 40px;
                font-size: 1.5rem;
            }
            
            .logo-text {
                font-size: 1.5rem;
            }
            
            .header-title {
                font-size: 1.5rem;
            }
            
            .process-steps {
                flex-direction: column;
                gap: 1.5rem;
                align-items: flex-start;
            }
            
            .process-steps::before {
                display: none;
            }
            
            .step {
                display: flex;
                align-items: center;
                gap: 1rem;
                text-align: left;
                width: 100%;
            }
            
            .step-circle {
                margin: 0;
                flex-shrink: 0;
            }
            
            .success-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 0.5rem;
            }
            
            .reset-header {
                padding: 1.5rem 1rem;
            }
            
            .reset-content {
                padding: 1.5rem 1rem;
            }
            
            .info-message {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="password-reset-container">
        <!-- Header -->
        <div class="reset-header">
            <div class="logo-section">
                <div class="logo-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="logo-text">UPPDATE</div>
            </div>
            
            <h1 class="header-title">Recuperar Contraseña</h1>
            <p class="header-subtitle">Recupera el acceso a tu cuenta en el sistema académico</p>
        </div>

        <!-- Contenido -->
        <div class="reset-content">
            <!-- Pasos del proceso -->
            <div class="process-steps">
                <div class="step active">
                    <div class="step-circle">1</div>
                    <div class="step-label">Ingresa tu email</div>
                </div>
                <div class="step">
                    <div class="step-circle">2</div>
                    <div class="step-label">Revisa tu correo</div>
                </div>
                <div class="step">
                    <div class="step-circle">3</div>
                    <div class="step-label">Crea nueva contraseña</div>
                </div>
            </div>

            <!-- Mensaje informativo -->
            <div class="info-message">
                <i class="fas fa-info-circle info-icon"></i>
                <div class="info-text">
                    ¿Olvidaste tu contraseña? No hay problema. Simplemente ingresa tu dirección de correo electrónico 
                    y te enviaremos un enlace para restablecer tu contraseña que te permitirá crear una nueva.
                </div>
            </div>

            <!-- Mensaje de estado -->
            @if (session('status'))
                <div class="status-message">
                    <i class="fas fa-check-circle status-icon"></i>
                    <div>{{ session('status') }}</div>
                </div>
            @endif

            <!-- Formulario -->
            <form method="POST" action="{{ route('password.email') }}" class="reset-form" id="passwordResetForm">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">
                        <i class="fas fa-envelope"></i>
                        Correo Electrónico
                    </label>
                    <div class="input-group">
                        <i class="fas fa-user input-icon"></i>
                        <input 
                            id="email" 
                            class="form-input" 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus 
                            placeholder="ejemplo@universidad.edu"
                        />
                    </div>
                    @if ($errors->has('email'))
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle error-icon"></i>
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <button type="submit" class="submit-btn" id="submitBtn">
                    <i class="fas fa-paper-plane"></i>
                    Enviar Enlace de Recuperación
                </button>
            </form>

            <!-- Enlace de regreso -->
            <div class="back-link">
                <a href="{{ route('login') }}">
                    <i class="fas fa-arrow-left"></i>
                    Volver al inicio de sesión
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('passwordResetForm');
            const emailInput = document.getElementById('email');
            const submitBtn = document.getElementById('submitBtn');
            
            if (form) {
                form.addEventListener('submit', function(e) {
                    // Validación básica del email
                    if (!emailInput.value.trim()) {
                        e.preventDefault();
                        showError(emailInput, 'Por favor ingresa tu correo electrónico');
                        return;
                    }
                    
                    if (!isValidEmail(emailInput.value)) {
                        e.preventDefault();
                        showError(emailInput, 'Por favor ingresa un correo electrónico válido');
                        return;
                    }
                    
                    // Cambiar el estado del botón durante el envío
                    if (submitBtn) {
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
                    }
                });
            }
            
            // Validación en tiempo real
            if (emailInput) {
                emailInput.addEventListener('input', function() {
                    if (this.value.trim() && isValidEmail(this.value)) {
                        clearError(this);
                    }
                });
                
                emailInput.addEventListener('blur', function() {
                    if (this.value.trim() && !isValidEmail(this.value)) {
                        showError(this, 'Por favor ingresa un correo electrónico válido');
                    }
                });
            }
            
            // Efecto de enfoque en el input
            if (emailInput) {
                emailInput.addEventListener('focus', function() {
                    this.parentElement.style.borderColor = 'var(--primary-purple)';
                });
                
                emailInput.addEventListener('blur', function() {
                    if (!this.value.trim()) {
                        this.parentElement.style.borderColor = '#e5e7eb';
                    }
                });
            }
            
            // Efecto hover para el botón
            if (submitBtn) {
                submitBtn.addEventListener('mouseenter', function() {
                    if (!this.disabled) {
                        this.style.transform = 'translateY(-2px)';
                    }
                });
                
                submitBtn.addEventListener('mouseleave', function() {
                    if (!this.disabled && document.activeElement !== this) {
                        this.style.transform = 'translateY(0)';
                    }
                });
            }
            
            // Funciones auxiliares
            function isValidEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }
            
            function showError(input, message) {
                const group = input.parentElement;
                group.style.borderColor = '#ef4444';
                
                // Buscar o crear el div de error
                let errorDiv = group.nextElementSibling;
                if (!errorDiv || !errorDiv.classList.contains('error-message')) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'error-message';
                    group.parentElement.appendChild(errorDiv);
                }
                
                errorDiv.innerHTML = `<i class="fas fa-exclamation-circle error-icon"></i> ${message}`;
                errorDiv.style.display = 'flex';
            }
            
            function clearError(input) {
                const group = input.parentElement;
                group.style.borderColor = '#e5e7eb';
                
                const errorDiv = group.nextElementSibling;
                if (errorDiv && errorDiv.classList.contains('error-message')) {
                    errorDiv.style.display = 'none';
                }
            }
            
            // Si hay un mensaje de éxito, mostrar animación
            const statusMessage = document.querySelector('.status-message');
            if (statusMessage) {
                // Si el email fue enviado con éxito, actualizar los pasos
                const steps = document.querySelectorAll('.step');
                steps[0].classList.remove('active');
                steps[1].classList.add('active');
                
                // Cambiar el formulario por un mensaje de éxito
                const formContent = document.querySelector('.reset-form');
                const infoMessage = document.querySelector('.info-message');
                const backLink = document.querySelector('.back-link');
                
                if (formContent && infoMessage && backLink) {
                    formContent.style.display = 'none';
                    infoMessage.style.display = 'none';
                    
                    const successDiv = document.createElement('div');
                    successDiv.className = 'success-message';
                    successDiv.innerHTML = `
                        <div class="success-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3 class="success-title">¡Enlace enviado exitosamente!</h3>
                        <p class="success-text">
                            Hemos enviado un enlace de recuperación a tu correo electrónico. 
                            Por favor revisa tu bandeja de entrada y sigue las instrucciones 
                            para crear una nueva contraseña.
                        </p>
                        <div class="success-actions">
                            <a href="{{ route('login') }}" class="submit-btn" style="width: auto; padding: 0.75rem 1.5rem;">
                                <i class="fas fa-sign-in-alt"></i>
                                Volver a Iniciar Sesión
                            </a>
                            <button type="button" class="submit-btn" onclick="location.reload()" style="width: auto; padding: 0.75rem 1.5rem; background: var(--text-gray);">
                                <i class="fas fa-redo"></i>
                                Intentar con otro Email
                            </button>
                        </div>
                    `;
                    
                    formContent.parentNode.insertBefore(successDiv, backLink);
                }
            }
        });
    </script>
</body>
</html>