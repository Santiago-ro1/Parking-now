<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <title>Recuperar contraseña - Parking-now</title>

    <!-- Tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/LOGO1.1.png') }}" type="image/x-icon">
    @vite(['resources/css/cambiar_contraseña.css','resources/js/validacion-cambiar-contraseña.js'])
</head>
<body>

    <main class="contenedor">

        <!-- Logo -->
        <header class="encabezado">
            <a href="../index.html">
            <img src="{{ asset('images/Logofsinfondo.png') }}" alt="Logo de Parking_now">
            </a>
        </header>

        <!-- Contenido principal -->
         <section class="recuperacion">

            <div class="informacion">

                <div class="imagen-contenedor">
                    <img src="{{ asset('images/telefonoparking.jpg') }}" alt="Imagen">
                </div>

                <h2>
                    Recupera tu cuenta
                    <span>en un solo lugar</span>
                </h2>

                <p>
                    Recupera tu acceso y vuelve a disfrutar de todos
                    los servicios de Parking-now.
                </p>

                <div class="beneficios">

                    <div class="beneficio">
                        <span><i class="fa-sharp fa-solid fa-shield-halved"></i></span>
                        <p>Seguro</p>
                    </div>

                    <div class="beneficio">
                        <span><i class="fa-solid fa-bolt"></i></span>
                        
                        <p>Rápido</p>
                    </div>

                    <div class="beneficio">
                        <span><i class="fa-regular fa-clock"></i></span>
                        <p>Disponible</p>
                    </div>
                </div>
            </div>

            <!-- Formulario -->
            <div class="formulario">

    <a href="{{ route('Index') }}" class="volver">
        <span class="flecha"><i class="fa-solid fa-arrow-left"></i></span>
        <span class="texto">Volver al inicio</span> 
    </a>

    <h1>
        Crear una nueva <span>contraseña</span>
    </h1>

    <p class="descripcion">
        crea una nueva contraseña para proteger tu cuenta.
    </p>

    <form id="formularioContrasena">

        <div class="campo">
            <i class="fa-solid fa-lock"></i>

            <input 
                type="password" 
                placeholder="Nueva contraseña" 
                id="nuevaContrasena"
            >

            <i class="fa-solid fa-eye" id="ojoNueva"></i>
        </div>

        <div class="campo">
            <i class="fa-solid fa-lock"></i>

            <input 
                type="password" 
                placeholder="Confirmar contraseña" 
                id="confirmarContrasena"
            >
            <i class="fa-solid fa-eye" id="ojoConfirmar"></i>

            
        </div>

        <button type="submit">Cambiar contraseña</button>

    </form>

    <a href="{{ route('Inicio_sesion') }} class="volver-login">
        <i class="fa-solid fa-arrow-left"></i>
        Volver al inicio de sesión
    </a>

</div>


         </section>
    </main>
     <footer id="contacto">

        <div class="contenido-footer">

            <div class="footer-logo">

                <img src="{{ asset('images/Logo_parkingnow.png') }}" alt="Parking-now">

                <p>
                    Estaciona sin complicaciones.
                </p>

            </div>


            <div class="footer-columna">

                <h3>
                    Parking-now
                </h3>

                <a href="#">
                    Inicio
                </a>

                <a href="#servicios">
                    Servicios
                </a>

                <a href="#tarifas">
                    Tarifas
                </a>

            </div>


            <div class="footer-columna">

                <h3>
                    Ayuda
                </h3>

                <a href="#">
                    Preguntas frecuentes
                </a>

                <a href="#">
                    Contacto
                </a>

                <a href="#">
                    PQRS
                </a>

            </div>


            <div class="footer-columna">

                <h3>
                    Síguenos
                </h3>

                <div class="redes">

                    <a href="https://www.instagram.com/parking.nowoficial/" target="_blank" rel="noopener neroferrer">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="https://www.facebook.com/profile.php?fb_profile_edit_entry_point=%7B%22click_point%22%3A%22edit_profile_button%22%2C%22feature%22%3A%22profile_header%22%7D&id=61594867521056&sk=about" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>

            </div>

        </div>


        <div class="copyright">

            <p>
                © 2026 Parking-now. Todos los derechos reservados.
            </p>

        </div>

    </footer>
    
</body>
</html>