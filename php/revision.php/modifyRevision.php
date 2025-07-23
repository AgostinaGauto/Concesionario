<?php
include("../connection.php");

$cod_revision= $_GET['cod_revision'];
$sql= "SELECT * FROM revision WHERE cod_revision= '$cod_revision'";
$result= mysqli_query($connection, $sql);
$revision= mysqli_fetch_assoc($result);

$sql= "SELECT * FROM autos";
$result2= mysqli_query($connection, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar revisión</title>
</head>
<body>
    <h1>Actualizar revisión</h1>

    <form action="../revision.php/saveChanges.php" method="post">
        <input type="hidden" name="cod_revision" value="<?php echo $revision['cod_revision']?>">

        <label>Fecha de ingreso:</label>
        <input type="date" name="fingreso" value="<?php echo $revision['fingreso'] ?>"><br><br>

        <label>Fecha de egreso:</label>
        <input type="date" name="fegreso" value="<?php echo $revision['fegreso'] ?>"><br><br>

        <label>Estado:</label>
        <input type="text" name="estado" value= "<?php echo $revision['estado'] ?>"><br><br>

        <label>Cambio filtro:</label>
        <input type="number" name="cambio_filtro" value="<?php echo $revision['cambio_filtro'] ?>"><br><br>

        <label>Cambio aceite:</label>
        <input type="number" name="cambio_aceite" value="<?php echo $revision['cambio_aceite'] ?>"><br><br>

        <label>Cambio freno:</label>
        <input type="number" name="cambio_freno" value="<?php echo $revision['cambio_freno'] ?>"><br><br>

        <label>Descripción:</label>
        <input type="text" name="descripcion" value="<?php echo $revision['descripcion'] ?>"><br><br>

        <label>Código auto:</label>
        <select name="cod_auto">
            <option value="<?php echo $revision['cod_auto'] ?>">---Seleccione una opción---</option>
            <?php while($car= mysqli_fetch_assoc($result2)){
                echo "<option value= {$car['cod_auto']}>{$car['cod_auto']}</option>";
            } ?>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form><br>

    <a href="../revision.php/revisionList.php">Volver</a>
</body>
</html>