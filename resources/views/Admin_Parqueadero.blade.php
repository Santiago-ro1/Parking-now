
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{('images/LOGO1.1.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Administrador - Parqueadero</title>
    @vite(['resources/css/Admin_Parqueadero.css'])
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

                <a href="{{ route('Admin_Parqueadero') }}" class="manu-activo">
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

            <main class="main-parqueadero">

                <section class="titulo-parqueadero">

                    <div>
                        <h2>Gestión del parqueadero</h2>
                        <p>Administra la información, los espacios y las tarifas de tu parqueadero.</p>
                    </div>

                    <button type="button" class="boton-editar-parqueadero">
                        <i class="fa-solid fa-pen"></i>
                        Editar parqueadero
                    </button>

                </section>

                <section class="resumen-parqueadero">

                    <article class="tarjeta-parqueadero">

                        <div class="icono-tarjeta-parqueadero">
                            <i class="fa-solid fa-square-parking"></i>
                        </div>

                        <div class="informacion-tarjeta-parqueadero">
                            <p>Total de bahías</p>
                            <h3>50</h3>
                            <span>Capacidad del parqueadero</span>
                        </div>

                    </article>

                    <article class="tarjeta-parqueadero">

                        <div class="icono-tarjeta-parqueadero disponible-icono">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>

                        <div class="informacion-tarjeta-parqueadero">
                            <p>Disponibles</p>
                            <h3>35</h3>
                            <span>Bahías libres</span>
                        </div>

                    </article>

                    <article class="tarjeta-parqueadero">

                        <div class="icono-tarjeta-parqueadero ocupado-icono">
                            <i class="fa-solid fa-car"></i>
                        </div>

                        <div class="informacion-tarjeta-parqueadero">
                            <p>Ocupadas</p>
                            <h3>12</h3>
                            <span>Vehículos estacionados</span>
                        </div>

                    </article>

                    <article class="tarjeta-parqueadero">

                        <div class="icono-tarjeta-parqueadero reservado-icono">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>

                        <div class="informacion-tarjeta-parqueadero">
                            <p>Reservadas</p>
                            <h3>3</h3>
                            <span>Espacios asignados</span>
                        </div>

                    </article>

                </section>

                <section class="panel-informacion-parqueadero">

                    <div class="encabezado-panel-parqueadero">
                        <div>
                            <h3>Información general</h3>
                            <p>Datos principales de tu establecimiento.</p>
                        </div>

                        <span class="estado-parqueadero">
                            <i class="fa-solid fa-circle"></i>
                            Activo
                        </span>
                    </div>

                    <div class="informacion-general-grid">

                        <div class="dato-parqueadero">
                            <span class="etiqueta-parqueadero">
                                <i class="fa-solid fa-building"></i>
                                Nombre del parqueadero
                            </span>
                            <strong>Parking Central</strong>
                        </div>

                        <div class="dato-parqueadero">
                            <span class="etiqueta-parqueadero">
                                <i class="fa-solid fa-location-dot"></i>
                                Dirección
                            </span>
                            <strong>Calle 100 #15-20, Bogotá</strong>
                        </div>

                        <div class="dato-parqueadero">
                            <span class="etiqueta-parqueadero">
                                <i class="fa-solid fa-phone"></i>
                                Teléfono
                            </span>
                            <strong>300 123 4567</strong>
                        </div>

                        <div class="dato-parqueadero">
                            <span class="etiqueta-parqueadero">
                                <i class="fa-solid fa-car"></i>
                                Capacidad
                            </span>
                            <strong>50 vehículos</strong>
                        </div>

                        <div class="dato-parqueadero">
                            <span class="etiqueta-parqueadero">
                                <i class="fa-regular fa-clock"></i>
                                Horario
                            </span>
                            <strong>6:00 a. m. - 10:00 p. m.</strong>
                        </div>

                        <div class="dato-parqueadero">
                            <span class="etiqueta-parqueadero">
                                <i class="fa-solid fa-calendar"></i>
                                Días de funcionamiento
                            </span>
                            <strong>Lunes a domingo</strong>
                        </div>

                    </div>

                </section>

                <section class="panel-bahias">

                    <div class="encabezado-panel-parqueadero">

                        <div>
                            <h3>Gestión de bahías</h3>
                            <p>Consulta y administra los espacios de estacionamiento.</p>
                        </div>

                        <button type="button" class="boton-agregar-bahia">
                            <i class="fa-solid fa-plus"></i>
                            Agregar bahía
                        </button>

                    </div>

                    <div class="estadisticas-bahias">

                        <div class="estadistica-bahia">
                            <span class="indicador-bahia disponible"></span>
                            <span>Disponible</span>
                            <strong>35</strong>
                        </div>

                        <div class="estadistica-bahia">
                            <span class="indicador-bahia ocupado"></span>
                            <span>Ocupada</span>
                            <strong>12</strong>
                        </div>

                        <div class="estadistica-bahia">
                            <span class="indicador-bahia reservado"></span>
                            <span>Reservada</span>
                            <strong>3</strong>
                        </div>

                        <div class="estadistica-bahia">
                            <span class="indicador-bahia mantenimiento"></span>
                            <span>Fuera de servicio</span>
                            <strong>0</strong>
                        </div>

                    </div>

                    <div class="filtros-bahias">

                        <div class="busqueda-bahia">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Buscar bahía...">
                        </div>

                        <select name="estado-bahia">
                            <option value="">Todos los estados</option>
                            <option value="disponible">Disponible</option>
                            <option value="ocupado">Ocupada</option>
                            <option value="reservado">Reservada</option>
                            <option value="mantenimiento">Fuera de servicio</option>
                        </select>

                        <select name="tipo-bahia">
                            <option value="">Todos los vehículos</option>
                            <option value="carro">Automóvil</option>
                            <option value="moto">Motocicleta</option>
                        </select>

                    </div>

                    <div class="contenedor-bahias">

                        <article class="bahia bahia-disponible">
                            <div class="numero-bahia">
                                <span>A-01</span>
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <span class="texto-estado-bahia">Disponible</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-disponible">
                            <div class="numero-bahia">
                                <span>A-02</span>
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <span class="texto-estado-bahia">Disponible</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-ocupada">
                            <div class="numero-bahia">
                                <span>A-03</span>
                                <i class="fa-solid fa-car-side"></i>
                            </div>
                            <span class="texto-estado-bahia">Ocupada</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-reservada">
                            <div class="numero-bahia">
                                <span>A-04</span>
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <span class="texto-estado-bahia">Reservada</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-disponible">
                            <div class="numero-bahia">
                                <span>A-05</span>
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <span class="texto-estado-bahia">Disponible</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-disponible">
                            <div class="numero-bahia">
                                <span>A-06</span>
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <span class="texto-estado-bahia">Disponible</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-ocupada">
                            <div class="numero-bahia">
                                <span>A-07</span>
                                <i class="fa-solid fa-car-side"></i>
                            </div>
                            <span class="texto-estado-bahia">Ocupada</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-disponible">
                            <div class="numero-bahia">
                                <span>A-08</span>
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <span class="texto-estado-bahia">Disponible</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-disponible">
                            <div class="numero-bahia">
                                <span>A-09</span>
                                <i class="fa-solid fa-motorcycle"></i>
                            </div>
                            <span class="texto-estado-bahia">Disponible</span>
                            <small>Motocicleta</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-disponible">
                            <div class="numero-bahia">
                                <span>A-10</span>
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <span class="texto-estado-bahia">Disponible</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-ocupada">
                            <div class="numero-bahia">
                                <span>A-11</span>
                                <i class="fa-solid fa-car-side"></i>
                            </div>
                            <span class="texto-estado-bahia">Ocupada</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                        <article class="bahia bahia-disponible">
                            <div class="numero-bahia">
                                <span>A-12</span>
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <span class="texto-estado-bahia">Disponible</span>
                            <small>Automóvil</small>
                            <button type="button" class="boton-detalle-bahia">Gestionar</button>
                        </article>

                    </div>

                    <div class="pie-bahias">
                        <p>Mostrando 12 de 50 bahías</p>
                        <button type="button">Ver todas <i class="fa-solid fa-arrow-right"></i></button>
                    </div>

                </section>

                <section class="seccion-tarifas-ubicacion">

                    <article class="panel-tarifas">

                        <div class="encabezado-panel-parqueadero">

                            <div>
                                <h3>Tarifas</h3>
                                <p>Valores de cobro por tipo de vehículo.</p>
                            </div>

                            <button type="button" class="boton-editar-tarifas">
                                <i class="fa-solid fa-pen"></i>
                                Editar
                            </button>

                        </div>

                        <div class="tarifa-item">

                            <div class="icono-tarifa">
                                <i class="fa-solid fa-car"></i>
                            </div>

                            <div class="informacion-tarifa">
                                <strong>Automóvil</strong>
                                <span>Tarifa por minuto</span>
                            </div>

                            <div class="valor-tarifa">
                                <strong>$100</strong>
                                <span>COP / minuto</span>
                            </div>

                        </div>

                        <div class="tarifa-item">

                            <div class="icono-tarifa">
                                <i class="fa-solid fa-motorcycle"></i>
                            </div>

                            <div class="informacion-tarifa">
                                <strong>Motocicleta</strong>
                                <span>Tarifa por minuto</span>
                            </div>

                            <div class="valor-tarifa">
                                <strong>$60</strong>
                                <span>COP / minuto</span>
                            </div>

                        </div>

                        <div class="nota-tarifas">
                            <i class="fa-solid fa-circle-info"></i>
                            Las tarifas mostradas son ilustrativas y pueden modificarse desde la administración.
                        </div>

                    </article>

                    <article class="panel-ubicacion">

                        <div class="encabezado-panel-parqueadero">
                            <div>
                                <h3>Ubicación</h3>
                                <p>Localización del establecimiento.</p>
                            </div>
                        </div>

                        <div class="informacion-ubicacion">

                            <div class="icono-ubicacion">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <strong>Parking Central</strong>
                                <p>Calle 100 #15-20</p>
                                <span>Bogotá, Colombia</span>
                            </div>

                        </div>

                        <div class="mapa-ubicacion">
                            <div class="contenido-mapa">
                                <i class="fa-solid fa-map-location-dot"></i>
                                <span>Ubicación del parqueadero</span>
                            </div>
                        </div>

                        <button type="button" class="boton-ubicacion">
                            <i class="fa-solid fa-map"></i>
                            Ver ubicación
                        </button>

                    </article>

                </section>

            </main>

        </div>

    </div>
</body>
</html>
