document.addEventListener("DOMContentLoaded", () => {
    const formPqrs = document.getElementById("form-pqrs");
    const tipoSolicitud = document.getElementById("tipo-solicitud");
    const asunto = document.getElementById("asunto");
    const descripcion = document.getElementById("Descripcion");
    const contador = document.getElementById("contador-caracteres");

    // 1. Contador de caracteres en tiempo real para el textarea
    descripcion.addEventListener("input", () => {
        const longitud = descripcion.value.length;
        contador.textContent = `${longitud} / 500`;
        contador.style.color = longitud >= 450 ? "#e53935" : "#666";
    });

    // 2. Validación al enviar el formulario
    formPqrs.addEventListener("submit", (e) => {
        e.preventDefault(); // Evita que la página se recargue

        // Limpiar bordes rojos previos
        limpiarErrores([tipoSolicitud, asunto, descripcion]);

        let esValido = true;

        // Validar Tipo de solicitud
        if (tipoSolicitud.value === "") {
            marcarError(tipoSolicitud, "Por favor, selecciona un tipo de solicitud.");
            esValido = false;
        }

        // Validar Asunto (sin espacios vacíos y mínimo 5 letras)
        const valorAsunto = asunto.value.trim();
        if (valorAsunto.length < 5) {
            marcarError(asunto, "El asunto debe tener al menos 5 caracteres.");
            esValido = false;
        }

        // Validar Descripción (mínimo 20 caracteres)
        const valorDescripcion = descripcion.value.trim();
        if (valorDescripcion.length < 20) {
            marcarError(descripcion, "Por favor, detalla más tu solicitud (mínimo 20 caracteres).");
            esValido = false;
        }

        // Si todo está correcto
        if (esValido) {
            alert("¡Tu PQRS ha sido enviada con éxito! Pronto te responderemos.");
            formPqrs.reset();
            contador.textContent = "0 / 500";
        }
    });

    // Funciones auxiliares para mostrar/ocultar errores visualmente
    function marcarError(elemento, mensaje) {
        elemento.style.borderColor = "#e53935";
        
        const errorTexto = document.createElement("span");
        errorTexto.className = "mensaje-error";
        errorTexto.style.color = "#e53935";
        errorTexto.style.fontSize = "12px";
        errorTexto.style.marginTop = "4px";
        errorTexto.textContent = mensaje;

        elemento.parentElement.appendChild(errorTexto);
    }

    function limpiarErrores(elementos) {
        elementos.forEach(el => el.style.borderColor = "#ddd");
        document.querySelectorAll(".mensaje-error").forEach(msg => msg.remove());
    }
});