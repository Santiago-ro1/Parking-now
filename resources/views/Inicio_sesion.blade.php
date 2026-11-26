<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | Parking-now</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tipografía Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon y estilos -->
    <link rel="shortcut icon" href="{{ asset('images/LOGO1.1.png') }}" type="image/x-icon">
    @vite(['resources/css/inicio_sesion.css','resources/js/Inicio_sesion.js'])
</head>
<body>

    <main>
        <div class="login-container">
            <!-- Sección Izquierda -->
            <section class="left-panel">
                <div class="visual-showcase">
                    <div class="hero-logo-card">
                        <img src="{{ asset('images/imagen_inicio_sesion.png') }}" alt="inicio de sesión de Parking-now">
                    </div>
                    <h2>Bienvenido de nuevo</h2>
                    <p>Accede a tus proyectos y ubicaciones de forma segura.</p>
                </div>
            </section>

            <!-- Sección Derecha -->
            <section class="right-panel">
                <div class="form-wrapper">
                    <div class="form-header">
                        <img src="{{ asset('images/LOGO1.1.png') }}" alt="Logo Parking-now">
                        <h1>Iniciar Sesión</h1>
                        <p>Ingresa tus credenciales para acceder a tu cuenta</p>
                    </div>

                    <form action="#" method="POST">
                        <div class="input-group">
                            <label for="email">Correo electrónico</label>
                            <div class="input-field">
                                <i class="fa-regular fa-envelope left-icon"></i>
                                <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="password">Contraseña</label>
                            <div class="input-field">
                                <i class="fa-solid fa-lock left-icon"></i>
                                <input type="password" id="password" name="password" placeholder="••••••••" required>
                                <button type="button" class="toggle-password" onclick="togglePassword()" aria-label="Mostrar contraseña">
                                    <i class="fa-regular fa-eye" id="eye-icon"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-options">
                            <label class="remember-me">
                                <input type="checkbox" name="remember" checked>
                                <span>Recordarme</span>
                            </label>
                            <a href="{{ route('recuperar_contraseña') }}" class="forgot-link">¿Olvidaste tu contraseña?</a>
                        </div>

                        <button type="submit" class="btn-submit">Iniciar sesión</button>
                    </form>

                    <div class="divider">
                        <span>o continúa con</span>
                    </div>

                    <div class="social-login">
                        <button type="button" class="btn-social">
                            <i class="fa-brands fa-google"></i> Google
                        </button>
                        <button type="button" class="btn-social">
                            <i class="fa-brands fa-apple"></i> Apple
                        </button>
                    </div>

                    <p class="register-footer">
                        ¿No tienes una cuenta? <a href="{{ route('Login-usuario') }}">Regístrate</a>
                    </p>
                </div>
            </section>
        </div>
    </main>

    <footer id="contacto">
        <div class="contenido-footer">
            <div class="footer-logo">
                <img src="{{ asset('images/Logo_parkingnow.png') }}" alt="Parking-now">
                <p>Estaciona sin complicaciones.</p>
            </div>

            <div class="footer-columna">
                <h3>Parking-now</h3>
                <a href="#">Inicio</a>
                <a href="#servicios">Servicios</a>
                <a href="#tarifas">Tarifas</a>
            </div>

            <div class="footer-columna">
                <h3>Ayuda</h3>
                <a href="#">Preguntas frecuentes</a>
                <a href="#">Contacto</a>
                <a href="#">PQRS</a>
            </div>

            <div class="footer-columna">
                <h3>Síguenos</h3>
                <div class="redes">
                    <a href="https://www.instagram.com/parking.nowoficial/" target="_blank" rel="noopener noreferrer" aria-label="Instagram de Parking-now">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?fb_profile_edit_entry_point=%7B%22click_point%22%3A%22edit_profile_button%22%2C%22feature%22%3A%22profile_header%22%7D&id=61594867521056&sk=about" target="_blank" rel="noopener noreferrer" aria-label="Facebook de Parking-now">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2026 Parking-now. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Script para mostrar/ocultar contraseña -->
     <script src="../JavaScript/inicio_sesion.js"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>

</body>
</html>