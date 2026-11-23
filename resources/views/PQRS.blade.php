<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../CSS/PQRS.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="/Index.html" class="logo-link"><img src="/images/Logo_parkingnow.png" alt="" class="Parking-now"></a>
        <div class="right">
            <div class="notificacion">
                <i class="fa-solid fa-bell"></i>
                <span class="insignia">2</span>
                <div class="panel-notificaciones oculto">
                    <h4>Notificaciones</h4>
                    <ul>
                        <li class="notif-item">
                            <p class="notif-titulo">Reserva Confirmada</p>
                            <p class="notif-texto">Tu reserva en parqueadero en calle 68</p>
                        </li>
                        <li class="notif-item">
                            <p class="notif-titulo">Recordatorio</p>
                            <p class="notif-texto">Tu reserva termina en 30 minutos</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="perfil">
                <div class="avatar-initials">CM</div>
                <div class="texto-perfil">
                    <span class="nombre">Cristian Moreno</span>
                    <span class="rol">Cliente </span>                    
                </div>
                <i class="fa-solid fa-chevron-down"></i>
                <div class="panel-sesion oculto">
                    <ul>
                        <li class="perfil-button">
                            <a href="/Perfil-usuario.html" class="perfil-texto"><p>Mi cuenta <i class="fa-solid fa-circle-user"></i></p></a>
                        </li>
                        <li class="perfil-button">
                            <a href="/Login-usuario.html" class="perfil-texto"><p>Cerrar Sesion <i class="fa-solid fa-arrow-right-from-bracket"></i></p></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="mid">
        <aside class="sidebar">
            <ul>
                <li><button class="nav" onclick="window.location.href='/Dashboard_usuario.html'">Inicio</button></li>
                <li><button class="nav">Mis reservas</button></li>
                <li><button class="nav">Convenio</button></li>
                <li><button class="nav activo">Mi perfil</button></li>
                
            </ul>
            <div class="sidebar-footer">
                <img src="../Imagenes/Sidebarsinfondo.png" alt="" class="ciudad">
                <p class="text-footer">Tu parqueadero ideal,</p>
                <p style="color: #00CFE8;" class="text-footer">siempre cerca</p>
            </div>
        </aside>
        <!-- PQRS -->
        <main class="inicio">
            <div class="principal">
                <div class="saludo">
                    <div class="saludo_texto">
                        <h1><i class="fa-solid fa-headset"></i> PQRS</h1>
                        <h2> Cuentanos tus quejas o reclamos</h2>
                    </div>
                </div>
                <div class="location">
                    <div class="Disponibilidad">
                        <form action="" novalidate id="form_pqrs">
                            <div class="form_arriba">
                                <div class="form_izquierda">
                                    <div class="input-group">
                                        <label for="tipo-solicitud">Tipo de solicitud</label><br>
                                        <select name="tipo-solicitud" id="tipo-solicitud" required>
                                            <option value="" disabled selected>Selecciona un Tipo</option>
                                            <option value="Peticion">Peticion</option>
                                            <option value="Queja">Queja</option>
                                            <option value="Reclamo">Reclamo</option>
                                            <option value="solicitud">solicitud</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <label for="Reserva_R">Reserva relacionada <span style="font-size: 12px;">(Opcional)</span></label>
                                        <select name="Reserva_R" id="Reserva_R">
                                            <option value="" disabled selected>Selecciona una reserva</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form_derecha">
                                    <div class="input-group">
                                        <label for=""> Asunto</label>
                                        <input type="text" placeholder="Escriba su asunto brevemente" maxlength="50">
                                    </div>
                                </div>
                            </div>
                            <div class="form_abajo">
                                <div class="input-group">
                                    <label for="Descripcion">Describa su problema</label><br>
                                    <textarea name="Descripcion" id="Descripcion" placeholder="Escriba aqui" class="textarea"></textarea>
                                    <small id="contador-caracteres" style="text-align: right; color: #666; font-size: 12px;">0 / 500</small>
                                </div>
                                <button class="btn-buscar" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
        </main>
    </div>
        
    <script src="../js/PQRS.js"></script>
    <script src="../js/Perfil-usuario.js"></script>

    <footer id="contacto">

        <div class="contenido-footer">

            <div class="footer-logo">

                <img src="images/Logo_parkingnow.png" alt="Parking-now">

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

                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-x-twitter"></i>
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