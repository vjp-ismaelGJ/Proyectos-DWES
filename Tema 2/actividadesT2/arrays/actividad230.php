<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>230aleatorios50</title>
</head>
<body>
    <!-- 230aleatorios50.php: Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, y luego muéstralo en una lista desordenada. Para crear un número aleatorio, utiliza la función rand(inicio, fin). Por ejemplo: -->

    <?php
    // Generar 51 números aleatorios
    for ($i = 0; $i < 50; $i++) { 
        $num[] = rand(0, 99);
    }

    // Mostrar lista desordenada
    echo "<ul>";
    foreach ($num as $indice => $numero) {
        echo "<li>$numero</li>"; // solo mostramos el número, sin índice
        echo "<br>";
    }
    echo "</ul>";
    ?>

</body>
</html>