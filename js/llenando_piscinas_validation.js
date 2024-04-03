// Función para validar que todos los campos están llenos antes de mostrar el botón de "Calcular"
function validarCampos() {
    let litrosPiscina = document.getElementById("litrosPiscina").value;
    let litrosBalde = document.getElementById("litrosBalde").value;
    let litrosPerdidos = document.getElementById("litrosPerdidos").value;
    let litrosPiscinaVecino = document.getElementById("litrosPiscinaVecino").value;
    let litrosBaldeVecino = document.getElementById("litrosBaldeVecino").value;
    let litrosPerdidosVecino = document.getElementById("litrosPerdidosVecino").value;

    if (litrosPiscina !== "" && litrosBalde !== "" && litrosPerdidos !== "" && litrosPiscinaVecino !== "" && litrosBaldeVecino !== "" && litrosPerdidosVecino !== "") {
        document.getElementById("calcularBtn").style.display = "block";
    } else {
        document.getElementById("calcularBtn").style.display = "none";
    }
}

// Llamar a la función validarCampos cuando haya cambios en los campos de entrada
document.getElementById("litrosPiscina").addEventListener("input", validarCampos);
document.getElementById("litrosBalde").addEventListener("input", validarCampos);
document.getElementById("litrosPerdidos").addEventListener("input", validarCampos);
document.getElementById("litrosPiscinaVecino").addEventListener("input", validarCampos);
document.getElementById("litrosBaldeVecino").addEventListener("input", validarCampos);
document.getElementById("litrosPerdidosVecino").addEventListener("input", validarCampos);

// Llamar a la función validarCampos al cargar la página
validarCampos();
console.log("Campos" + validarCampos());
 