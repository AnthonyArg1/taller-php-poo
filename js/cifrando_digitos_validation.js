// Función para validar el número ingresado
function validarNumero() {
    let numeroInput = document.getElementById('numero');
    let numero = numeroInput.value;
    
    // Verificamos si el número tiene exactamente cuatro dígitos
    if (numero.length !== 4 || isNaN(numero)) {
        // Si no tiene cuatro dígitos o no es un número, ocultamos el botón de envío
        document.getElementById('submitBtn').style.display = 'none';
    } else {
        // Si tiene cuatro dígitos y es un número, mostramos el botón de envío
        document.getElementById('submitBtn').style.display = 'block';
    }
}

// Asociamos la función validarNumero al evento input del campo de entrada
document.getElementById('numero').addEventListener('input', validarNumero);

// Llamamos a la función validarNumero al cargar el DOM
document.addEventListener("DOMContentLoaded", validarNumero);