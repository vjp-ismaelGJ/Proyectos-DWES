<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>Actividad 401 de Ismael Gil Jiménez</title>
</head>
<body>
    <!-- Pre para que el \n funcione en el php -->
    <pre>
        <?php 

        // 401server.php: igual que el ejemplo visto en los apuntes, muestra los valores de $_SERVER al ejecutar un script en tu ordenador.
        // Prueba a pasarle parámetros por GET (y a no pasarle ninguno).
        // Prepara un formulario (401post.html) que haga un envío por POST y compruébalo de nuevo.
        // Crea una página (401enlace.html) que tenga un enlace a 401server.php y comprueba el valor de HTTP_REFERER.


        // Valores $_SERVER
        echo "=== Información del servidor ===\n";
        echo "PHP_SELF: " . $_SERVER["PHP_SELF"] . "\n";
        echo "SERVER_SOFTWARE: " . $_SERVER["SERVER_SOFTWARE"] . "\n";
        echo "SERVER_NAME: " . $_SERVER["SERVER_NAME"] . "\n";

        echo "\n=== Información de la petición ===\n";
        echo "REQUEST_METHOD: " . $_SERVER["REQUEST_METHOD"] . "\n";
        echo "REQUEST_URI: " . $_SERVER["REQUEST_URI"] . "\n";
        echo "QUERY_STRING: " . $_SERVER["QUERY_STRING"] . "\n";

        echo "\n=== Cabeceras HTTP ===\n";
        echo "HTTP_USER_AGENT: " . $_SERVER["HTTP_USER_AGENT"] . "\n";

        if (isset($_SERVER["HTTP_REFERER"])) {
            echo "HTTP_REFERER: " . $_SERVER["HTTP_REFERER"] . "\n";
        } else {
            echo "HTTP_REFERER: (no hay valor, acceso directo)\n";
        }

        echo "\n=== Cliente ===\n";
        echo "REMOTE_ADDR: " . $_SERVER["REMOTE_ADDR"] . "\n";
        echo "REMOTE_HOST: " . gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n";

        echo "\n=== Parámetros GET ===\n";
        print_r($_GET);

        echo "\n=== Parámetros POST ===\n";
        print_r($_POST);

        // Para probar GET añadir esto a la URL ?nombre=Ismael&modulo=DWES
        ?>        
    </pre>
</body>
</html>
