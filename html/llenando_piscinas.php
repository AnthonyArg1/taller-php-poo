<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llenando Piscinas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>Llenando Piscinas</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Volver al Inicio</a></li>
            </ul>
        </nav>
    </header>

    <body>
        <div class="resultadoG">
            <h2>Llenando Piscinas</h2>
            <p style="color:white;"><b>*Nota: </b>Todos los campos deben estar llenos para continuar y ver el resultado
            </p>
            <form action="llenando_piscinas.php" method="post" id="formLlenarPiscinas">
                <label for="litrosPiscina">Litros de la piscina:</label>
                <input type="number" id="litrosPiscina" name="litrosPiscina" required><br>

                <label for="litrosBalde">Litros del balde:</label>
                <input type="number" id="litrosBalde" name="litrosBalde" required><br>

                <label for="litrosPerdidos">Litros perdidos durante el viaje:</label>
                <input type="number" id="litrosPerdidos" name="litrosPerdidos" required><br>

                <label for="litrosPiscinaVecino">Litros de la piscina del vecino:</label>
                <input type="number" id="litrosPiscinaVecino" name="litrosPiscinaVecino" required><br>

                <label for="litrosBaldeVecino">Litros del balde del vecino:</label>
                <input type="number" id="litrosBaldeVecino" name="litrosBaldeVecino" required><br>

                <label for="litrosPerdidosVecino">Litros perdidos del vecino durante el viaje:</label>
                <input type="number" id="litrosPerdidosVecino" name="litrosPerdidosVecino" required><br>

                <button type="submit" id="calcularBtn" style="display: none;">Calcular</button>
            </form>
            <div class="result">
                <!-- Resultado -->
                <?php include ('../php/llenando_piscinas_logic.php'); ?>
            </div>
        </div>
        <script src="../js/llenando_piscinas_validation.js"></script>
    </body>
    <footer>
        <p>© 2024 Antonio Arguello. Derechos reservados.</p>
    </footer>
</body>

</html>