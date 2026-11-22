document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.getElementById("formularioContrasena");
    const nuevaContrasena = document.getElementById("nuevaContrasena");
    const confirmarContrasena = document.getElementById("confirmarContrasena");
    const ojoNueva = document.getElementById("ojoNueva");
    const ojoConfirmar = document.getElementById("ojoConfirmar");

    if (!formulario || !nuevaContrasena || !confirmarContrasena) return;

    function validarSeguridadPassword(password) {
        const errores = [];

        if (password.length < 8) {
            errores.push("mínimo 8 caracteres");
        }
        if (!/[A-Z]/.test(password)) {
            errores.push("al menos una letra mayúscula");
        }
        if (!/[0-9]/.test(password)) {
            errores.push("al menos un número");
        }
        if (!/[^A-Za-z0-9]/.test(password)) {
            errores.push("al menos un carácter especial (ej. @, #, $, !, %)");
        }

        return errores;
    }

    formulario.addEventListener("submit", (event) => {
        const password = nuevaContrasena.value.trim();
        const confirmacion = confirmarContrasena.value.trim();

        // Sincroniza el valor sin espacios accidentales en los extremos
        nuevaContrasena.value = password;
        confirmarContrasena.value = confirmacion;

        if (!password) {
            event.preventDefault();
            alert("La contraseña no puede estar vacía.");
            nuevaContrasena.focus();
            return;
        }

        const erroresSeguridad = validarSeguridadPassword(password);
        if (erroresSeguridad.length > 0) {
            event.preventDefault();
            alert("La contraseña debe tener: " + erroresSeguridad.join(", ") + ".");
            nuevaContrasena.focus();
            return;
        }

        if (!confirmacion) {
            event.preventDefault();
            alert("Debes confirmar tu contraseña.");
            confirmarContrasena.focus();
            return;
        }

        if (password !== confirmacion) {
            event.preventDefault();
            alert("Las contraseñas no coinciden.");
            confirmarContrasena.focus();
            return;
        }

        // Si vas a enviar por PHP/backend y quieres que se envíe el formulario,
        // quita o comenta la siguiente línea event.preventDefault().
        event.preventDefault();
        alert("¡Contraseña cambiada correctamente!");
    });

    // Función reutilizable para mostrar/ocultar contraseña en cualquiera de los dos campos
    function alternarVisibilidad(input, icono) {
        if (!input || !icono) return;

        icono.addEventListener("click", () => {
            const esPassword = input.type === "password";
            input.type = esPassword ? "text" : "password";
            icono.classList.toggle("fa-eye", !esPassword);
            icono.classList.toggle("fa-eye-slash", esPassword);
        });
    }

    alternarVisibilidad(nuevaContrasena, ojoNueva);
    alternarVisibilidad(confirmarContrasena, ojoConfirmar);
});