document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword'); // Opcional si luego agregas confirmar contraseña

    // Contenedor para errores de correo
    const emailGroup = emailInput.closest('.input-group');
    const emailErrorBox = document.createElement('div');
    emailErrorBox.className = 'email-error';
    emailErrorBox.style.color = '#dc2626';
    emailErrorBox.style.fontSize = '0.82rem';
    emailErrorBox.style.marginTop = '6px';
    emailErrorBox.style.lineHeight = '1.4';
    emailGroup.appendChild(emailErrorBox);

    // Contenedor para errores de contraseña
    const passwordGroup = passwordInput.closest('.input-group');
    const passwordErrorBox = document.createElement('div');
    passwordErrorBox.className = 'password-error';
    passwordErrorBox.style.color = '#dc2626';
    passwordErrorBox.style.fontSize = '0.82rem';
    passwordErrorBox.style.marginTop = '6px';
    passwordErrorBox.style.lineHeight = '1.4';
    passwordGroup.appendChild(passwordErrorBox);

    function validarEmail(email) {
        const valor = email.trim().toLowerCase();
        const errores = [];

        if (!valor) {
            errores.push('El correo electrónico es obligatorio.');
            return errores;
        }
        if (!valor.includes('@')) {
            errores.push('El correo debe incluir un "@".');
        }
        if (!valor.endsWith('.com')) {
            errores.push('El correo debe terminar en ".com".');
        }

        // Solo permite usuario@gmail.com o usuario@hotmail.com
        const regexPermitidos = /^[a-z0-9._%+-]+@(gmail|hotmail)\.com$/;
        if (!regexPermitidos.test(valor)) {
            errores.push('Solo se permiten correos @gmail.com o @hotmail.com.');
        }

        return errores;
    }

    function mostrarErroresEmail(errores) {
        if (errores.length === 0) {
            emailErrorBox.innerHTML = '';
            emailInput.style.borderColor = '#16a34a';
            return true;
        } else {
            emailErrorBox.innerHTML = errores.map(err => `• ${err}`).join('<br>');
            emailInput.style.borderColor = '#dc2626';
            return false;
        }
    }

    function validarPassword(password) {
        const errores = [];

        if (password.length < 8) {
            errores.push('Mínimo 8 caracteres.');
        }
        if (!/[A-Z]/.test(password)) {
            errores.push('Al menos una letra mayúscula.');
        }
        if (!/[0-9]/.test(password)) {
            errores.push('Al menos un número.');
        }
        if (!/[^A-Za-z0-9]/.test(password)) {
            errores.push('Al menos un carácter especial (ej. @, #, $, !, %).');
        }
        if (confirmPasswordInput && password !== confirmPasswordInput.value) {
            errores.push('Las contraseñas deben ser iguales.');
        }

        return errores;
    }

    function mostrarErroresPassword(errores) {
        if (errores.length === 0) {
            passwordErrorBox.innerHTML = '';
            passwordInput.style.borderColor = '#16a34a';
            return true;
        } else {
            passwordErrorBox.innerHTML = errores.map(err => `• ${err}`).join('<br>');
            passwordInput.style.borderColor = '#dc2626';
            return false;
        }
    }

    // Validación en tiempo real
    emailInput.addEventListener('input', () => {
        mostrarErroresEmail(validarEmail(emailInput.value));
    });

    passwordInput.addEventListener('input', () => {
        mostrarErroresPassword(validarPassword(passwordInput.value));
    });

    if (confirmPasswordInput) {
        confirmPasswordInput.addEventListener('input', () => {
            mostrarErroresPassword(validarPassword(passwordInput.value));
        });
    }

    // Validación al enviar el formulario
    form.addEventListener('submit', (e) => {
        const emailValido = mostrarErroresEmail(validarEmail(emailInput.value));
        const passwordValida = mostrarErroresPassword(validarPassword(passwordInput.value));

        if (!emailValido || !passwordValida) {
            e.preventDefault(); // Bloquea el inicio de sesión
            if (!emailValido) {
                emailInput.focus();
            } else {
                passwordInput.focus();
            }
        }
    });
});

function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eye-icon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    }
}