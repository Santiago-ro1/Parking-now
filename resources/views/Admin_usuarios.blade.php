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
    <title>Administrador - Usuarios</title>
    @vite(['resources/css/Admin_usuarios.css'])
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

                <a href="{{ route('Admin_Ingreso_salida') }}">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span>Ingresos y salidas</span>
                </a>

                <a href="{{ route('Admin_usuarios') }}" class="menu-activo">
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

<main class="main-usuarios">

    <div class="titulo-usuarios">
        <div>
            <h1>Gestión de usuarios</h1>
            <p>Administra los usuarios registrados en Parking-now.</p>
        </div>

        <button class="boton-agregar-usuario">
            <i class="fa-solid fa-user-plus"></i>
            Agregar usuario
        </button>
    </div>

    <section class="resumen-usuarios">

        <div class="tarjeta-usuario-resumen">
            <div class="icono-usuario-resumen icono-total-usuarios">
                <i class="fa-solid fa-users"></i>
            </div>
            <div>
                <p>Total de usuarios</p>
                <h2>1.248</h2>
                <span>Usuarios registrados</span>
            </div>
        </div>

        <div class="tarjeta-usuario-resumen">
            <div class="icono-usuario-resumen icono-activos-usuarios">
                <i class="fa-solid fa-user-check"></i>
            </div>
            <div>
                <p>Usuarios activos</p>
                <h2>1.180</h2>
                <span>Cuentas habilitadas</span>
            </div>
        </div>

        <div class="tarjeta-usuario-resumen">
            <div class="icono-usuario-resumen icono-inactivos-usuarios">
                <i class="fa-solid fa-user-xmark"></i>
            </div>
            <div>
                <p>Usuarios inactivos</p>
                <h2>68</h2>
                <span>Cuentas deshabilitadas</span>
            </div>
        </div>

        <div class="tarjeta-usuario-resumen">
            <div class="icono-usuario-resumen icono-nuevos-usuarios">
                <i class="fa-solid fa-user-plus"></i>
            </div>
            <div>
                <p>Nuevos usuarios</p>
                <h2>35</h2>
                <span>Registros recientes</span>
            </div>
        </div>

    </section>

    <section class="panel-usuarios">

        <div class="encabezado-usuarios">
            <div>
                <h2>Listado de usuarios</h2>
                <p>Consulta y administra la información de los usuarios.</p>
            </div>

            <button class="boton-exportar-usuarios">
                <i class="fa-solid fa-file-export"></i>
                Exportar
            </button>
        </div>

        <div class="filtros-usuarios">

            <div class="busqueda-usuarios">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar por nombre o documento...">
            </div>

            <select>
                <option value="">Todos los estados</option>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>

            <select>
                <option value="">Todos los géneros</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>

            <button class="boton-filtrar-usuarios">
                <i class="fa-solid fa-filter"></i>
                Filtrar
            </button>

        </div>

        <div class="tabla-usuarios-contenedor">

            <table class="tabla-usuarios">

                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Documento</th>
                        <th>Correo electrónico</th>
                        <th>Teléfono</th>
                        <th>Fecha de registro</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>
                            <div class="informacion-usuario-tabla">
                                <div class="avatar-usuario avatar-azul">JP</div>
                                <div>
                                    <strong>Juan Pérez</strong>
                                    <span>Usuario #1001</span>
                                </div>
                            </div>
                        </td>
                        <td>CC 1023456789</td>
                        <td>juanperez@gmail.com</td>
                        <td>300 456 7890</td>
                        <td>12/10/2026</td>
                        <td>
                            <span class="estado-usuario activo">Activo</span>
                        </td>
                        <td>
                            <div class="acciones-usuario">
                                <button title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button title="Editar usuario">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <button class="accion-desactivar" title="Desactivar usuario">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="informacion-usuario-tabla">
                                <div class="avatar-usuario avatar-verde">LG</div>
                                <div>
                                    <strong>Laura Gómez</strong>
                                    <span>Usuario #1002</span>
                                </div>
                            </div>
                        </td>
                        <td>CC 1034567890</td>
                        <td>lauragomez@gmail.com</td>
                        <td>310 234 5678</td>
                        <td>15/10/2026</td>
                        <td>
                            <span class="estado-usuario activo">Activo</span>
                        </td>
                        <td>
                            <div class="acciones-usuario">
                                <button title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button title="Editar usuario">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <button class="accion-desactivar" title="Desactivar usuario">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="informacion-usuario-tabla">
                                <div class="avatar-usuario avatar-morado">CR</div>
                                <div>
                                    <strong>Carlos Ramírez</strong>
                                    <span>Usuario #1003</span>
                                </div>
                            </div>
                        </td>
                        <td>CC 1012345678</td>
                        <td>carlosramirez@gmail.com</td>
                        <td>320 567 8901</td>
                        <td>20/10/2026</td>
                        <td>
                            <span class="estado-usuario inactivo">Inactivo</span>
                        </td>
                        <td>
                            <div class="acciones-usuario">
                                <button title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button title="Editar usuario">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <button class="accion-activar" title="Activar usuario">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="informacion-usuario-tabla">
                                <div class="avatar-usuario avatar-naranja">MR</div>
                                <div>
                                    <strong>María Rodríguez</strong>
                                    <span>Usuario #1004</span>
                                </div>
                            </div>
                        </td>
                        <td>CC 1028765432</td>
                        <td>mariarodriguez@gmail.com</td>
                        <td>301 678 9012</td>
                        <td>25/10/2026</td>
                        <td>
                            <span class="estado-usuario activo">Activo</span>
                        </td>
                        <td>
                            <div class="acciones-usuario">
                                <button title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button title="Editar usuario">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <button class="accion-desactivar" title="Desactivar usuario">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="informacion-usuario-tabla">
                                <div class="avatar-usuario avatar-azul">AT</div>
                                <div>
                                    <strong>Andrés Torres</strong>
                                    <span>Usuario #1005</span>
                                </div>
                            </div>
                        </td>
                        <td>CC 1009876543</td>
                        <td>andrestorres@gmail.com</td>
                        <td>315 789 0123</td>
                        <td>28/10/2026</td>
                        <td>
                            <span class="estado-usuario activo">Activo</span>
                        </td>
                        <td>
                            <div class="acciones-usuario">
                                <button title="Ver detalles">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button title="Editar usuario">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <button class="accion-desactivar" title="Desactivar usuario">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

        <div class="paginacion-usuarios">
            <span>Mostrando 1-5 de 1.248 usuarios</span>

            <div class="botones-paginacion-usuarios">
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