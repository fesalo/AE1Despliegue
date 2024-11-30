<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>¡Perdiste!</title>
</head>

<body>
    <h1>Lo siento, has perdido.</h1>
    <p>La palabra era: <?php echo $_SESSION['palabra']; ?></p>
    <p>No te preocupes, ¡puedes intentarlo de nuevo!</p>
    <a href="index.php"><button>Jugar de nuevo</button></a>

    <?php
    session_destroy();
    ?>
</body>

</html>
