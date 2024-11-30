<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>¡Ganaste!</title>
</head>

<body>
    <h1>¡Felicidades, has ganado!</h1>
    <p>La palabra secreta era: <?php echo $_SESSION['palabra']; ?></p>
    <p>¡Genial trabajo adivinando la palabra!</p>
    <a href="index.php">
        <button>Jugar de nuevo</button>
    </a>
    <?php
    session_destroy();
    ?>
</body>

</html>