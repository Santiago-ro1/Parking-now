<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;

Route::get('/', function () {
    return view('welcome');
});

//Ruta para ver lal lista de reservas
Route::get('/reservas', [ReservaController::class, 'index']);

//Ruta Para guardar una nueva reserva
Route::post('/reservas', [ReservaController::class, 'store']);

// Página principal
Route::view('/', 'Index')->name('inicio');
Route::view('/Index', 'Index')->name('Index');

// Autenticación y cuenta de usuario
Route::view('/Inicio_sesion', 'Inicio_sesion')->name('Inicio_sesion');
Route::view('/Login-usuario', 'Login-usuario')->name('Login-usuario');
Route::view('/Perfil-usuario', 'Perfil-usuario')->name('Perfil-usuario');
Route::view('/Dashboard_usuario', 'Dashboard_usuario')->name('Dashboard_usuario');
Route::view('/cambiar_contraseña', 'cambiar_contraseña')->name('cambiar_contraseña');
Route::view('/recuperar_contraseña', 'recuperar_contraseña')->name('recuperar_contraseña');

// Reservas y convenios
Route::view('/Reserva', 'Reserva')->name('Reserva');
Route::view('/Convenios', 'Convenios')->name('Convenios');

// Panel administrativo
Route::view('/Administrador', 'Administrador')->name('Administrador');
Route::view('/Admin_cajero', 'Admin_cajero')->name('Admin_cajero');
Route::view('/Admin_Horario', 'Admin_Horario')->name('Admin_Horario');
Route::view('/Admin_Ingreso_salida', 'Admin_Ingreso_salida')->name('Admin_Ingreso_salida');
Route::view('/Admin_Parqueadero', 'Admin_Parqueadero')->name('Admin_Parqueadero');
Route::view('/Admin_Reservas', 'Admin_Reservas')->name('Admin_Reservas');
Route::view('/Admin_usuarios', 'Admin_usuarios')->name('Admin_usuarios');

//Ruta para ver lal lista de reservas
Route::get('/reservas', [ReservaController::class, 'index']);

//Ruta Para guardar una nueva reserva
Route::post('/reservas', [ReservaController::class, 'store']);

Route::resource('reserva', ReservaController::class);
