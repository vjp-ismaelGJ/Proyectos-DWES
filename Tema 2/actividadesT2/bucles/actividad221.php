<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>221 Suma 110</title>
</head>
<body>
    <!-- 221suma110.php: Escribe un programa que sume los números del 1 al 10. -->

    <?php
    $suma = 0;
    
    for ($i=0; $i <= 10; $i++) { 
        $suma += $i;
    }

    echo "La suma de los número del 1 al 10 es ".$suma.". ";
    
    ?>


</body>
</html>