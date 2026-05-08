<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión - UPPDATE</title>
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
            --warning-yellow: #f59e0b;
            --danger-red: #ef4444;
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
        }

        /* Layout principal */
        .login-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sección promocional mejorada */
        .login-promo {
            flex: 1;
            background: linear-gradient(rgba(106, 13, 173, 0.9), rgba(75, 0, 130, 0.95)), 
                        url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white);
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 3rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .login-promo::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(106, 13, 173, 0.6), rgba(75, 0, 130, 0.8));
            z-index: 1;
        }
        
        @media (min-width: 768px) {
            .login-promo {
                display: flex;
            }
        }

        .promo-content {
            position: relative;
            z-index: 2;
            max-width: 500px;
        }

        .logo-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .logo-icon {
            background: var(--white);
            color: var(--primary-purple);
            width: 60px;
            height: 60px;
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        .logo-text {
            font-weight: 800;
            font-size: 2.2rem;
            color: var(--white);
        }

        .login-promo-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .login-promo-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .features-list {
            text-align: left;
            margin-top: 3rem;
            display: grid;
            gap: 1.5rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .feature-icon {
            background: rgba(255, 255, 255, 0.2);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        /* Sección del formulario */
        .form-section {
            flex: 1.2;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 1rem;
        }

        .form-wrapper {
            width: 100%;
            max-width: 450px;
            padding: 3rem 2.5rem;
            background: var(--white);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-lg);
        }

        .form-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .form-title {
            font-size: 2.2rem;
            font-weight: 800;
            background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 0.5rem;
        }

        .form-subtitle {
            color: var(--text-gray);
            font-size: 1rem;
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

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-gray);
            cursor: pointer;
            font-size: 1.2rem;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1.5rem 0 2rem;
            font-size: 0.9rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
        }

        .remember-checkbox {
            width: 18px;
            height: 18px;
            border: 2px solid #d1d5db;
            border-radius: var(--radius-sm);
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
        }

        .remember-checkbox:checked {
            background: var(--primary-purple);
            border-color: var(--primary-purple);
        }

        .remember-checkbox:checked::after {
            content: '✓';
            position: absolute;
            color: white;
            font-size: 12px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .forgot-password {
            color: var(--primary-purple);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .forgot-password:hover {
            color: var(--dark-purple);
            text-decoration: underline;
        }

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
            transform: none !important;
            box-shadow: none !important;
        }

        /* Mensajes de estado y error */
        .auth-status {
            background: linear-gradient(to right, var(--success-green), #34d399);
            color: var(--white);
            padding: 1rem;
            border-radius: var(--radius-lg);
            margin-bottom: 1.5rem;
            font-weight: 500;
            text-align: center;
        }

        .input-error {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .input-error i {
            font-size: 1rem;
        }

        /* Contador de intentos */
        .attempts-warning {
            background: linear-gradient(to right, var(--warning-yellow), #fbbf24);
            color: var(--text-dark);
            padding: 1rem;
            border-radius: var(--radius-lg);
            margin-bottom: 1.5rem;
            font-weight: 500;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }

        .attempts-warning i {
            font-size: 1.5rem;
        }

        /* Bloqueo temporal */
        .temporary-block {
            background: linear-gradient(to right, var(--danger-red), #f87171);
            color: var(--white);
            padding: 1.25rem;
            border-radius: var(--radius-lg);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .temporary-block h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .temporary-block p {
            margin-bottom: 0.5rem;
        }

        .countdown {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 1rem 0;
        }

        /* Footer del formulario */
        .form-footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #e5e7eb;
            color: var(--text-gray);
            font-size: 0.9rem;
        }

        .form-footer a {
            color: var(--primary-purple);
            text-decoration: none;
            font-weight: 500;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }
            
            .login-promo {
                padding: 2rem 1.5rem;
                min-height: 300px;
            }
            
            .logo-section {
                margin-bottom: 1.5rem;
            }
            
            .logo-icon {
                width: 50px;
                height: 50px;
                font-size: 1.8rem;
            }
            
            .logo-text {
                font-size: 1.8rem;
            }
            
            .login-promo-title {
                font-size: 2.2rem;
            }
            
            .login-promo-subtitle {
                font-size: 1rem;
            }
            
            .form-wrapper {
                padding: 2rem 1.5rem;
                margin: -3rem 1rem 2rem;
                position: relative;
                z-index: 10;
            }
            
            .form-title {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 480px) {
            .form-options {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }
            
            .login-promo-title {
                font-size: 1.8rem;
            }
            
            .form-wrapper {
                padding: 1.5rem 1rem;
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

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }

        .shake {
            animation: shake 0.5s ease-in-out;
        }
    </style>
</head>
<body>
    <main class="login-container">
        <section class="login-promo">
            <div class="promo-content fade-in">
                <div class="logo-section">
                    <div class="logo-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="logo-text">UPPDATE</div>
                </div>
                
                <h1 class="login-promo-title">Bienvenido al Futuro Académico</h1>
                <p class="login-promo-subtitle">Tu portal integral para la gestión educativa moderna. Accede para transformar la experiencia académica.</p>
                
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <div style="font-weight: 600; margin-bottom: 0.25rem;">Seguridad Avanzada</div>
                            <div style="opacity: 0.9; font-size: 0.9rem;">Protección contra ataques y validación robusta</div>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <div style="font-weight: 600; margin-bottom: 0.25rem;">Gestión Inteligente</div>
                            <div style="opacity: 0.9; font-size: 0.9rem;">Dashboard y reportes en tiempo real</div>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <div>
                            <div style="font-weight: 600; margin-bottom: 0.25rem;">Roles Personalizados</div>
                            <div style="opacity: 0.9; font-size: 0.9rem;">Acceso diferenciado según perfil académico</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="form-section">
            <div class="form-wrapper fade-in" style="animation-delay: 0.2s;">
                <div class="form-header">
                    <h2 class="form-title">Iniciar Sesión</h2>
                    <p class="form-subtitle">Ingresa tus credenciales para acceder al sistema</p>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Mensaje de bloqueo temporal (simulado) -->
                <div id="temporaryBlock" class="temporary-block" style="display: none;">
                    <h3><i class="fas fa-lock"></i> Cuenta Temporalmente Bloqueada</h3>
                    <p>Has excedido el número máximo de intentos de inicio de sesión.</p>
                    <p>Por seguridad, tu cuenta ha sido bloqueada temporalmente.</p>
                    <div class="countdown" id="blockCountdown">05:00</div>
                    <p>Podrás intentar nuevamente cuando termine el temporizador.</p>
                </div>

                <!-- Advertencia de intentos (simulado) -->
                <div id="attemptsWarning" class="attempts-warning" style="display: none;">
                    <i class="fas fa-exclamation-triangle"></i>
                    <div>
                        <strong>¡Advertencia!</strong> Te quedan <span id="remainingAttempts">3</span> intentos antes de que tu cuenta se bloquee temporalmente.
                    </div>
                </div>

                <form method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">
                            <i class="fas fa-envelope" style="margin-right: 0.5rem;"></i>
                            Correo electrónico
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
                                autocomplete="username" 
                                maxlength="50"
                                placeholder="ejemplo@universidad.edu"
                                data-previous-value=""
                            >
                        </div>
                        <div id="emailError" class="input-error" style="display: none;">
                            <i class="fas fa-exclamation-circle"></i>
                            <span id="emailErrorMessage"></span>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock" style="margin-right: 0.5rem;"></i>
                            Contraseña
                        </label>
                        <div class="input-group">
                            <i class="fas fa-key input-icon"></i>
                            <input 
                                id="password" 
                                class="form-input" 
                                type="password" 
                                name="password" 
                                required 
                                autocomplete="current-password" 
                                maxlength="50"
                                placeholder="Ingresa tu contraseña"
                            >
                            <button type="button" class="password-toggle" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div id="passwordError" class="input-error" style="display: none;">
                            <i class="fas fa-exclamation-circle"></i>
                            <span id="passwordErrorMessage"></span>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="form-options">
                        <label class="remember-me">
                            <input 
                                id="remember_me" 
                                type="checkbox" 
                                class="remember-checkbox" 
                                name="remember"
                            >
                            <span>{{ __('Recordar mis datos') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="forgot-password" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>

                    <button type="submit" class="submit-btn" id="submitBtn">
                        <i class="fas fa-sign-in-alt"></i>
                        {{ __('Iniciar sesión') }}
                    </button>

                    <!-- reCAPTCHA (simulado) -->
                    <div id="recaptchaContainer" style="margin-top: 1rem; display: none;">
                        <div style="background: #f9f9f9; border: 1px solid #ddd; border-radius: var(--radius-md); padding: 1rem; text-align: center;">
                            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 0.5rem;">
                                <div style="width: 24px; height: 24px; background: #4285f4; border-radius: 2px;"></div>
                                <span style="font-size: 0.9rem; color: var(--text-gray);">Verifica que no eres un robot</span>
                            </div>
                            <button type="button" id="verifyHuman" style="background: #4285f4; color: white; border: none; padding: 0.5rem 1rem; border-radius: var(--radius-sm); cursor: pointer; font-size: 0.9rem;">
                                <i class="fas fa-check"></i> Verificar
                            </button>
                        </div>
                    </div>
                </form>

                <div class="form-footer">
                    <p>Sistema de Gestión Académica UPPDATE © {{ date('Y') }}</p>
                    <p>Versión 2.0 • <a href="#">Políticas de privacidad</a> • <a href="#">Soporte técnico</a></p>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Variables de estado
            let loginAttempts = parseInt(localStorage.getItem('loginAttempts')) || 0;
            const maxAttempts = 5;
            const blockDuration = 5 * 60 * 1000; // 5 minutos en milisegundos
            let blockTimer = null;
            let isBlocked = false;
            let isHumanVerified = false;
            
            // Elementos del DOM
            const loginForm = document.getElementById('loginForm');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');
            const submitBtn = document.getElementById('submitBtn');
            const temporaryBlock = document.getElementById('temporaryBlock');
            const attemptsWarning = document.getElementById('attemptsWarning');
            const blockCountdown = document.getElementById('blockCountdown');
            const remainingAttempts = document.getElementById('remainingAttempts');
            const recaptchaContainer = document.getElementById('recaptchaContainer');
            const verifyHuman = document.getElementById('verifyHuman');
            
            // Verificar si hay un bloqueo activo
            checkBlockStatus();
            
            // Toggle para mostrar/ocultar contraseña
            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
                });
            }
            
            // Validación en tiempo real del email
            if (emailInput) {
                emailInput.addEventListener('input', function() {
                    validateEmail(this.value);
                });
                
                emailInput.addEventListener('blur', function() {
                    if (this.value.trim()) {
                        validateEmail(this.value);
                    }
                });
                
                // Detectar cambios en el email para detectar usuario diferente
                emailInput.addEventListener('change', function() {
                    if (this.value !== this.dataset.previousValue) {
                        resetAttemptsForNewUser();
                    }
                    this.dataset.previousValue = this.value;
                });
            }
            
            // Verificación humana
            if (verifyHuman) {
                verifyHuman.addEventListener('click', function() {
                    isHumanVerified = true;
                    recaptchaContainer.style.display = 'none';
                    submitBtn.disabled = false;
                    showSuccess('Verificación completada. Puedes continuar.');
                });
            }
            
            // Validación del formulario al enviar
            if (loginForm) {
                loginForm.addEventListener('submit', function(event) {
                    event.preventDefault();
                    
                    if (isBlocked) {
                        showError('Tu cuenta está temporalmente bloqueada. Por favor espera.');
                        return;
                    }
                    
                    if (loginAttempts >= maxAttempts) {
                        blockAccount();
                        return;
                    }
                    
                    const emailValid = validateEmail(emailInput.value);
                    const passwordValid = validatePassword(passwordInput.value);
                    
                    if (!emailValid || !passwordValid) {
                        incrementAttempts();
                        return;
                    }
                    
                    // Si hay muchos intentos, mostrar reCAPTCHA
                    if (loginAttempts >= 3 && !isHumanVerified) {
                        recaptchaContainer.style.display = 'block';
                        submitBtn.disabled = true;
                        showWarning('Por seguridad, verifica que no eres un robot.');
                        return;
                    }
                    
                    // Si todo está bien, enviar el formulario
                    this.submit();
                });
            }
            
            // Funciones de validación
          // Función para validar email sin emojis ni caracteres no permitidos
function isValidEmail(email) {
    // Expresión regular básica para email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    // Verificar que no contenga emojis ni caracteres especiales no permitidos
    // Lista de caracteres permitidos en email según RFC 5322
    const allowedChars = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    
    // Verificar emojis y caracteres no permitidos
    const hasEmojis = /[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}]/u;
    const hasNonAllowedChars = /[<>\[\]\\\/()&%$#!*+=|{}:;"'`~]/;
    
    // Verificar si hay caracteres no latinos (excepto algunos permitidos)
    const hasNonLatin = /[^\x00-\x7F]/;
    
    return emailRegex.test(email) && 
           !hasEmojis.test(email) && 
           !hasNonAllowedChars.test(email.split('@')[0]) && // Solo verificar antes del @
           allowedChars.test(email);
}

// Modificar la función validateEmail existente para incluir esta validación
function validateEmail(email) {
    const emailError = document.getElementById('emailError');
    const emailErrorMessage = document.getElementById('emailErrorMessage');
    
    if (!email.trim()) {
        showErrorElement(emailError, emailErrorMessage, 'El correo electrónico es requerido');
        emailInput.parentElement.style.borderColor = '#ef4444';
        return false;
    }
    
    // Validar formato básico
    if (!isValidEmail(email)) {
        // Verificar específicamente si contiene emojis
        const hasEmojis = /[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}]/u.test(email);
        const hasNonAllowed = /[<>\[\]\\\/()&%$#!*+=|{}:;"'`~]/.test(email);
        
        if (hasEmojis) {
            showErrorElement(emailError, emailErrorMessage, 'El correo no debe contener emojis ni símbolos especiales');
        } else if (hasNonAllowed) {
            showErrorElement(emailError, emailErrorMessage, 'El correo contiene caracteres no permitidos');
        } else {
            showErrorElement(emailError, emailErrorMessage, 'Ingresa un correo electrónico válido');
        }
        
        emailInput.parentElement.style.borderColor = '#ef4444';
        return false;
    }
    
    // Validación de dominio institucional (opcional)
    if (!email.toLowerCase().includes('.edu') && !email.toLowerCase().includes('universidad')) {
        showWarningElement(emailError, emailErrorMessage, 'Se recomienda usar un correo institucional');
        emailInput.parentElement.style.borderColor = '#f59e0b';
    } else {
        hideErrorElement(emailError);
        emailInput.parentElement.style.borderColor = '#e5e7eb';
    }
    
    return true;
}

// También agregar validación en tiempo real para mostrar mensaje específico
if (emailInput) {
    emailInput.addEventListener('input', function() {
        const email = this.value;
        
        // Verificar si contiene emojis mientras el usuario escribe
        const hasEmojis = /[\u{1F600}-\u{1F64F}\u{1F300}-\u{1F5FF}\u{1F680}-\u{1F6FF}\u{1F1E0}-\u{1F1FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}]/u.test(email);
        const hasNonAllowed = /[<>\[\]\\\/()&%$#!*+=|{}:;"'`~]/.test(email);
        
        if (hasEmojis || hasNonAllowed) {
            const emailError = document.getElementById('emailError');
            const emailErrorMessage = document.getElementById('emailErrorMessage');
            
            if (hasEmojis) {
                showErrorElement(emailError, emailErrorMessage, '⚠️ Los correos no deben contener emojis');
            } else {
                showErrorElement(emailError, emailErrorMessage, '⚠️ Caracteres especiales no permitidos');
            }
            
            emailInput.parentElement.style.borderColor = '#ef4444';
        } else {
            validateEmail(email);
        }
    });
}
            
            function validatePassword(password) {
                const passwordError = document.getElementById('passwordError');
                const passwordErrorMessage = document.getElementById('passwordErrorMessage');
                
                if (!password.trim()) {
                    showErrorElement(passwordError, passwordErrorMessage, 'La contraseña es requerida');
                    passwordInput.parentElement.style.borderColor = '#ef4444';
                    return false;
                }
                
                if (password.length < 8) {
                    showErrorElement(passwordError, passwordErrorMessage, 'La contraseña debe tener al menos 8 caracteres');
                    passwordInput.parentElement.style.borderColor = '#ef4444';
                    return false;
                }
                
                // Verificar contraseñas comunes (lista básica)
                const commonPasswords = ['password', '12345678', 'qwerty', 'admin', 'welcome', 'contraseña'];
                if (commonPasswords.includes(password.toLowerCase())) {
                    showErrorElement(passwordError, passwordErrorMessage, 'Esta contraseña es muy común. Elige una más segura.');
                    passwordInput.parentElement.style.borderColor = '#ef4444';
                    return false;
                }
                
                hideErrorElement(passwordError);
                passwordInput.parentElement.style.borderColor = '#e5e7eb';
                return true;
            }
            
            // Funciones de manejo de intentos
            function incrementAttempts() {
                loginAttempts++;
                localStorage.setItem('loginAttempts', loginAttempts);
                
                if (loginAttempts >= 3) {
                    attemptsWarning.style.display = 'flex';
                    remainingAttempts.textContent = maxAttempts - loginAttempts;
                }
                
                if (loginAttempts >= maxAttempts) {
                    blockAccount();
                }
            }
            
            function resetAttemptsForNewUser() {
                loginAttempts = 0;
                localStorage.setItem('loginAttempts', loginAttempts);
                attemptsWarning.style.display = 'none';
                isHumanVerified = false;
                recaptchaContainer.style.display = 'none';
                submitBtn.disabled = false;
            }
            
            function blockAccount() {
                isBlocked = true;
                temporaryBlock.style.display = 'block';
                loginForm.style.display = 'none';
                
                // Guardar tiempo de bloqueo
                const blockUntil = Date.now() + blockDuration;
                localStorage.setItem('blockUntil', blockUntil);
                
                // Iniciar temporizador
                startBlockTimer(blockDuration);
            }
            
            function checkBlockStatus() {
                const blockUntil = localStorage.getItem('blockUntil');
                
                if (blockUntil && Date.now() < parseInt(blockUntil)) {
                    const remainingTime = parseInt(blockUntil) - Date.now();
                    blockAccount();
                    startBlockTimer(remainingTime);
                } else if (blockUntil) {
                    // Bloqueo expirado
                    localStorage.removeItem('blockUntil');
                    localStorage.removeItem('loginAttempts');
                    loginAttempts = 0;
                    isBlocked = false;
                }
            }
            
            function startBlockTimer(duration) {
                if (blockTimer) clearInterval(blockTimer);
                
                let timeLeft = duration;
                
                blockTimer = setInterval(function() {
                    timeLeft -= 1000;
                    
                    if (timeLeft <= 0) {
                        clearInterval(blockTimer);
                        unblockAccount();
                        return;
                    }
                    
                    const minutes = Math.floor(timeLeft / 60000);
                    const seconds = Math.floor((timeLeft % 60000) / 1000);
                    
                    blockCountdown.textContent = 
                        minutes.toString().padStart(2, '0') + ':' + 
                        seconds.toString().padStart(2, '0');
                }, 1000);
            }
            
            function unblockAccount() {
                isBlocked = false;
                loginAttempts = 0;
                localStorage.removeItem('blockUntil');
                localStorage.removeItem('loginAttempts');
                
                temporaryBlock.style.display = 'none';
                loginForm.style.display = 'block';
                attemptsWarning.style.display = 'none';
                recaptchaContainer.style.display = 'none';
                
                showSuccess('Tu cuenta ha sido desbloqueada. Puedes intentar iniciar sesión nuevamente.');
            }
            
            // Funciones auxiliares
            function isValidEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }
            
            function showErrorElement(element, messageElement, message) {
                element.style.display = 'flex';
                messageElement.textContent = message;
            }
            
            function showWarningElement(element, messageElement, message) {
                element.style.display = 'flex';
                element.style.color = '#f59e0b';
                messageElement.textContent = message;
            }
            
            function hideErrorElement(element) {
                element.style.display = 'none';
            }
            
            function showError(message) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'input-error';
                errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
                errorDiv.style.marginTop = '1rem';
                errorDiv.style.justifyContent = 'center';
                
                loginForm.insertBefore(errorDiv, submitBtn);
                
                // Animación de shake
                loginForm.classList.add('shake');
                setTimeout(() => loginForm.classList.remove('shake'), 500);
                
                // Auto-remover después de 5 segundos
                setTimeout(() => errorDiv.remove(), 5000);
            }
            
            function showWarning(message) {
                const warningDiv = document.createElement('div');
                warningDiv.className = 'attempts-warning';
                warningDiv.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${message}`;
                warningDiv.style.marginTop = '1rem';
                
                loginForm.insertBefore(warningDiv, submitBtn);
                
                // Auto-remover después de 5 segundos
                setTimeout(() => warningDiv.remove(), 5000);
            }
            
            function showSuccess(message) {
                const successDiv = document.createElement('div');
                successDiv.className = 'auth-status';
                successDiv.textContent = message;
                successDiv.style.marginTop = '1rem';
                
                loginForm.insertBefore(successDiv, submitBtn);
                
                // Auto-remover después de 5 segundos
                setTimeout(() => successDiv.remove(), 5000);
            }
            
            // Efecto de enfoque en inputs
            const formInputs = document.querySelectorAll('.form-input');
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.borderColor = 'var(--primary-purple)';
                });
                
                input.addEventListener('blur', function() {
                    if (!this.value.trim()) {
                        this.parentElement.style.borderColor = '#e5e7eb';
                    }
                });
            });
            
            // Efecto hover para el botón de submit
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
            
            // Prevenir autocompletado malicioso
            emailInput.setAttribute('autocomplete', 'username');
            passwordInput.setAttribute('autocomplete', 'current-password');
            
            // Limpiar localStorage al cerrar la pestaña
            window.addEventListener('beforeunload', function() {
                if (!isBlocked) {
                    localStorage.removeItem('loginAttempts');
                }
            });
            
            // Inicializar valor anterior del email
            if (emailInput) {
                emailInput.dataset.previousValue = emailInput.value;
            }
        });
    </script>
</body>
</html>