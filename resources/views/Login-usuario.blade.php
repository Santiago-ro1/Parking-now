<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{('images/LOGO1.1.png')}}" type="image/x-icon">
    <title>Crear cuenta - Parking-now</title>
    @vite(['resources/css/login-usuario.css','resources/js/Login-usuario.js'])
</head>

<body>
    <main class="contenedor">

        <header class="encabezado">
        <a href="../index.html">
            <img src="../images/Logofsinfondo.png" alt="Logo-Parking-now" >
            </a>

        </header>
        <section class="registro">

            <div class="informacion">

                <img src="../images/carro11.jpg" alt="Parking">

                <h2>
                    Crea tu cuenta
                    <span>en Parking-now</span>
                </h2>
                <p>
                    Crea tu cuenta y disfruta de una forma rápida,
                    segura y sencilla de encontrar tu parqueadero.
                </p>

                <div class="beneficios">

                    <div class="beneficio">

                        <span>
                            <i class="fa-solid fa-location-dot"></i>
                        </span>

                        <p>Encuentra parqueaderos</p>

                    </div>
                    <div class="beneficio">

                        <span>
                            <i class="fa-solid fa-shield-halved"></i>
                        </span>

                        <p>Seguro y confiable</p>

                    </div>


                    <div class="beneficio">

                        <span>
                            <i class="fa-solid fa-bolt"></i>
                        </span>

                        <p>Reserva rápidamente</p>
                    </div>
                </div>

            </div>

            <div class="formulario">

                <h1>
                    Crear una nueva <span>cuenta</span>
                </h1>

                <p class="descripcion">
                    Completa tus datos para comenzar a utilizar Parking-now.
                </p>

                <form id="formularioRegistro">
                    
                    <div class="fila-campo">
                    <div class="campo">

                        <label for="nombre">
                            Nombre
                        </label>

                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            placeholder="Ingresa tu nombre"
                            required
                        >

                    </div>

                        <div class="campo">

                        <label for="nombre2">
                            Segundo nombre
                        </label>

                        <input
                            type="text"
                            id="nombre2"
                            name="nombre2"
                            placeholder="Segundo nombre"
                            required
                        >

                    </div>
                    </div>

                    <div class="fila-campo">
                    <div class="campo">

                        <label for="apellido">
                            Apellido
                        </label>
                        <input
                            type="text"
                            id="apellido"
                            name="apellido"
                            placeholder="Ingresa tu apellido"
                            required
                        >

                    </div>

                    <div class="campo">

                        <label for="apellido2">
                            Segundo apellido
                        </label>
                        <input
                            type="text"
                            id="apellido2"
                            name="apellido2"
                            placeholder="Segundo apellido"
                            required
                        >

                    </div>
                    </div>

                    <div class="fila-campo">
                    <div class="campo">
                        <label for="tipo-documento">
                            Tipo de documento:
                        </label>

                        <select
                            id="tipo-documento"
                            name="tipo_documento"
                            required
                        >

                            <option value="">
                                Seleccione una opción
                            </option>

                            <option value="cc">
                                Cédula de ciudadanía
                            </option>

                            <option value="ce">
                                Cédula de Extranjería
                            </option>

                            <option value="pasaporte">
                                Pasaporte
                            </option>

                        </select>
                    </div>

                    <div class="campo">
                        <label for="numero-documento">
                            Número de documento:
                        </label>

                        <input
                            type="text"
                            id="numero-documento"
                            name="numero_documento"
                            placeholder="Ej. 12345678"
                            required
                        >

                    </div>
                    </div>
                    
                    <div class="fila-campo">
                    <div class="campo">

                        <label for="fecha-nacimiento">
                            Fecha de nacimiento:
                        </label>
                        <input
                            type="date"
                            id="fecha-nacimiento"
                            name="fecha_nacimiento"
                            required
                        >

                    </div>

                    <div class="campo">
                        <label for="genero">Género</label>
                        <select name="genero" id="genero">
                            <option value="">Seleccione una opcion</option>
                            <option value="maculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="otro">Otro</option>
                            <option value="prefiero no decirlo">Prefiero no decirlo</option>
                        </select>
                        <input type="text" name="genero_otro" id="genero_otro" placeholder="Ingrese su Género" style="display: none;">
                    </div>
                    </div>

                    <div class="campo">
                        <label for="correo">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="correo"
                            name="correo"
                            placeholder="ejemplo@correo.com"
                            required
                        >

                    </div>
                    <div class="campo">

                        <label for="contraseña">
                            Contraseña
                        </label>
                        <div class="campo-contraseña">

                            <i class="fa-sharp fa-solid fa-lock"></i>

                            <input
                                type="password"
                                id="contraseña"
                                name="contraseña"
                                placeholder="Crea una contraseña"
                                required
                            >
                            <i
                                class="fa-solid fa-eye"
                                id="ojoContrasena">
                            </i>

                        </div>

                    </div>
                    <div class="campo">

                        <label for="confirmar-contraseña">
                            Confirmar contraseña
                        </label>

                        <div class="campo-contraseña">

                            <i class="fa-sharp fa-solid fa-lock"></i>

                            <input
                                type="password"
                                id="confirmar-contraseña"
                                name="confirmar_contraseña"
                                placeholder="Repite tu contraseña"
                                required
                            >
                            <i
                                class="fa-solid fa-eye"
                                id="ojoConfirmar">
                            </i>

                        </div>
                    </div>

                    <button type="submit">
                        Crear cuenta
                    </button>
                    <p class="ya-cuenta">
                        ¿Ya tienes una cuenta?
                        <a href="../Inicio_sesion.html">
                            Iniciar sesión
                        </a>

                    </p>

                </form>
            </div>

        </section>

    </main>
    <footer id="contacto">

        <div class="contenido-footer">

            <div class="footer-logo">

                <img src="../images/Logo_parkingnow.png" alt="Parking-now">

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

                    <a href="https://www.instagram.com/parking.nowoficial/" target="_blank" rel="noopener noreferrer">
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
    <script src="../Javascript/Login-usuario.js"></script>

</body>
</html>