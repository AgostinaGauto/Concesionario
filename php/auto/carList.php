<?php
include("../connection.php");

$sql= "SELECT * FROM autos";
$result= mysqli_query($connection, $sql);
$amount= mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar autos</title>
</head>
<body>
    <h1>Listado de autos</h1>

    <?php if($amount >= 0): ?>

        <table border="1">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Precio de venta</th>
                    <th>Cliente</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while($car= mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $car['cod_auto'] ?></td>
                        <td><?php echo $car['marca'] ?></td>
                        <td><?php echo $car['modelo'] ?></td>
                        <td><?php echo $car['color'] ?></td>
                        <td><?php echo $car['pventa'] ?></td>
                        <td><?php echo $car['cod_cliente'] ?></td>
                        <td><a href="../auto/modifiyCar.php?cod_auto=<?php echo $car['cod_auto'] ?>">Modificar</a></td>
                        <td><a href="../auto/deleteCar.php?cod_auto=<?php echo $car['cod_auto'] ?>">Eliminar</a></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table><br>
    <?php endif ?>
    <a href="../../pages/menu.html">Volver</a>
</body>
</html>