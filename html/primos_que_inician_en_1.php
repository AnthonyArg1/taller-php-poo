<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos que inician en 1</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>Primos que inician en 1</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Volver al Inicio</a></li>
            </ul>
        </nav>
    </header>

    <body>
        <div class="resultadoG">
            <h2>Primos que inician en 1</h2>
            <p style="color:white;">Ingrese un numero para calcular cuantos numeros primos menores o iguales inician en 1 </p>
            <form action="primos_que_inician_en_1.php" method="post">
                <label for="numero">Ingrese un número:</label>
                <input type="number" id="numero" name="numero" required>
                <button type="submit" id="calcular" >Calcular</button>
            </form>
            <div class="result">
                <?php include ('../php/primos_que_inician_en_1_logic.php'); ?>
            </div>
        </div>
    </body>
    <main>
        <section id="about">
            <h2>Acerca de</h2>
            <p>En este pequeño pequeño portal web Accederas a los programas Mencionados en las tarjetas</p>
        </section>
        <section id="contact">
            <h2>Contacto</h2>
            <p>Si tienes alguna pregunta o comentario, no dudes en contactarme.</p>
            <p>Email: parguello@unab.edu.co</p>
        </section>
    </main>
    <footer>
        <p>© 2024 Antonio Arguello. Derechos reservados.</p>
    </footer>
    <script src="../js/primos_que_inician_en_1_validation.js"></script>
</body>

</html>