<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>232mates</title>
</head>
<body>
    <!-- 232mates.php: A partir del ejercicio 230, genera un array aleatorio de 33 elementos con números comprendidos entre el 0 y 100 y calcula:

    El mayor
    El menor
    La media -->

    <?php
    // Generar 51 números aleatorios
    for ($i = 0; $i < 33; $i++) { 
        $num[] = rand(0, 100);
    }

    // Mostrar lista desordenada
    echo "<ul>";
    foreach ($num as $indice => $numero) {
        echo "<li>$numero</li>";
    }
    echo "</ul>";

    // Calcular mayor, menor y media
    $mayor = max($num);
    $menor = min($num);
    $media = array_sum($num) / count($num);

    echo "<p>Mayor: $mayor</p>";
    echo "<p>Menor: $menor</p>";
    echo "<p>Media: $media</p>";
    ?>

</body>
</html>