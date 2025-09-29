<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title></title>
</head>
<body>
    <!-- 241parametrosVariables.php: Crea las siguientes funciones:

    Una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor(): int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max().
    Una función que concatene todos los parámetros recibidos separándolos con un espacio: function concatenar(...$palabras) : string. Utiliza el operador .... -->

    <?php 
    
    function mayor(): int {
        $numeros = func_get_args();
        $max = $numeros[0];

        foreach ($numeros as $num) {
            if ($num > $max) {
                $max = $num;
            }
        }
        return $max;
    }
    
    echo "El mayor es " . mayor(4, 20, 12, 5, 8, 4, 19, 10, 2);
    
    
    function concatenar(...$palabras): String {
        $espacio = " ";
        foreach ($palabras as $p) {
            $espacio .= $p;
        }
        return $espacio;
    }
    
    echo "<br>Concatenado: " . concatenar("Charizard", "Bastoise","Venasaur");
    
    
    
    ?>
</body>
</html>