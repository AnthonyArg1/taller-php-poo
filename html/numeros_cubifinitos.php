<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Cubifinitos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>Números Cubifinitos</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Volver al Inicio</a></li>
            </ul>
        </nav>
    </header>

    <body>
        <div class="resultadoG">
            <h2>Números Cubifinitos</h2>
            <p style="color:white;"><b>*Nota: </b>Todos los campos deben estar llenos para continuar y ver el resultado
            </p>
            <form action="numeros_cubifinitos.php" method="post">
                <label for="numero">Ingrese un número:</label>
                <input type="number" name="numero" id="numero" required>
                <button type="submit" id="calcular">Verificar</button>
            </form>
            <div class="result">
                <!-- Resultado -->
                <?php include ('../php/numeros_cubifinitos_logic.php'); ?>
            </div>
        </div>
        <!-- reciclo la validacion del boton para que no aparezca hasta que tenga un dato -->
        <script src="../js/primos_que_inician_en_1_validation.js"></script>
    </body>
    <footer>
        <p>© 2024 Antonio Arguello. Derechos reservados.</p>
    </footer>
</body>

</html>