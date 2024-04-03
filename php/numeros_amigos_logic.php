<?php
class Amigos
{
    private $numero1;
    private $numero2;

    public function __construct($numero1, $numero2)
    {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    private function sumaDivisores($num)
    {
        $suma = 0;
        for ($i = 1; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                $suma += $i;
            }
        }
        return $suma;
    }

    public function sonAmigos()
    {
        return $this->sumaDivisores($this->numero1) == $this->numero2 &&
            $this->sumaDivisores($this->numero2) == $this->numero1;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    $amigos = new Amigos($numero1, $numero2);
    if ($amigos->sonAmigos()) {
        echo "$numero1 y $numero2 son números amigos.";
    } else {
        echo "$numero1 y $numero2 no son números amigos.";
    }
}
?>