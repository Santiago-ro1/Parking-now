<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{('images/LOGO1.1.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Administrador - Reservas</title>
    @vite(['resources/css/Admin_reservas.css'])
</head>
<body>
    <div class="dashboard">

        <aside class="barra-lateral">

            <div class="logo">
                <a href="{{ route('Index') }}">
                    <img src="{{('images/Logofsinfondo.png')}}" alt="Logo Parking-now">
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

                <a href="{{ route('Admin_Reservas') }}" class="menu-activo">
                    <i class="fa-regular fa-calendar"></i>
                    <span>Reservas</span>
                </a>

                <a href="{{ route('Admin_cajero') }}" >
                    <i class="fa-solid fa-user"></i>
                    <span>Cajero Conductor</span>
                </a>

                <a href="{{ route('Admin_Horario') }}" >
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


<main class="main-reservas">

    <section class="titulo-reservas">

        <div>
            <h2>Gestión de reservas</h2>
            <p>Consulta, organiza y administra las reservas de tu parqueadero.</p>
        </div>

        <button type="button" class="boton-exportar-reservas">
            <i class="fa-solid fa-download"></i>
            Exportar
        </button>

    </section>

    <section class="resumen-reservas">

        <article class="tarjeta-reserva-resumen">

            <div class="icono-resumen-reserva">
                <i class="fa-solid fa-calendar-check"></i>
            </div>

            <div>
                <p>Total de reservas</p>
                <h3>128</h3>
                <span>Reservas registradas</span>
            </div>

        </article>

        <article class="tarjeta-reserva-resumen">

            <div class="icono-resumen-reserva pendiente-reserva-icono">
                <i class="fa-solid fa-clock"></i>
            </div>

            <div>
                <p>Pendientes</p>
                <h3>18</h3>
                <span>Por confirmar o atender</span>
            </div>

        </article>

        <article class="tarjeta-reserva-resumen">

            <div class="icono-resumen-reserva activa-reserva-icono">
                <i class="fa-solid fa-car-side"></i>
            </div>

            <div>
                <p>Activas</p>
                <h3>12</h3>
                <span>Vehículos en el parqueadero</span>
            </div>

        </article>

        <article class="tarjeta-reserva-resumen">

            <div class="icono-resumen-reserva finalizada-reserva-icono">
                <i class="fa-solid fa-circle-check"></i>
            </div>

            <div>
                <p>Finalizadas</p>
                <h3>85</h3>
                <span>Reservas completadas</span>
            </div>

        </article>

    </section>

    <section class="panel-listado-reservas">

        <div class="encabezado-listado-reservas">

            <div>
                <h3>Listado de reservas</h3>
                <p>Consulta las reservas registradas en tu parqueadero.</p>
            </div>

        </div>

        <div class="filtros-reservas">

            <div class="busqueda-reservas">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar ID, usuario o placa...">
            </div>

            <select name="filtro-estado-reserva">
                <option value="">Todos los estados</option>
                <option value="pendiente">Pendiente</option>
                <option value="confirmada">Confirmada</option>
                <option value="activa">Activa</option>
                <option value="finalizada">Finalizada</option>
                <option value="cancelada">Cancelada</option>
            </select>

            <input type="date" name="filtro-fecha-reserva">

            <button type="button" class="boton-filtrar-reservas">
                <i class="fa-solid fa-filter"></i>
                Filtrar
            </button>

        </div>

        <div class="tabla-reservas-contenedor">

            <table class="tabla-reservas">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Vehículo</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Bahía</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td><strong>#1054</strong></td>

                        <td>
                            <div class="usuario-reserva-tabla">
                                <div class="avatar-reserva">SR</div>
                                <div>
                                    <strong>Santiago Ramírez</strong>
                                    <span>1023456789</span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="vehiculo-reserva-tabla">
                                <strong>ABC123</strong>
                                <span>Automóvil</span>
                            </div>
                        </td>

                        <td>22/11/2026</td>

                        <td>10:30 a. m.</td>

                        <td><span class="bahia-reserva">A-05</span></td>

                        <td><span class="estado-reserva-tabla confirmada">Confirmada</span></td>

                        <td>
                            <div class="acciones-reserva-tabla">
                                <button type="button" class="boton-ver-reserva" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" class="boton-mas-reserva" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td><strong>#1053</strong></td>

                        <td>
                            <div class="usuario-reserva-tabla">
                                <div class="avatar-reserva">VG</div>
                                <div>
                                    <strong>Valentina Gómez</strong>
                                    <span>1034567890</span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="vehiculo-reserva-tabla">
                                <strong>DEF456</strong>
                                <span>Automóvil</span>
                            </div>
                        </td>

                        <td>22/11/2026</td>

                        <td>11:15 a. m.</td>

                        <td><span class="bahia-reserva">B-12</span></td>

                        <td><span class="estado-reserva-tabla pendiente">Pendiente</span></td>

                        <td>
                            <div class="acciones-reserva-tabla">
                                <button type="button" class="boton-ver-reserva" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" class="boton-mas-reserva" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td><strong>#1052</strong></td>

                        <td>
                            <div class="usuario-reserva-tabla">
                                <div class="avatar-reserva">JP</div>
                                <div>
                                    <strong>Juan Pérez</strong>
                                    <span>1045678901</span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="vehiculo-reserva-tabla">
                                <strong>GHI789</strong>
                                <span>Motocicleta</span>
                            </div>
                        </td>

                        <td>22/11/2026</td>

                        <td>12:00 p. m.</td>

                        <td><span class="bahia-reserva">C-03</span></td>

                        <td><span class="estado-reserva-tabla activa">Activa</span></td>

                        <td>
                            <div class="acciones-reserva-tabla">
                                <button type="button" class="boton-ver-reserva" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" class="boton-mas-reserva" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td><strong>#1051</strong></td>

                        <td>
                            <div class="usuario-reserva-tabla">
                                <div class="avatar-reserva">LM</div>
                                <div>
                                    <strong>Laura Martínez</strong>
                                    <span>1056789012</span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="vehiculo-reserva-tabla">
                                <strong>JKL012</strong>
                                <span>Automóvil</span>
                            </div>
                        </td>

                        <td>22/11/2026</td>

                        <td>2:45 p. m.</td>

                        <td><span class="bahia-reserva">D-07</span></td>

                        <td><span class="estado-reserva-tabla finalizada">Finalizada</span></td>

                        <td>
                            <div class="acciones-reserva-tabla">
                                <button type="button" class="boton-ver-reserva" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" class="boton-mas-reserva" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td><strong>#1050</strong></td>

                        <td>
                            <div class="usuario-reserva-tabla">
                                <div class="avatar-reserva">AF</div>
                                <div>
                                    <strong>Andrés Fernández</strong>
                                    <span>1067890123</span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="vehiculo-reserva-tabla">
                                <strong>MNO345</strong>
                                <span>Automóvil</span>
                            </div>
                        </td>

                        <td>22/11/2026</td>

                        <td>4:20 p. m.</td>

                        <td><span class="bahia-reserva">E-09</span></td>

                        <td><span class="estado-reserva-tabla cancelada">Cancelada</span></td>

                        <td>
                            <div class="acciones-reserva-tabla">
                                <button type="button" class="boton-ver-reserva" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" class="boton-mas-reserva" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td><strong>#1049</strong></td>

                        <td>
                            <div class="usuario-reserva-tabla">
                                <div class="avatar-reserva">CT</div>
                                <div>
                                    <strong>Carlos Torres</strong>
                                    <span>1078901234</span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="vehiculo-reserva-tabla">
                                <strong>PQR678</strong>
                                <span>Automóvil</span>
                            </div>
                        </td>

                        <td>21/11/2026</td>

                        <td>8:00 a. m.</td>

                        <td><span class="bahia-reserva">A-08</span></td>

                        <td><span class="estado-reserva-tabla finalizada">Finalizada</span></td>

                        <td>
                            <div class="acciones-reserva-tabla">
                                <button type="button" class="boton-ver-reserva" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" class="boton-mas-reserva" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

        <div class="paginacion-reservas">

            <span>Mostrando 6 de 128 reservas</span>

            <div class="botones-paginacion-reservas">
                <button type="button" disabled>
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <button type="button" class="pagina-activa">1</button>
                <button type="button">2</button>
                <button type="button">3</button>
                <span>...</span>
                <button type="button">12</button>

                <button type="button">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

        </div>

    </section>

</main>

</body>
</html>