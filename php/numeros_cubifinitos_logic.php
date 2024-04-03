<?php

class CubifinitoSolver
{
    // Función para calcular la suma de los cubos de los dígitos de un número
    private static function sumaCubosDigitos($num)
    {
        $suma = 0;
        while ($num != 0) {
            $digito = $num % 10;
            $suma += $digito * $digito * $digito;
            $num = (int) ($num / 10);
        }
        return $suma;
    }

    public static function calcularCubifinito($numero)
    {
        $historial = [];

        while (!in_array($numero, $historial)) {
            $historial[] = $numero;
            $numero = self::sumaCubosDigitos($numero);
        }

        // Verificar si llegamos a 1 (cubifinito)
        if ($numero == 1) {
            return implode('-', $historial) . ' -> cubifinito';
        } else {
            return implode('-', $historial) . ' -> no cubifinito';
        }
    }
}

// Verificar si se envió un número y procesar la lógica
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
    $numero = $_POST["numero"];

    // Calcular y mostrar el resultado
    echo "<p>" . CubifinitoSolver::calcularCubifinito($numero) . "</p>";
}

?>