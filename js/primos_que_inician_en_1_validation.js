function validarCampos() {
    let numero = document.getElementById("numero").value;

    if (numero !== "") {
        document.getElementById("calcular").style.display = "block";
    } else {
        document.getElementById("calcular").style.display = "none";
    }
}

// Llamar a la función validarCampos cuando haya cambios en los campos de entrada
document.getElementById("numero").addEventListener("input", validarCampos);

validarCampos();