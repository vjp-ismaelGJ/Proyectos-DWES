<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>220 Pares 050 B</title>
</head>
<body>
    <?php 
    // 220pares050.php: Escribe un programa que muestre los números pares del 0 al 50 (dentro de una lista desordenada).

    $inicio = $_GET["inicio"];
    $fin = $_GET["fin"];

    echo "<h2>Números pares del $inicio al $fin</h2>";
    echo "<ul>";

    for ($i = $inicio; $i <= $fin; $i++) {
        if ($i % 2 == 0) {
            echo "<li>$i</li>";
        }
    }

    echo "</ul>";

    ?>
</body>
</html>
