<?php
// Verifica si se ha enviado una nueva edad
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['age'])) {
    // Obtiene la edad ingresada por el usuario
    $new_age = intval($_POST['age']);

    // Verifica si la edad es mayor que cero
    if ($new_age > 0) {
        // Abre o crea el archivo ages.txt para agregar la nueva edad
        $agesFile = __DIR__ . "/ages.txt";
        $file = fopen($agesFile, "a");
        fwrite($file, $new_age . PHP_EOL);
        fclose($file);
    }
}

// Redirecciona a la página principal
header("Location: ../../html/algoritmo_edad.php");
?>