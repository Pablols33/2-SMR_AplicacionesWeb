<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi nota media</title>
</head>
<body>
    <h1>Pablo Lechuga Sánchez</h1>
    <h2>Mi nota media</h2>

    <?php
    // 1. Módulo
    $modulo = "Aplicaciones Web";

    // 2. Tres notas inventadas
    $nota1 = 7;
    $nota2 = 6;
    $nota3 = 8;

    // 3. Media (los paréntesis hacen que se sume primero)
    $media = ($nota1 + $nota2 + $nota3) / 3;

    // 4. Frase con las notas y la media
    echo $modulo . ": mis notas son " . $nota1 . ", " . $nota2 . " y " . $nota3 . ". Mi media es " . $media . ".<br>";

    // 5. Aprobado o suspenso
    if ($media >= 5) {
        echo "Aprobado";
    } else {
        echo "Suspenso";
    }
    ?>

    <p><a href="formulario.html">Volver al formulario</a></p>
</body>
</html>