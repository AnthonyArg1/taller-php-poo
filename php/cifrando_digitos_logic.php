<?php

function cifrarNumero($numero)
{
    // Extraemos los dígitos del número
    $digito1 = floor($numero / 1000) % 10;
    $digito2 = floor($numero / 100) % 10;
    $digito3 = floor($numero / 10) % 10;
    $digito4 = $numero % 10;

    // Aplicamos el cifrado sumando 7 a cada dígito y obteniendo el residuo después de dividir entre 10
    $digito1 = ($digito1 + 7) % 10;
    $digito2 = ($digito2 + 7) % 10;
    $digito3 = ($digito3 + 7) % 10;
    $digito4 = ($digito4 + 7) % 10;

    // Intercambiamos el primer dígito con el tercero y el segundo con el cuarto
    $numeroCifrado = $digito3 * 1000 + $digito4 * 100 + $digito1 * 10 + $digito2;

    return $numeroCifrado;
}

// Verificamos si se ha enviado un número a cifrar desde el formulario
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    $numeroCifrado = cifrarNumero($numero);
    echo "- Número original: <b>$numero</b><br>";
    echo "- Número cifrado: <b>$numeroCifrado";
}

?>