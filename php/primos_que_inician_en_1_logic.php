<?php
class PrimosInicianEn1 {
    // Función para verificar si un número es primo
    public static function esPrimo($num) {
        if ($num <= 1)
            return false;
        if ($num <= 3)
            return true;
        if ($num % 2 == 0 || $num % 3 == 0)
            return false;

        // Comprobación de primos usando el Teorema de Wilson
        $i = 5;
        while ($i * $i <= $num) {
            if ($num % $i == 0 || $num % ($i + 2) == 0)
                return false;
            $i += 6;
        }
        return true;
    }

    // Función para contar primos que inician en 1 hasta cierto número
    public static function contarPrimosInician1($numero) {
        $contador = 0;
        for ($i = 2; $i <= $numero; $i++) {
            // Si es primo y comienza con '1'
            if (self::esPrimo($i) && substr($i, 0, 1) == '1') {
                $contador++;
            }
        }
        // Devolver el número de primos que cumplen la condición
        return $contador;
    }
}

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
    // Obtener el número del formulario
    $numero = intval($_POST['numero']);
    
    // Llamar al método de la clase PrimosInicianEn1 para contar los primos que inician en 1
    $resultado = PrimosInicianEn1::contarPrimosInician1($numero);

    // Mostrar el resultado
    echo "El número de primos menores o iguales a $numero que inician en 1 son: $resultado";
}
?>
