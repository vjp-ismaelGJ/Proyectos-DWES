<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>236personas</title>
</head>
<body>
    <!-- 236personas.php: Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas. Para ello, crea un array de personas, siendo cada persona un array asociativo: [ ['nombre'=>'Aitor', 'altura'=>182, 'email'=>'aitor@correo.com'],[…],… ] Posteriormente, recorre el array y muéstralo en una tabla HTML. -->
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