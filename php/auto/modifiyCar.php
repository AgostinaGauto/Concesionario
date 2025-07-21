<?php
include("../connection.php");

$cod_auto= $_GET['cod_auto'];
$sql= "SELECT * FROM autos WHERE cod_auto= '$cod_auto'";
$result= mysqli_query($connection, $sql);
$car= mysqli_fetch_assoc($result);

$sql= "SELECT * FROM cliente";
$result2= mysqli_query($connection, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar auto</title>
</head>
<body>
    <h1>Actualizar auto</h1>

    <form action="../auto/saveChanges.php" method="post">
        <input type="hidden" name="cod_auto" value="<?php echo $car['cod_auto'] ?>">

        <label>Marca:</label>
        <input type="text" name="marca" value="<?php echo $car['marca'] ?>"><br><br>

        <label>Modelo:</label>
        <input type="text" name="modelo" value="<?php echo $car['modelo'] ?>"><br><br>

        <label>Color:</label>
        <input type="text" name="color" value="<?php echo $car['color'] ?>"><br><br>

        <label>Precio de venta:</label>
        <input type="number" name="pventa" value="<?php echo $car['pventa'] ?>"><br><br>

        <label>Cliente:</label>
        <select name="cod_cliente">
            <option value= "<?php echo $car['cod_cliente'] ?>">
                <?php while($customer= mysqli_fetch_assoc($result2)){
                    echo "<option value= {$customer['cod_cliente']}>{$customer['nomyape']}</option>";

                } ?>
            </option>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form><br>

    <a href="../auto/carList.php">Volver</a>
</body>
</html>