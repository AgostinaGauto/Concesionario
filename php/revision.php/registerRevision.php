<?php
include("../connection.php");

$sql= "SELECT * FROM autos";
$result= mysqli_query($connection, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar revisión</title>
</head>
<body>
    <h1>Registro de la revisión</h1>

    <form action="../revision.php/processRevision.php" method="post">
        <label>Fecha de ingreso:</label>
        <input type="date" name="fingreso" required><br><br>

        <label>Fecha de egreso:</label>
        <input type="date" name="fegreso"><br><br>

        <label>Estado:</label>
        <input type="text" name="estado" required><br><br>

        <label>Cambio filtro:</label>
        <input type="number" name="cambio_filtro" required><br><br>

        <label>Cambio aceite:</label>
        <input type="number" name="cambio_aceite" required><br><br>

        <label>Cambio freno:</label>
        <input type="number" name="cambio_freno" required><br><br>

        <label>Descripción:</label>
        <input type="text" name="descripcion" required><br><br>

        <label>Código auto:</label>
        <select name="cod_auto">
            <option value="">---Selecciona una opción---</option>
            <?php while($car= mysqli_fetch_assoc($result)){
                echo "<option value= {$car['cod_auto']}>{$car['cod_auto']}</option>";

            } ?>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form><br>

    <a href= '../../pages/menu.html'>Volver</a>
</body>
</html>