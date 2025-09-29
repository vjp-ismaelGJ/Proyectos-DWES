<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title> 250fraseImpares</title>
</head>
<body>
    <!-- 250fraseImpares.php: Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares. -->
    <?php
    $frase = "kUhnaas jpsomlwlha..";
    $fraseNueva = "";
    
    for ($i=0; $i < (strlen($frase)); $i++) { 
        if ($i % 2 != 0) {
            $fraseNueva .= $frase[$i];
        }
    }

    echo $fraseNueva;
    ?>
</body>
</html>