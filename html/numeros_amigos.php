<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Amigos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>Números Amigos</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Volver al Inicio</a></li>
            </ul>
        </nav>
    </header>

    <body>
        <div class="resultadoG">
            <h2>Números Amigos</h2>
            <p style="color:white;"><b>*Nota: </b>Todos los campos deben estar llenos para continuar y ver el resultado
            </p>
            <form action="numeros_amigos.php" method="post">
            <label for="numero1">Ingrese el primer número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br>
        <label for="numero2">Ingrese el segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br>
                <button type="submit" id="comprobar">Comprobar</button>
            </form>
            <div class="result">
                <!-- Resultado -->
                <?php include ('../php/numeros_amigos_logic.php'); ?>
            </div>
        </div>
        <!-- reciclo la validacion del boton para que no aparezca hasta que tenga un dato -->
        <script src="../js/numeros_amigos_validation.js"></script>
    </body>
    <footer>
        <p>© 2024 Antonio Arguello. Derechos reservados.</p>
    </footer>
</body>

</html>