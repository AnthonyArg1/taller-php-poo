<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifrando Dígitos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>Cifrando Dígitos</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Volver al Inicio</a></li>
            </ul>
        </nav>
    </header>

    <body>
        <div class="resultadoG">
            <h2>Cifrar Número</h2>
            <form action="cifrando_digitos.php" method="post">
                <label for="numero">Ingrese un número de cuatro dígitos:</label>
                <label for="numero"><b>*Nota: </b>Deben ser 4 digitos</label>
                <input type="number" placeholder="Ingrese el numero..." id="numero" name="numero" required>
                <button type="submit" id="submitBtn">Cifrar</button>
            </form>
            <div class="result">
                <?php include ('../php/cifrando_digitos_logic.php'); ?>
            </div>
        </div>
        <script src="../js/cifrando_digitos_validation.js"></script>
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
</body>

</html>
