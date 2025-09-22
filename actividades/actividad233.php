<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>233sexos</title>
</head>
<body>
    <!-- 233sexos.php: Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los valores almacenando el resultado en un array asociativo ['M' => 44, 'F' => 66] (no utilices variables para contar las M o las F). Finalmente, muestra el resultado por pantalla -->
    
    <?php 
    $sexos = [];
    for ($i = 0; $i < 100; $i++) {
        $sexos[] = rand(0,1) ? "M" : "F";
    }

    print_r($sexos);

    $contador = ["M" => 0, "F" => 0];
    foreach ($sexos as $sex) {
        $contador[$sex]++;
    }

    echo "<h3>Resultados</h3>";
    echo "<p>Masculino: " . $contador["M"] . "</p>";
    echo "<p>Femenino: " . $contador["F"] . "</p>";
    ?>
    
</body>
</html>