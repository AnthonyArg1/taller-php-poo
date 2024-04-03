<?php
// Ruta al archivo ages.txt
$agesFile = __DIR__ . "/ages.txt";

// Lee el archivo ages.txt y calcula los resultados
if (file_exists($agesFile)) {
    $ages = file($agesFile, FILE_IGNORE_NEW_LINES);
    $total_personas = count($ages);
    $suma_edades = array_sum($ages);
    $promedio_edades = $total_personas > 0 ? round($suma_edades / $total_personas, 1) : 0;
    $edad_mas_joven = min($ages);
    echo "Total de personas: <b>$total_personas</b>, Promedio de edades: <b>$promedio_edades</b>, Edad del más joven: <b>$edad_mas_joven</b>";
}
?>