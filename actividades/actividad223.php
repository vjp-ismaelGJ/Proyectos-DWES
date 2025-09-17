<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="IsmaelGJ">
    <title>Actividad 223</title>
</head>
<body>
    <!-- 223tablaMultiplicar.php: Muestra dentro de una tabla HTML la tabla de multiplicar del numero que reciba como parámetro. Utiliza <thead> con sus respectivos <th> y <tbody> para dibujar la tabla. Por ejemplo: -->
        
    <?php 
    $numero = $_GET["numero"];
    ?>

    <table>
        <thead>
            <tr>
                <td><p>A</p></td>
                <td><p> * </p></td>
                <td><p>B</p></td>
                <td><p> = </p></td>
                <td><p>A*B</p></td>                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $numero ?></td>
                <td><p> * </p></td>
                <td>1</td>
                <td><p> = </p></td>
                <td><?= $numero*1 ?></td>
            </tr>
            <tr>
                <td><?= $numero ?></td>
                <td><p> * </p></td>
                <td>2</td>
                <td><p> = </p></td>
                <td><?= $numero*2 ?></td>
            </tr>
            <tr>
                <td><?= $numero ?></td>
                <td><p> * </p></td>
                <td>3</td>
                <td><p> = </p></td>
                <td><?= $numero*3 ?></td>
            </tr>
            <tr>
                <td><?= $numero ?></td>
                <td><p> * </p></td>
                <td>4</td>
                <td><p> = </p></td>
                <td><?= $numero*4 ?></td>
            </tr>
            <tr>
                <td><?= $numero ?></td>
                <td><p> * </p></td>
                <td>5</td>
                <td><p> = </p></td>
                <td><?= $numero*5 ?></td>
            </tr>
            <tr>
                <td><?= $numero ?></td>
                <td><p> * </p></td>
                <td>6</td>
                <td><p> = </p></td>
                <td><?= $numero*6 ?></td>
            </tr>
            <tr>
                <td><?= $numero ?></td>
                <td><p> * </p></td>
                <td>7</td>
                <td><p> = </p></td>
                <td><?= $numero*7 ?></td>
            </tr>
            <tr>
                <td><?= $numero ?></td>
                <td><p> * </p></td>
                <td>8</td>
                <td><p> = </p></td>
                <td><?= $numero*8 ?></td>
            </tr>
            <tr>
                <td><?= $numero ?></td>
                <td><p> * </p></td>
                <td>9</td>
                <td><p> = </p></td>
                <td><?= $numero*9 ?></td>
            </tr>
            <tr>
                <td><?= $numero ?></td>
                <td><p> * </p></td>
                <td>10</td>
                <td><p> = </p></td>
                <td><?= $numero*10 ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>