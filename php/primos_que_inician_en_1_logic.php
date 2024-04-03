<?php
// Función para verificar si un número es primo
function es_primo($num)
{
    if ($num <= 1)
        // Si el número es menor o igual a 1, no es primo
        return false;
    if ($num <= 3)
        // Si el número es 2 o 3, es primo
        return true;
    if ($num % 2 == 0 || $num % 3 == 0)
        // Si es divisible por 2 o 3, no es primo
        return false;

    // Comprobación de primos usando el Teorema de Wilson
    $i = 5;
    while ($i * $i <= $num) {
        // Si es divisible por $i o $i + 2, no es primo
        if ($num % $i == 0 || $num % ($i + 2) == 0)
            return false;
        $i += 6;
    }
    // Si no se encontró ningún divisor, el número es primo
    return true;
}

// Función para contar primos que inician en 1 hasta cierto número
function contar_primos_inician_1($numero)
{
    $contador = 0;
    for ($i = 2; $i <= $numero; $i++) {
        // Si es primo y comienza con '1'
        if (es_primo($i) && substr($i, 0, 1) == '1') {
            $contador++;
        }
    }
    // Devolver el número de primos que cumplen la condición
    return $contador;
}

// Recibir número del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
    $resultado = contar_primos_inician_1($numero);
    echo "El número de primos menores o iguales a $numero que inician en 1 son: $resultado";
}
?>