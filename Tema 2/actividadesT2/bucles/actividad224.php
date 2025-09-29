<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>Actividad 224</title>
</head>
<body>
    <?php 
    $cantidad = $_GET['cantidad'];

    if ($cantidad < 1) {
    echo "Cantidad inválida.";
    exit;
    }
    
    echo "<h2>Introduce $cantidad números</h2>";
    echo "<form action='actividad224.php' method='get'>";

    for ($i = 1; $i <= $cantidad; $i++) {
        echo "<p><label for='num$i'>Número $i:</label>";
        echo "<input type='number' name='num$i' id='num$i' required></p>";
    }

    // Guardamos la cantidad para saber cuántos datos sumar después
    echo "<input type='hidden' name='cantidad' value='$cantidad'>";
    echo "<p><input type='submit' value='Sumar'></p>";
    echo "</form>";
    ?>
</body>
</html>