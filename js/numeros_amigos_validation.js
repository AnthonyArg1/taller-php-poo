// Función para validar el número ingresado
function validarCampos() {
    let numero1Input = document.getElementById('numero1');
    let numero2Input = document.getElementById('numero2');
    let numero1 = numero1Input.value;
    let numero2 = numero2Input.value;
    // console.log(numero1, numero2);

    // Verificamos si registra los dos numeros
    if (numero1 !== "" && numero2 !== "") {
        // si no tiene nada no mostrar el boton
        document.getElementById("comprobar").style.display = "block";
    } else {
        document.getElementById("comprobar").style.display = "none";
    }
}

// Asociamos la función validarCampos al evento input del campo de entrada
document.getElementById('numero1').addEventListener('input', validarCampos);
document.getElementById('numero2').addEventListener('input', validarCampos);

// Llamamos a la función validarCampos al cargar el DOM
validarCampos();