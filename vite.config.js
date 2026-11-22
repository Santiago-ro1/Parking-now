import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                 'resources/js/app.js',
                 'resources/css/Admin_cajero.css',
                 'resources/css/Admin_Horario.css',
                 'resources/css/Admin_Ingreso_salida.css',
                 'resources/css/Admin_Parqueadero.css',
                 'resources/css/Admin_reservas.css',
                 'resources/css/Admin_usuario.css',
                 'resources/css/Administrador.css',
                 'resources/css/cambiar_cantraseña',
                 'resources/css/Convenios.css',
                 'resources/css/Dashboard_usuario.css',
                 'resources/css/index.css',
                 'resources/css/Inicio_sesion.css',
                 'resources/css/login-usuario.css',
                 'resources/css/mapa-parqueaderos.css',
                 'resources/css/Perfil-usuario.css',
                 'resources/css/recuperar_contraseña.css',
                 'resources/js/Convenios.js',
                 'resources/js/Dashboard_usuario.js',
                 'resources/js/Inicio_sesion.js',
                 'resources/js/Login-usuario.js',
                 'resources/js/Reserva.js',
                 'resources/js/validacion-cambiar_contraseña.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
