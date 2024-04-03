<?php

// Verificar si se envió un número y procesar la lógica
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    function cubifinito($numero)
    {
        $historial = array();

        // Función para calcular la suma de los cubos de los dígitos de un número
        function sumaCubosDigitos($num)
        {
            $suma = 0;
            while ($num != 0) {
                $digito = $num % 10;
                $suma += $digito * $digito * $digito;
                $num /= 10;
            }
            return $suma;
        }

        while (!in_array($numero, $historial)) {
            array_push($historial, $numero);
            $numero = sumaCubosDigitos($numero);
        }

        // Verificar si llegamos a 1 (cubifinito)
        if ($numero == 1) {
            return implode('-', $historial) . ' -> cubifinito';
        } else {
            return implode('-', $historial) . ' -> no cubifinito';
        }
    }

    // Mostrar el resultado
    echo "<p>" . cubifinito($numero) . "</p>";
}

?>