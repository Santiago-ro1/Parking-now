<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/LOGO1.1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Administrador - Horario</title>
    @vite(['resources/css/Admin_Horario.css'])
</head>
<body>
    <div class="dashboard">

        <aside class="barra-lateral">

            <div class="logo">
                <a href="{{ route('Index') }}">
                    <img src="{{ asset('images/Logofsinfondo.png') }}" alt="Logo Parking-now">
                </a>
            </div>

            <nav class="menu">

                <a href="{{ route('Administrador') }}">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('Admin_Parqueadero') }}" >
                    <i class="fa-solid fa-car"></i>
                    <span>Parqueadero</span>
                    <i class="fa-solid fa-chevron-right flecha"></i>
                </a>

                <a href="{{ route('Admin_Reservas') }}" >
                    <i class="fa-regular fa-calendar"></i>
                    <span>Reservas</span>
                </a>

                <a href="{{ route('Admin_cajero') }}" >
                    <i class="fa-solid fa-user"></i>
                    <span>Cajero Conductor</span>
                </a>

                <a href="{{ route('Admin_Horario') }}" class="menu-activo">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Horario</span>
                </a>

                <a href="{{ route('Admin_Ingreso_salida') }}">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span>Ingresos y salidas</span>
                </a>

                <a href="{{ route('Admin_usuarios') }}">
                    <i class="fa-solid fa-users"></i>
                    <span>Usuarios</span>
                </a>

                <a href="#">
                    <i class="fa-solid fa-chart-column"></i>
                    <span>Reportes</span>
                </a>

                <a href="#">
                    <i class="fa-regular fa-messages"></i>
                    <span>PQRS</span>
                </a>

                <a href="#">
                    <i class="fa-solid fa-handshake"></i>
                    <span>Convenios</span>
                </a>

                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span>Configuración</span>
                </a>

            </nav>

            <div class="cerrar-sesion">
                <a href="{{ route('Index') }}">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Cerrar sesión</span>
                </a>
            </div>

            </nav>

            <div class="cerrar-sesion">
                <a href="../Index.html">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Cerrar sesión</span>
                </a>
            </div>

        </aside>

        <div class="contenido-dashboard">

            <header class="encabezado-dashboard">

                <button type="button" class="boton-menu">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="saludo">
                    <h1>Hola, Administrador</h1>
                    <p>Bienvenido al panel de administración</p>
                </div>

                <div class="acciones-header">

                    <button type="button" class="notificaciones">
                        <i class="fa-regular fa-bell"></i>
                        <span class="punto-notificacion"></span>
                    </button>

                    <div class="usuario-header">

                        <div class="foto-usuario">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <div class="informacion-usuario">
                            <strong>Administrador</strong>
                            <span>Administrador</span>
                        </div>

                        <i class="fa-solid fa-chevron-down"></i>

                    </div>

                </div>

            </header>

