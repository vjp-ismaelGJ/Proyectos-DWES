<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de todos los proyectos PHP</title>
</head>
<body>
    <h1>Lista de proyectos</h1>
    <ul>
        <?php
            // Carpeta que quieres listar (la actual)
            $dir = __DIR__; // Esto apunta a la carpeta donde está index.php

            // Escanea todos los archivos y carpetas
            $archivos = scandir($dir);

            // Recorremos todo
            foreach($archivos as $archivo){
                // Ignorar "." y ".."
                if($archivo != "." && $archivo != ".."){
                    // Mostrar solo archivos PHP y carpetas
                    if(is_dir($archivo) || pathinfo($archivo, PATHINFO_EXTENSION) === 'php'){
                        echo "<li><a href=\"$archivo\">$archivo</a></li>";
                    }
                }
            }
        ?>
    </ul>
</body>
</html>