<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>221 Suma 110 B</title>
</head>
<body>
    <!-- 221sumaAB.php: A partir del anterior, refactorizar para que funcione con inicio y fin. -->

    <?php
    $suma = 0;
    $inicio = $_GET["inicio"];
    $fin = $_GET["fin"];

    echo "<h2>Números pares del $inicio al $fin</h2>";
    echo "<ul>";    
    
    for ($i=$inicio; $i <= $fin; $i++) { 
        $suma += $i;
    }

    echo "La suma de los número del ".$inicio." al ".$fin." es ".$suma.". ";
    
    ?>


</body>
</html>