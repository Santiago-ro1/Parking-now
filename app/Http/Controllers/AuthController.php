<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('Login-usuario');
    }
    public function register(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'correo_electronico' => 'required|email|unique:cuenta,correo_electronico',
            'contrasena' => 'required|min:8',
            'no_documento' => 'required|numeric|unique:usuario,no_documento',
            'primer_nombre' => 'required|string|max:30',
            'segundo_nombre' => 'required|string|max:30',
            'primer_apellido' => 'nullable|string|max:30',
            'segundo_apellido' => 'nullable|string|max:30',
            'tipo_documento' => 'required|string|max:10',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|exists:genero,id_genero'
        ]);

        $cuenta = Cuenta::create([
            'correo_electronico' => $request->correo_electronico,
            'contrasena' => Hash::make($request->contrasena),
        ]);

        Usuario::create([
            'no_documento' => $request->no_documento,
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'primer_apellido' => $request->primer_apellido,
            'segundo_apellido' => $request->segundo_apellido,
            'tipo_documento' => $request->tipo_documento,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'id_genero' => $request->genero,
            'id_cuenta' => $cuenta->id_cuenta,
            'id_direccion' => null,
            'id_rol' =>2,
        ]);

        //redirigir al inicio de sesion

        return redirect()->route('Inicio_sesion');
    }
}
