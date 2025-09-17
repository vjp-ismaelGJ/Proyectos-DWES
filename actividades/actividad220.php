<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>220 Pares 050</title>
</head>
<body>
    <?php 
    // 220pares050.php: Escribe un programa que muestre los números pares del 0 al 50 (dentro de una lista desordenada).

    echo "Números pares del 0 al 50: ";
    echo "<ul>";
    for ($i = 0; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            echo "<li>$i</li>";
        }
    }
    echo "</ul>";

    ?>
</body>
</html>




