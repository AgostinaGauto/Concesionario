<?php
include("../connection.php");

$sql= "SELECT * FROM cliente";
$result= mysqli_query($connection, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar auto</title>
</head>
<body>
    <h1>Registro del auto</h1>

    <form action="../auto/processCarRegistration.php" method="post">
        <label>Marca:</label>
        <input type="text" name="marca" required><br><br>

        <label>Modelo:</label>
        <input type="text" name="modelo" required><br><br>

        <label>Color:</label>
        <input type="text" name="color" required><br><br>

        <label>Precio de venta:</label>
        <input type="number" name="pventa" required><br><br>

        <label>Cliente:</label>
        <select name="cod_cliente" required>
            <option value="">---Seleccione una opción---</option>
            <?php while($customer= mysqli_fetch_assoc($result)){
                echo "<option value= {$customer['cod_cliente']}>{$customer['nomyape']}</option>";
            } ?>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form><br>

    <a href="../../pages/menu.html">Volver</a>
</body>
</html>