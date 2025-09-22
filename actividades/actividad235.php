<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title></title>
</head>
<body>
    <!-- 235alturas.php: Mediante un array asociativo, almacena el nombre y la altura de 5 personas (nombre => altura). Posteriormente, recorre el array y muéstralo en una tabla HTML. Finalmente añade una última fila a la tabla con la altura media. -->
    <?php 
    $alturas = [
    "Juan" => 180,
    "Federico" => 174,
    "Aurelio" => 185,
    "Fran García" => 170,
    "Natalia" => 155];

    $media = array_sum($alturas) / count($alturas);    


    // Mostrar tabla HTML
    echo "<table border='1' style='border-collapse: collapse;'>";
    echo "<tr><th>Nombre</th><th>Altura (cm)</th></tr>";

    foreach ($alturas as $nombre => $altura) {
        echo "<tr><td>$nombre</td><td>$altura</td></tr>";
    }

    // Fila de la altura media
    echo "<tr><td><strong>Media</strong></td><td>$media</td></tr>";

    echo "</table>";
    ?>
</body>
</html>