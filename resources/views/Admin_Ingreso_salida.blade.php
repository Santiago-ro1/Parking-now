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
    <title>Administrador - Ingresos y salidas</title>
    @vite(['resources/css/Admin_Ingreso_salida.css'])
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

                <a href="{{ route('Admin_Reservas') }}" >
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

                <a href="{{ route('Admin_Ingreso_salida') }}" class="menu-activo">
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

                    <h1>
                        Hola, Administrador
                    </h1>

                    <p>
                        Bienvenido al panel de administración
                    </p>

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

                            <strong>
                                Administrador
                            </strong>

                            <span>
                                Administrador
                            </span>

                        </div>

                        <i class="fa-solid fa-chevron-down"></i>

                    </div>

                </div>

            </header>

<main class="main-movimientos">

    <div class="titulo-movimientos">
        <div>
            <h1>Ingresos y salidas</h1>
            <p>Controla los movimientos de los vehículos en el parqueadero.</p>
        </div>

        <button class="boton-registrar-ingreso">
            <i class="fa-solid fa-plus"></i>
            Registrar ingreso
        </button>
    </div>

    <section class="resumen-movimientos">

        <div class="tarjeta-movimiento-resumen">
            <div class="icono-movimiento icono-ingresos">
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </div>
            <div>
                <p>Ingresos de hoy</p>
                <h2>48</h2>
                <span>Vehículos registrados</span>
            </div>
        </div>

        <div class="tarjeta-movimiento-resumen">
            <div class="icono-movimiento icono-salidas">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </div>
            <div>
                <p>Salidas de hoy</p>
                <h2>32</h2>
                <span>Vehículos que salieron</span>
            </div>
        </div>

        <div class="tarjeta-movimiento-resumen">
            <div class="icono-movimiento icono-dentro">
                <i class="fa-solid fa-car"></i>
            </div>
            <div>
                <p>Vehículos dentro</p>
                <h2>16</h2>
                <span>Actualmente en el parqueadero</span>
            </div>
        </div>

        <div class="tarjeta-movimiento-resumen">
            <div class="icono-movimiento icono-tiempo">
                <i class="fa-regular fa-clock"></i>
            </div>
            <div>
                <p>Tiempo promedio</p>
                <h2>2h 35m</h2>
                <span>Duración de permanencia</span>
            </div>
        </div>

    </section>

    <section class="panel-movimientos">

        <div class="encabezado-movimientos">
            <div>
                <h2>Registro de movimientos</h2>
                <p>Consulta las entradas y salidas de los vehículos.</p>
            </div>

            <button class="boton-exportar-movimientos">
                <i class="fa-solid fa-file-export"></i>
                Exportar
            </button>
        </div>

        <div class="filtros-movimientos">

            <div class="busqueda-movimientos">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar por placa o conductor...">
            </div>

            <select>
                <option value="">Todos los movimientos</option>
                <option value="ingreso">Ingresos</option>
                <option value="salida">Salidas</option>
            </select>

            <select>
                <option value="">Todos los estados</option>
                <option value="dentro">Dentro del parqueadero</option>
                <option value="finalizado">Finalizado</option>
                <option value="pendiente">Pendiente de pago</option>
            </select>

            <input type="date" class="fecha-movimientos">

            <button class="boton-filtrar-movimientos">
                <i class="fa-solid fa-filter"></i>
                Filtrar
            </button>

        </div>

        <div class="tabla-movimientos-contenedor">
            <table class="tabla-movimientos">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Vehículo</th>
                        <th>Conductor</th>
                        <th>Bahía</th>
                        <th>Hora de entrada</th>
                        <th>Hora de salida</th>
                        <th>Tiempo</th>
                        <th>Valor</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>#MOV-001</td>
                        <td>
                            <div class="vehiculo-movimiento">
                                <i class="fa-solid fa-car"></i>
                                <strong>ABC123</strong>
                            </div>
                        </td>
                        <td>
                            <div class="conductor-movimiento">
                                <strong>Juan Pérez</strong>
                                <span>CC 1023456789</span>
                            </div>
                        </td>
                        <td><span class="bahia-movimiento">B-04</span></td>
                        <td>08:15 a. m.</td>
                        <td>--</td>
                        <td>2h 10m</td>
                        <td>Por calcular</td>
                        <td>
                            <span class="estado-movimiento dentro">
                                Dentro
                            </span>
                        </td>
                        <td>
                            <div class="acciones-movimiento">
                                <button title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="accion-salida" title="Registrar salida">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#MOV-002</td>
                        <td>
                            <div class="vehiculo-movimiento">
                                <i class="fa-solid fa-car"></i>
                                <strong>XYZ789</strong>
                            </div>
                        </td>
                        <td>
                            <div class="conductor-movimiento">
                                <strong>Laura Gómez</strong>
                                <span>CC 1034567890</span>
                            </div>
                        </td>
                        <td><span class="bahia-movimiento">A-02</span></td>
                        <td>07:30 a. m.</td>
                        <td>09:45 a. m.</td>
                        <td>2h 15m</td>
                        <td>$8.000</td>
                        <td>
                            <span class="estado-movimiento finalizado">
                                Finalizado
                            </span>
                        </td>
                        <td>
                            <div class="acciones-movimiento">
                                <button title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#MOV-003</td>
                        <td>
                            <div class="vehiculo-movimiento">
                                <i class="fa-solid fa-motorcycle"></i>
                                <strong>DEF456</strong>
                            </div>
                        </td>
                        <td>
                            <div class="conductor-movimiento">
                                <strong>Carlos Ramírez</strong>
                                <span>CC 1012345678</span>
                            </div>
                        </td>
                        <td><span class="bahia-movimiento">M-01</span></td>
                        <td>09:10 a. m.</td>
                        <td>--</td>
                        <td>1h 15m</td>
                        <td>Por calcular</td>
                        <td>
                            <span class="estado-movimiento dentro">
                                Dentro
                            </span>
                        </td>
                        <td>
                            <div class="acciones-movimiento">
                                <button title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="accion-salida" title="Registrar salida">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#MOV-004</td>
                        <td>
                            <div class="vehiculo-movimiento">
                                <i class="fa-solid fa-car"></i>
                                <strong>GHI321</strong>
                            </div>
                        </td>
                        <td>
                            <div class="conductor-movimiento">
                                <strong>Andrés Torres</strong>
                                <span>CC 1009876543</span>
                            </div>
                        </td>
                        <td><span class="bahia-movimiento">B-08</span></td>
                        <td>06:45 a. m.</td>
                        <td>08:20 a. m.</td>
                        <td>1h 35m</td>
                        <td>$6.500</td>
                        <td>
                            <span class="estado-movimiento finalizado">
                                Finalizado
                            </span>
                        </td>
                        <td>
                            <div class="acciones-movimiento">
                                <button title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#MOV-005</td>
                        <td>
                            <div class="vehiculo-movimiento">
                                <i class="fa-solid fa-car"></i>
                                <strong>JKL654</strong>
                            </div>
                        </td>
                        <td>
                            <div class="conductor-movimiento">
                                <strong>María Rodríguez</strong>
                                <span>CC 1028765432</span>
                            </div>
                        </td>
                        <td><span class="bahia-movimiento">A-05</span></td>
                        <td>10:00 a. m.</td>
                        <td>--</td>
                        <td>25 min</td>
                        <td>Pendiente</td>
                        <td>
                            <span class="estado-movimiento dentro">
                                Dentro
                            </span>
                        </td>
                        <td>
                            <div class="acciones-movimiento">
                                <button title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="accion-salida" title="Registrar salida">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>

        <div class="paginacion-movimientos">
            <span>Mostrando 1-5 de 48 movimientos</span>

            <div class="botones-paginacion-movimientos">
                <button disabled>
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="pagina-activa">1</button>
                <button>2</button>
                <button>3</button>
                <button>
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

    </section>

</main>
    
</body>
</html>