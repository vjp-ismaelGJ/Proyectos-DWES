<?php
$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$url = $_POST['url'] ?? '';
$sexo = $_POST['sexo'] ?? '';
$convivientes = $_POST['convivientes'] ?? '';
$aficiones = $_POST['aficiones'] ?? [];
$menus = $_POST['menus'] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>Tabla del ejericcio 402</title>
</head>
<body>
    <h2>Resumen del formulario</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tbody>
            <tr>
                <th>Nombre</th>
                <td><?= $nombre ?? '' ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $email ?? '' ?></td>
            </tr>
            <tr>
                <th>URL</th>
                <td><?= $url ?? '' ?></td>
            </tr>
            <tr>
                <th>Sexo</th>
                <td><?= $sexo ?? '' ?></td>
            </tr>
            <tr>
                <th>Convivientes</th>
                <td><?= $convivientes ?? '' ?></td>
            </tr>
            <tr>
                <th>Aficiones</th>
                <td>
                    <?php 
                    if(!empty($aficiones)){
                        echo implode(", ", $aficiones);
                    } else {
                        echo "Ninguna";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>Menús favoritos</th>
                <td>
                    <?php
                    if(!empty($menus)){
                        echo implode(", ", $menus);
                    } else {
                        echo "Ninguno";
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<?php 
// Mostrar los valores en tabla resumen









?>