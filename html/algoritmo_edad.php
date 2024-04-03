<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmo de Edades</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>Algoritmo de Edades</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Volver al Inicio</a></li>
            </ul>
        </nav>
    </header>

    <body>
        <div class="resultadoG">
            <h2>Algoritmo de Edades</h2>
            <form action="../php/seccion2_algoritmo_edad/add_age.php" method="post">
                <input type="number" name="age" id="numero" placeholder="Ingrese una nueva edad..." required>
                <button type="submit">Agregar Edad</button>
            </form>
            <div class="result">
                <!-- Lista de edades -->
                <ul style="display: none;">
                    <?php include ('../php/seccion2_algoritmo_edad/ages.php'); ?>
                </ul>

                <!-- Resultados -->
                <?php include ('../php/seccion2_algoritmo_edad/results.php'); ?>
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
</body>

</html>