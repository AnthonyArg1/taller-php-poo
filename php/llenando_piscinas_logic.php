<?php
// Lógica para resolver el problema "Llenando Piscinas"

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $litrosPiscina = $_POST['litrosPiscina'];
    $litrosBalde = $_POST['litrosBalde'];
    $litrosPerdidos = $_POST['litrosPerdidos'];
    $litrosPiscinaVecino = $_POST['litrosPiscinaVecino'];
    $litrosBaldeVecino = $_POST['litrosBaldeVecino'];
    $litrosPerdidosVecino = $_POST['litrosPerdidosVecino'];

    // Calcular viajes necesarios
    $viajes_yo = ceil($litrosPiscina / ($litrosBalde - $litrosPerdidos));
    $viajes_vecino = ceil($litrosPiscinaVecino / ($litrosBaldeVecino - $litrosPerdidosVecino));

    // Determinar ganador
    if ($viajes_yo < $viajes_vecino) {
        $ganador = "GANO <b>YO";
        $num_viajes = $viajes_yo;
    } elseif ($viajes_vecino < $viajes_yo) {
        $ganador = " GANA EL <b>VECINO";
        $num_viajes = $viajes_vecino;
    } else {
        $ganador = " ES <b>EMPATE";
        $num_viajes = $viajes_yo; // o $viajes_vecino, son iguales
    }


    // Mostrar resultado
    echo "$ganador, $num_viajes";
}
?>