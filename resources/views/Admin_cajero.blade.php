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
    <title>Administrador - cajero conductor</title>
    @vite(['resources/css/Admin_cajero.css'])

</head>
<body>
    <div class="dashboard">

        <aside class="barra-lateral">

            <div class="logo">
                <a href="{{ route('Index') }}">
                    <img src="{{ asset('images/Logofsinfondo.png')}}" alt="Logo Parking-now">
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

                <a href="{{ route('Admin_cajero') }}" class="menu-activo">
                    <i class="fa-solid fa-user"></i>
                    <span>Cajero Conductor</span>
                </a>

                <a href="{{ route('Admin_Horario') }}">
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

<main class="main-empleados">

    <section class="titulo-empleados">

        <div>
            <h2>Gestión de cajeros y conductores</h2>
            <p>Administra el personal vinculado a tu parqueadero.</p>
        </div>

        <button type="button" class="boton-agregar-empleado">
            <i class="fa-solid fa-user-plus"></i>
            Agregar empleado
        </button>

    </section>

    <section class="resumen-empleados">

        <article class="tarjeta-empleado-resumen">

            <div class="icono-empleado-resumen">
                <i class="fa-solid fa-users"></i>
            </div>

            <div>
                <p>Total de empleados</p>
                <h3>12</h3>
                <span>Personal registrado</span>
            </div>

        </article>

        <article class="tarjeta-empleado-resumen">

            <div class="icono-empleado-resumen activo-empleado-icono">
                <i class="fa-solid fa-user-check"></i>
            </div>

            <div>
                <p>Empleados activos</p>
                <h3>10</h3>
                <span>Actualmente vinculados</span>
            </div>

        </article>

        <article class="tarjeta-empleado-resumen">

            <div class="icono-empleado-resumen cajero-empleado-icono">
                <i class="fa-solid fa-cash-register"></i>
            </div>

            <div>
                <p>Cajeros</p>
                <h3>6</h3>
                <span>Personal de caja</span>
            </div>

        </article>

        <article class="tarjeta-empleado-resumen">

            <div class="icono-empleado-resumen conductor-empleado-icono">
                <i class="fa-solid fa-car"></i>
            </div>

            <div>
                <p>Conductores</p>
                <h3>4</h3>
                <span>Personal de movilidad</span>
            </div>

        </article>

    </section>

    <section class="panel-listado-empleados">

        <div class="encabezado-listado-empleados">

            <div>
                <h3>Listado de empleados</h3>
                <p>Consulta y administra el personal de tu parqueadero.</p>
            </div>

        </div>

        <div class="filtros-empleados">

            <div class="busqueda-empleados">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar nombre o documento...">
            </div>

            <select name="filtro-cargo">
                <option value="">Todos los cargos</option>
                <option value="cajero">Cajero</option>
                <option value="conductor">Conductor</option>
            </select>

            <select name="filtro-estado-empleado">
                <option value="">Todos los estados</option>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>

            <button type="button" class="boton-filtrar-empleados">
                <i class="fa-solid fa-filter"></i>
                Filtrar
            </button>

        </div>

        <div class="tabla-empleados-contenedor">

            <table class="tabla-empleados">

                <thead>

                    <tr>
                        <th>Empleado</th>
                        <th>Documento</th>
                        <th>Cargo</th>
                        <th>Fecha de ingreso</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>
                            <div class="informacion-empleado-tabla">
                                <div class="avatar-empleado">JM</div>
                                <div>
                                    <strong>José Martínez</strong>
                                    <span>jose.martinez@email.com</span>
                                </div>
                            </div>
                        </td>

                        <td>1023456789</td>

                        <td>
                            <span class="cargo-empleado cajero">Cajero</span>
                        </td>

                        <td>12/03/2026</td>

                        <td>
                            <span class="estado-empleado activo">Activo</span>
                        </td>

                        <td>
                            <div class="acciones-empleado-tabla">
                                <button type="button" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" title="Editar empleado">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td>
                            <div class="informacion-empleado-tabla">
                                <div class="avatar-empleado">CR</div>
                                <div>
                                    <strong>Carlos Rodríguez</strong>
                                    <span>carlos.rodriguez@email.com</span>
                                </div>
                            </div>
                        </td>

                        <td>1034567890</td>

                        <td>
                            <span class="cargo-empleado conductor">Conductor</span>
                        </td>

                        <td>18/04/2026</td>

                        <td>
                            <span class="estado-empleado activo">Activo</span>
                        </td>

                        <td>
                            <div class="acciones-empleado-tabla">
                                <button type="button" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" title="Editar empleado">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td>
                            <div class="informacion-empleado-tabla">
                                <div class="avatar-empleado">LV</div>
                                <div>
                                    <strong>Laura Vargas</strong>
                                    <span>laura.vargas@email.com</span>
                                </div>
                            </div>
                        </td>

                        <td>1045678901</td>

                        <td>
                            <span class="cargo-empleado cajero">Cajero</span>
                        </td>

                        <td>05/05/2026</td>

                        <td>
                            <span class="estado-empleado activo">Activo</span>
                        </td>

                        <td>
                            <div class="acciones-empleado-tabla">
                                <button type="button" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" title="Editar empleado">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td>
                            <div class="informacion-empleado-tabla">
                                <div class="avatar-empleado">AM</div>
                                <div>
                                    <strong>Andrés Moreno</strong>
                                    <span>andres.moreno@email.com</span>
                                </div>
                            </div>
                        </td>

                        <td>1056789012</td>

                        <td>
                            <span class="cargo-empleado conductor">Conductor</span>
                        </td>

                        <td>20/06/2026</td>

                        <td>
                            <span class="estado-empleado inactivo">Inactivo</span>
                        </td>

                        <td>
                            <div class="acciones-empleado-tabla">
                                <button type="button" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" title="Editar empleado">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td>
                            <div class="informacion-empleado-tabla">
                                <div class="avatar-empleado">SP</div>
                                <div>
                                    <strong>Sofía Pérez</strong>
                                    <span>sofia.perez@email.com</span>
                                </div>
                            </div>
                        </td>

                        <td>1067890123</td>

                        <td>
                            <span class="cargo-empleado cajero">Cajero</span>
                        </td>

                        <td>15/07/2026</td>

                        <td>
                            <span class="estado-empleado activo">Activo</span>
                        </td>

                        <td>
                            <div class="acciones-empleado-tabla">
                                <button type="button" title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button type="button" title="Editar empleado">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" title="Más opciones">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                            </div>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

        <div class="paginacion-empleados">

            <span>Mostrando 5 de 12 empleados</span>

            <div class="botones-paginacion-empleados">

                <button type="button" disabled>
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <button type="button" class="pagina-activa">1</button>
                <button type="button">2</button>

                <button type="button">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>

        </div>

    </section>

</main>

</body>
</html>