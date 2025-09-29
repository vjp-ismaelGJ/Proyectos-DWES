<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>240arrayPar</title>
</head>
<body>
    <!-- 240arrayPar.php: Crea las siguientes funciones:

    Una función que averigüe si un número es par: esPar(int $num): bool
    Una función que devuelva un array de tamaño $tam con números aleatorios comprendido entre $min y $max : arrayAleatorio(int $tam, int $min, int $max) : array
    Una función que reciba un $array por referencia y devuelva la cantidad de números pares que hay almacenados: arrayPares(array &$array): int -->
    <?php 

    function esPar(int $num): bool {
    return $num % 2 === 0;
    }

    function arrayAleatorio($tam,$max,$min): array{
        $array = [];
        for ($i = 0; $i < $tam; $i++) {
            $array[] = rand($min,$max);
        }
        return $array;
    }

    function arrayPares(array &$array): int {
        $contador = 0;

        foreach ($array as $num) {
            if (esPar($num)) {
                $contador++;
            }
        }
        return $contador;
    }

    $numeros = arrayAleatorio(10, 1, 50);
    echo "<h3>Array generado:</h3>";
    print_r($numeros);

    $pares = arrayPares($numeros);
    echo "<p>Hay <strong>$pares</strong> números pares en el array.</p>";
    
    ?>
</body>
</html>