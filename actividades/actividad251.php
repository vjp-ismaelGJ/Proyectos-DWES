<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>251vocales</title>
    <style>
    body {
        padding: 50px;
    }
    button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
    </style>    
</head>

<body>
    <!-- 251vocales.php: A partir de una frase, devuelve la cantidad de cada una de las vocales, y el total de ellas. -->
    <?php 
    $frase = "Real Madrid - Atlético de Madrid, este finde semana.";
    $vocales = ["a","e","i","o","u"];
    $contador = [
    "a" => 0,
    "e" => 0,
    "i" => 0,
    "o" => 0,
    "u" => 0
    ];

    // Recorrer cada carácter de la frase
    for ($i = 0; $i < strlen($frase); $i++) {
        $car = strtolower($frase[$i]); // normalizamos a minúsculas
        if (in_array($car, $vocales)) { // si es una vocal
            $contador[$car]++;           // incrementamos el contador
        }
    }

    // Calcular total de vocales
    $total = array_sum($contador);

    // Mostrar resultados
    echo "<h3>Conteo de vocales:</h3>";
    foreach ($contador as $vocal => $cantidad) {
        echo "<p>$vocal: $cantidad</p>";
    }

    echo "<p><strong>Total de vocales: $total</strong></p>";
    
    ?>
    <button onclick="cambiarFondo()">Cambiar fondo</button>

    <script>
        function cambiarFondo() {
        // Genera un color aleatorio en formato hexadecimal
        const colorAleatorio = '#' + Math.floor(Math.random()*16777215).toString(16);
        document.body.style.color = colorAleatorio;
        }
    </script>
</body>
</html>