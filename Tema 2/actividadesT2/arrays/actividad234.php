<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>234 monedas</title>
</head>
<body>
    <!-- 234monedas.php: Vuelve a realizar el ejercicio 207, el de las monedas (500, 200, 100, 50, 20, 10, 5, 2, 1), pero haciendo uso de arrays y un bucle. Almacena el resultado en un array asociativo. Muestra el resultado en una lista desordenada únicamente con las cantidades que tienen algún valor. -->
    <?php
    $dinero = 3333; // cantidad a descomponer

    $denominaciones = [500, 200, 100, 50, 20, 10, 5, 2, 1];
    $resultado = [];

    // Calcular cuántos billetes/monedas de cada valor
    foreach ($denominaciones as $valor) {
        $cantidad = floor($dinero / $valor);
        $dinero = $dinero % $valor;
        $resultado[$valor] = $cantidad; // guardamos todos, incluso si es 0
    }

    // Mostrar en lista desordenada
    echo "<h2>Descomposición de dinero:</h2>";
    echo "<ul>";
    foreach ($resultado as $valor => $cantidad) {
        $tipo = $valor >= 5 ? "billete" : "moneda";
        echo "<li>$cantidad $tipo de $valor €</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>