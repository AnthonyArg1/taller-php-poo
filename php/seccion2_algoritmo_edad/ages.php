<?php
// Lee el archivo ages.txt y muestra las edades almacenadas
$agesFile = __DIR__ . "/ages.txt";
if (file_exists($agesFile)) {
    $ages = file($agesFile, FILE_IGNORE_NEW_LINES);
    foreach ($ages as $age) {
        echo "<li>$age</li>";
    }
}
?>