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
    $cantidad = isset($_GET['cantidad']) ? intval($_GET['cantidad']) : 0;

    if ($cantidad < 1) {
        echo "Cantidad inválida.";
        exit;
    }

    $suma = 0;

    for ($i = 1; $i <= $cantidad; $i++) {
        $numero = isset($_GET["num$i"]) ? floatval($_GET["num$i"]) : 0;
        $suma += $numero;
    }

    echo "<h2>La suma de los $cantidad números es: $suma</h2>";
    ?>
</body>
</html>