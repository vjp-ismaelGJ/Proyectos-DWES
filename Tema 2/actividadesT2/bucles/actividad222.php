<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title></title>
</head>
<body>
    <!-- 222potencia.php: A partir de una base y exponente, mediante la acumulación de productos, calcula la potencia utilizando la instrucción for.

        222potenciaWhile.php: Reescribe el ejercicio anterior haciendo uso sólo de while.
        222potenciaDoWhile.php: Reescribe el ejercicio anterior haciendo uso sólo de do-while. -->

    <?php 
    // Comentar lo que no se vaya a utilizar, si se usa el for también comentar la variable $i

    // Variables
    $base = 2;
    $exponente = 3;
    $potencia = 1;
    $i = 0;
    
    for ($i; $i < $exponente; $i++) { 
        $potencia *= $base;
    }
    
    echo "La potencia con base ".$base." y exponente ".$exponente." es ".$potencia.".";

    while ($i < $exponente) {
        $potencia *= $base;
        $i++;
    }

    echo "La potencia con base ".$base." y exponente ".$exponente." es ".$potencia.".";

    
    do {
        $potencia *= $base;
        $i++;
    } while ($i < $exponente);
    
    echo "La potencia con base ".$base." y exponente ".$exponente." es ".$potencia.".";

    ?>
</body>
</html>