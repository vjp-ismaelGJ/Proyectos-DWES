<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>Actividad 203</title>
</head>
<body>
    
    <?php
    // 203datosPersonales.php: Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido, email, año de nacimiento y teléfono. Luego muéstralos por pantalla dentro de una tabla.

    // Variables
    $nombre = "Ismael";
    $primerApellido = "Gil";
    $segundoApellido = "Jiménez";
    $email = "igilj04@vjp.es";
    $nacimiento = "2003";
    $telefono = "777 845 123";
    ?>

    <table border="1">
	<tbody>
		<tr>
            <td>Nombre</td>
			<td><?= $nombre ?></td>
		</tr>
		<tr>
            <td>Apellidos</td>
			<td><?= $primerApellido. " ".$segundoApellido ?></td>
		</tr>
        <tr>
            <td>Email</td>
			<td><?= $email ?></td>
		</tr>
        <tr>
            <td>Nacimiento</td>
			<td><?= $nacimiento ?></td>
		</tr>
        <tr>
            <td>Teléfono</td>
			<td><?= $telefono ?></td>
		</tr>
	</tbody>
    </table>

</body>
</html>


