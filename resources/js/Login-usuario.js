document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('formularioRegistro');

    // Campos de texto y selección
    const nombre = document.getElementById('nombre');
    const nombre2 = document.getElementById('nombre2');
    const apellido = document.getElementById('apellido');
    const apellido2 = document.getElementById('apellido2');
    const tipoDocumento = document.getElementById('tipo-documento');
    const numeroDocumento = document.getElementById('numero-documento');
    const fechaNacimiento = document.getElementById('fecha-nacimiento');
    const genero = document.getElementById('genero');
    const generoOtro = document.getElementById('genero_otro');
    const correo = document.getElementById('correo');
    const contrasena = document.getElementById('contraseña');
    const confirmarContrasena = document.getElementById('confirmar-contraseña');

    // Botones de mostrar/ocultar contraseña
    const ojoContrasena = document.getElementById('ojoContrasena');
    const ojoConfirmar = document.getElementById('ojoConfirmar');

    // Expresiones regulares actualizadas
    const soloLetrasRegex = /^[A-Za-zÁÉÍÓÚáéíóúÑñüÜ\s'-]+$/;
    const documentoRegex = /^\d{6,12}$/;
    const correoRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
    const claveSeguraRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9\s]).{8,}$/;

    // --- 1. Mostrar / ocultar "Otro género" ---
    function sincronizarGeneroOtro() {
        if (!genero || !generoOtro) return;
        const esOtro = genero.value === 'otro';
        generoOtro.style.display = esOtro ? 'block' : 'none';
        generoOtro.style.marginTop = esOtro ? '10px' : '0';
        generoOtro.required = esOtro;

        if (!esOtro) {
            generoOtro.value = '';
            limpiarError(generoOtro);
        }
    }

    sincronizarGeneroOtro();
    genero?.addEventListener('change', () => {
        sincronizarGeneroOtro();
        if (genero.value === 'otro') {
            generoOtro.focus();
        }
    });

    // --- 2. Mostrar / ocultar contraseñas ---
    function alternarVisibilidad(input, icono) {
        if (!input || !icono) return;
        icono.addEventListener('click', () => {
            const esPassword = input.type === 'password';
            input.type = esPassword ? 'text' : 'password';
            icono.classList.toggle('fa-eye', !esPassword);
            icono.classList.toggle('fa-eye-slash', esPassword);
        });
    }

    alternarVisibilidad(contrasena, ojoContrasena);
    alternarVisibilidad(confirmarContrasena, ojoConfirmar);

    // --- 3. Funciones auxiliares para mensajes de error ---
    function mostrarError(input, mensaje) {
        if (!input) return;
        const contenedor = input.closest('.campo') || input.parentElement;
        let errorEl = contenedor.querySelector('.mensaje-error');

        if (!errorEl) {
            errorEl = document.createElement('small');
            errorEl.className = 'mensaje-error';
            errorEl.style.color = '#d93025';
            errorEl.style.fontSize = '12px';
            errorEl.style.marginTop = '5px';
            errorEl.style.display = 'block';
            errorEl.style.textAlign = 'left';
            contenedor.appendChild(errorEl);
        }

        errorEl.textContent = mensaje;
        input.style.borderColor = '#d93025';
    }

    function limpiarError(input) {
        if (!input) return;
        const contenedor = input.closest('.campo') || input.parentElement;
        const errorEl = contenedor.querySelector('.mensaje-error');
        if (errorEl) {
            errorEl.remove();
        }
        input.style.borderColor = '#c8e5ee';
    }

    function calcularEdad(fechaStr) {
        const hoy = new Date();
        const nacimiento = new Date(`${fechaStr}T00:00:00`);
        if (Number.isNaN(nacimiento.getTime())) return -1;

        let edad = hoy.getFullYear() - nacimiento.getFullYear();
        const mesDiff = hoy.getMonth() - nacimiento.getMonth();
        if (mesDiff < 0 || (mesDiff === 0 && hoy.getDate() < nacimiento.getDate())) {
            edad--;
        }
        return edad;
    }

    // --- 4. Validación individual de campos ---
    function validarCampoTexto(input, obligatorio, etiqueta) {
        const valor = input.value.trim();
        limpiarError(input);

        if (!valor) {
            if (obligatorio) {
                mostrarError(input, `El campo ${etiqueta} es obligatorio.`);
                return false;
            }
            return true;
        }

        if (valor.length < 2 || !soloLetrasRegex.test(valor)) {
            mostrarError(input, `${etiqueta} solo debe contener letras.`);
            return false;
        }

        return true;
    }

    function validarSelect(select, mensaje) {
        limpiarError(select);
        if (!select.value) {
            mostrarError(select, mensaje);
            return false;
        }
        return true;
    }

    function validarDocumento() {
        const valor = numeroDocumento.value.trim();
        limpiarError(numeroDocumento);

        if (!valor) {
            mostrarError(numeroDocumento, 'Ingresa tu número de documento.');
            return false;
        }

        if (!documentoRegex.test(valor)) {
            mostrarError(numeroDocumento, 'El número de documento debe tener solo números (entre 6 y 12 dígitos).');
            return false;
        }

        return true;
    }

    function validarFecha() {
        const valor = fechaNacimiento.value;
        limpiarError(fechaNacimiento);

        if (!valor) {
            mostrarError(fechaNacimiento, 'Selecciona tu fecha de nacimiento.');
            return false;
        }

        const edad = calcularEdad(valor);
        if (edad < 18 || edad > 110) {
            mostrarError(fechaNacimiento, 'La edad debe estar entre 18 y 110 años.');
            return false;
        }

        return true;
    }

    function validarGenero() {
        limpiarError(genero);
        limpiarError(generoOtro);

        if (!genero.value) {
            mostrarError(genero, 'Selecciona una opción de género.');
            return false;
        }

        if (genero.value === 'otro') {
            const valorOtro = generoOtro.value.trim();
            if (!valorOtro) {
                mostrarError(generoOtro, 'Especifica tu género.');
                return false;
            }
            if (valorOtro.length < 2 || !soloLetrasRegex.test(valorOtro)) {
                mostrarError(generoOtro, 'Especifica un género válido usando solo letras.');
                return false;
            }
        }

        return true;
    }

    function validarCorreo() {
        const valor = correo.value.trim();
        limpiarError(correo);

        if (!valor) {
            mostrarError(correo, 'Ingresa tu correo electrónico.');
            return false;
        }

        if (!correoRegex.test(valor)) {
            mostrarError(correo, 'Ingresa un correo electrónico válido (ej. usuario@dominio.com).');
            return false;
        }

        return true;
    }

    function validarContrasena() {
        const valor = contrasena.value;
        limpiarError(contrasena);

        if (!valor) {
            mostrarError(contrasena, 'Crea una contraseña.');
            return false;
        }

        if (!claveSeguraRegex.test(valor)) {
            mostrarError(
                contrasena,
                'Mínimo 8 caracteres, con mayúscula, minúscula, número y un carácter especial.'
            );
            return false;
        }

        return true;
    }

    function validarConfirmarContrasena() {
        const valor = confirmarContrasena.value;
        limpiarError(confirmarContrasena);

        if (!valor) {
            mostrarError(confirmarContrasena, 'Confirma tu contraseña.');
            return false;
        }

        if (valor !== contrasena.value) {
            mostrarError(confirmarContrasena, 'Las contraseñas no coinciden.');
            return false;
        }

        return true;
    }

    // Validación en tiempo real al salir o cambiar
    nombre?.addEventListener('blur', () => validarCampoTexto(nombre, true, 'Nombre'));
    nombre2?.addEventListener('blur', () => validarCampoTexto(nombre2, true, 'Segundo nombre'));
    apellido?.addEventListener('blur', () => validarCampoTexto(apellido, true, 'Apellido'));
    apellido2?.addEventListener('blur', () => validarCampoTexto(apellido2, true, 'Segundo apellido'));
    tipoDocumento?.addEventListener('change', () => validarSelect(tipoDocumento, 'Selecciona un tipo de documento.'));
    numeroDocumento?.addEventListener('blur', validarDocumento);
    fechaNacimiento?.addEventListener('change', validarFecha);
    genero?.addEventListener('change', validarGenero);
    generoOtro?.addEventListener('blur', () => {
        if (genero.value === 'otro') validarGenero();
    });
    correo?.addEventListener('blur', validarCorreo);
    contrasena?.addEventListener('blur', () => {
        validarContrasena();
        if (confirmarContrasena.value) validarConfirmarContrasena();
    });
    confirmarContrasena?.addEventListener('blur', validarConfirmarContrasena);

    // --- 5. Envío del formulario ---
    form?.addEventListener('submit', (e) => {
        e.preventDefault();

        const resultados = [
            validarCampoTexto(nombre, true, 'Nombre'),
            validarCampoTexto(nombre2, true, 'Segundo nombre'),
            validarCampoTexto(apellido, true, 'Apellido'),
            validarCampoTexto(apellido2, true, 'Segundo apellido'),
            validarSelect(tipoDocumento, 'Selecciona un tipo de documento.'),
            validarDocumento(),
            validarFecha(),
            validarGenero(),
            validarCorreo(),
            validarContrasena(),
            validarConfirmarContrasena()
        ];

        const todoValido = resultados.every(Boolean);

        if (!todoValido) {
            const primerError = form.querySelector('.mensaje-error');
            primerError?.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }

        alert('¡Formulario validado correctamente!');
        // form.submit();
    });
});