<main class="main-horarios">

    <section class="titulo-horarios">

        <div>
            <h2>Gestión de horarios</h2>
            <p>Configura los días y horarios de atención de tu parqueadero.</p>
        </div>

        <button type="button" class="boton-editar-horario">
            <i class="fa-solid fa-pen"></i>
            Editar horarios
        </button>

    </section>

    <section class="resumen-horarios">

        <article class="tarjeta-horario-resumen">

            <div class="icono-horario-resumen">
                <i class="fa-regular fa-clock"></i>
            </div>

            <div>
                <p>Horario habitual</p>
                <h3>6:00 a. m. - 10:00 p. m.</h3>
                <span>Horario de funcionamiento</span>
            </div>

        </article>

        <article class="tarjeta-horario-resumen">

            <div class="icono-horario-resumen horario-abierto-icono">
                <i class="fa-solid fa-door-open"></i>
            </div>

            <div>
                <p>Días de atención</p>
                <h3>6 días</h3>
                <span>De lunes a sábado</span>
            </div>

        </article>

        <article class="tarjeta-horario-resumen">

            <div class="icono-horario-resumen horario-cerrado-icono">
                <i class="fa-solid fa-calendar-xmark"></i>
            </div>

            <div>
                <p>Día de descanso</p>
                <h3>Domingo</h3>
                <span>No se presta servicio</span>
            </div>

        </article>

    </section>

    <section class="panel-horario-semanal">

        <div class="encabezado-horario-panel">

            <div>
                <h3>Horario semanal</h3>
                <p>Horario establecido para cada día de la semana.</p>
            </div>

            <span class="estado-horario-configurado">
                <i class="fa-solid fa-circle-check"></i>
                Configurado
            </span>

        </div>

        <div class="lista-horario-semanal">

            <article class="dia-horario">

                <div class="informacion-dia">
                    <div class="icono-dia-horario">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div>
                        <strong>Lunes</strong>
                        <span>Inicio de semana</span>
                    </div>
                </div>

                <div class="horas-dia">
                    <span class="hora-apertura">6:00 a. m.</span>
                    <i class="fa-solid fa-arrow-right"></i>
                    <span class="hora-cierre">10:00 p. m.</span>
                </div>

                <span class="etiqueta-dia-abierto">Abierto</span>

            </article>

            <article class="dia-horario">

                <div class="informacion-dia">
                    <div class="icono-dia-horario">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div>
                        <strong>Martes</strong>
                        <span>Horario habitual</span>
                    </div>
                </div>

                <div class="horas-dia">
                    <span class="hora-apertura">6:00 a. m.</span>
                    <i class="fa-solid fa-arrow-right"></i>
                    <span class="hora-cierre">10:00 p. m.</span>
                </div>

                <span class="etiqueta-dia-abierto">Abierto</span>

            </article>

            <article class="dia-horario">

                <div class="informacion-dia">
                    <div class="icono-dia-horario">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div>
                        <strong>Miércoles</strong>
                        <span>Horario habitual</span>
                    </div>
                </div>

                <div class="horas-dia">
                    <span class="hora-apertura">6:00 a. m.</span>
                    <i class="fa-solid fa-arrow-right"></i>
                    <span class="hora-cierre">10:00 p. m.</span>
                </div>

                <span class="etiqueta-dia-abierto">Abierto</span>

            </article>

            <article class="dia-horario">

                <div class="informacion-dia">
                    <div class="icono-dia-horario">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div>
                        <strong>Jueves</strong>
                        <span>Horario habitual</span>
                    </div>
                </div>

                <div class="horas-dia">
                    <span class="hora-apertura">6:00 a. m.</span>
                    <i class="fa-solid fa-arrow-right"></i>
                    <span class="hora-cierre">10:00 p. m.</span>
                </div>

                <span class="etiqueta-dia-abierto">Abierto</span>

            </article>

            <article class="dia-horario">

                <div class="informacion-dia">
                    <div class="icono-dia-horario">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div>
                        <strong>Viernes</strong>
                        <span>Horario habitual</span>
                    </div>
                </div>

                <div class="horas-dia">
                    <span class="hora-apertura">6:00 a. m.</span>
                    <i class="fa-solid fa-arrow-right"></i>
                    <span class="hora-cierre">10:00 p. m.</span>
                </div>

                <span class="etiqueta-dia-abierto">Abierto</span>

            </article>

            <article class="dia-horario">

                <div class="informacion-dia">
                    <div class="icono-dia-horario">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div>
                        <strong>Sábado</strong>
                        <span>Horario habitual</span>
                    </div>
                </div>

                <div class="horas-dia">
                    <span class="hora-apertura">7:00 a. m.</span>
                    <i class="fa-solid fa-arrow-right"></i>
                    <span class="hora-cierre">8:00 p. m.</span>
                </div>

                <span class="etiqueta-dia-abierto">Abierto</span>

            </article>

            <article class="dia-horario dia-cerrado">

                <div class="informacion-dia">
                    <div class="icono-dia-horario">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div>
                        <strong>Domingo</strong>
                        <span>Día de descanso</span>
                    </div>
                </div>

                <div class="horas-dia">
                    <span class="texto-cerrado">Sin horario</span>
                </div>

                <span class="etiqueta-dia-cerrado">Cerrado</span>

            </article>

        </div>

    </section>

    <section class="panel-excepciones-horario">

        <div class="encabezado-excepciones">

            <div>
                <h3>Excepciones de horario</h3>
                <p>Gestiona cierres y horarios especiales.</p>
            </div>

            <button type="button" class="boton-agregar-excepcion">
                <i class="fa-solid fa-plus"></i>
                Agregar excepción
            </button>

        </div>

        <div class="lista-excepciones">

            <article class="excepcion-horario">

                <div class="icono-excepcion">
                    <i class="fa-solid fa-calendar-xmark"></i>
                </div>

                <div class="informacion-excepcion">
                    <strong>Festivo - Día de cierre</strong>
                    <span>25 de diciembre de 2026</span>
                    <small>El parqueadero permanecerá cerrado.</small>
                </div>

                <span class="etiqueta-excepcion">Cierre</span>

            </article>

            <article class="excepcion-horario">

                <div class="icono-excepcion especial">
                    <i class="fa-solid fa-clock"></i>
                </div>

                <div class="informacion-excepcion">
                    <strong>Horario especial</strong>
                    <span>24 de diciembre de 2026</span>
                    <small>Atención de 6:00 a. m. a 6:00 p. m.</small>
                </div>

                <span class="etiqueta-excepcion especial">Especial</span>

            </article>

        </div>

    </section>

    <section class="nota-horarios">

        <div class="icono-nota-horarios">
            <i class="fa-solid fa-circle-info"></i>
        </div>

        <div>
            <strong>Importante</strong>
            <p>
                Los horarios configurados determinan los periodos en los que
                los usuarios pueden consultar y realizar reservas en tu parqueadero.
                Las excepciones permiten modificar temporalmente el horario habitual.
            </p>
        </div>

    </section>

</main>

</body>
</html>