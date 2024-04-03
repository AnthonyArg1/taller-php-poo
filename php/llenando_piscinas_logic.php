<?php
class LlenandoPiscinasSolver
{
    private $litrosPiscina;
    private $litrosBalde;
    private $litrosPerdidos;
    private $litrosPiscinaVecino;
    private $litrosBaldeVecino;
    private $litrosPerdidosVecino;

    public function __construct($litrosPiscina, $litrosBalde, $litrosPerdidos, $litrosPiscinaVecino, $litrosBaldeVecino, $litrosPerdidosVecino)
    {
        $this->litrosPiscina = $litrosPiscina;
        $this->litrosBalde = $litrosBalde;
        $this->litrosPerdidos = $litrosPerdidos;
        $this->litrosPiscinaVecino = $litrosPiscinaVecino;
        $this->litrosBaldeVecino = $litrosBaldeVecino;
        $this->litrosPerdidosVecino = $litrosPerdidosVecino;
    }

    public function calcularGanador()
    {
        // Calcular viajes necesarios
        $viajes_yo = ceil($this->litrosPiscina / ($this->litrosBalde - $this->litrosPerdidos));
        $viajes_vecino = ceil($this->litrosPiscinaVecino / ($this->litrosBaldeVecino - $this->litrosPerdidosVecino));

        // Determinar ganador
        if ($viajes_yo < $viajes_vecino) {
            return "GANO <b>YO</b>";
        } elseif ($viajes_vecino < $viajes_yo) {
            return "GANA EL <b>VECINO</b>";
        } else {
            return "ES <b>EMPATE</b>";
        }
    }

    public function obtenerNumViajesGanador()
    {
        // Calcular viajes necesarios
        $viajes_yo = ceil($this->litrosPiscina / ($this->litrosBalde - $this->litrosPerdidos));
        $viajes_vecino = ceil($this->litrosPiscinaVecino / ($this->litrosBaldeVecino - $this->litrosPerdidosVecino));

        // Devolver número de viajes del ganador
        return min($viajes_yo, $viajes_vecino);
    }
}

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $litrosPiscina = $_POST['litrosPiscina'];
    $litrosBalde = $_POST['litrosBalde'];
    $litrosPerdidos = $_POST['litrosPerdidos'];
    $litrosPiscinaVecino = $_POST['litrosPiscinaVecino'];
    $litrosBaldeVecino = $_POST['litrosBaldeVecino'];
    $litrosPerdidosVecino = $_POST['litrosPerdidosVecino'];

    // Crear objeto de la clase LlenandoPiscinasSolver
    $solver = new LlenandoPiscinasSolver($litrosPiscina, $litrosBalde, $litrosPerdidos, $litrosPiscinaVecino, $litrosBaldeVecino, $litrosPerdidosVecino);

    // Calcular y mostrar resultado
    echo $solver->calcularGanador() . ", " . $solver->obtenerNumViajesGanador();
}
?>