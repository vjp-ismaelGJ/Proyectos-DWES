<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title></title>
</head>
<body>
    <!-- 231bola8.php: A partir del anterior, crea un programa que muestre la pregunta recibida y genere una respuesta de manera aleatoria entre un conjunto de respuestas predefinidas, almacenadas en un array: Si, no, quizás, claro que sí, por supuesto que no, no lo tengo claro, seguro, yo diría que sí, ni de coña, etc... -->
    <?php 
    $pregunta = $_GET['pregunta'];
    $respuestasArray = [
        "Invadir Constantinopla",
        "Hacer el pino en la mesa de tu abuela",
        "Jugar al Clash Royale",
        "Nada",
        "Devuelvanos el oro",
        "Hacer trompos enfrente a la DGT",
        "Rotundamente sí",
        "No",
        "24"
    ];

    // Elegir respuesta aleatoria del array correcto
    $respuestaAleatoria = $respuestasArray[array_rand($respuestasArray)];

    echo "Tu pregunta fue: ";
    echo "<p>\"$pregunta\"</p>";

    echo "Creed Bratton dice:";
    echo "<p>$respuestaAleatoria</p>";
    ?>
</body>
</html>