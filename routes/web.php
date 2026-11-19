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