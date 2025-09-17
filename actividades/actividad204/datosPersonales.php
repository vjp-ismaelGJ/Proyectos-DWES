<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title></title>
</head>
<body>
    <?php 
        // Recoger datos del formulario usando GET
        $nombre = $_GET["nombre"];
        $apellido1 = $_GET["apellido1"];
        $apellido2 = $_GET["apellido2"];
        $email = $_GET["email"];
        $nacimiento = ($_GET["nacimiento"]);
        $telefono = $_GET["telefono"];   
    ?>
    <table border="1">
	<tbody>
		<tr>
            <td>Nombre</td>
			<td><?= $nombre ?></td>
		</tr>
		<tr>
            <td>Apellidos</td>
			<td><?= $apellido1." ".$apellido2 ?></td>
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