<?php
include("../connection.php");

$sql= "SELECT * FROM revision";
$result= mysqli_query($connection, $sql);
$amount= mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar revisiones</title>
</head>
<body>
    <h1>Listado de revisiones</h1>

    <?php if($amount >= 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Fecha de ingreso</th>
                    <th>Fecha de egreso</th>
                    <th>Estado</th>
                    <th>Cambio filtro</th>
                    <th>Cambio aceite</th>
                    <th>Cambio freno</th>
                    <th>Descripción</th>
                    <th>Código auto</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while($revision= mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $revision['cod_revision'] ?></td>
                        <td><?php echo $revision['fingreso'] ?></td>
                        <td><?php echo $revision['fegreso'] ?></td>
                        <td><?php echo $revision['estado'] ?></td>
                        <td><?php echo $revision['cambio_filtro'] ?></td>
                        <td><?php echo $revision['cambio_aceite'] ?></td>
                        <td><?php echo $revision['cambio_freno'] ?></td>
                        <td><?php echo $revision['descripcion'] ?></td>
                        <td><?php echo $revision['cod_auto'] ?></td>
                        <td><a href="../revision.php/modifyRevision.php?cod_revision=<?php echo $revision['cod_revision'] ?>">Modificar</a></td>
                        <td><a href="../revision.php/deleteRevision.php?cod_revision=<?php echo $revision['cod_revision'] ?>">Eliminar</a></td>
                    </tr>
                    <?php endwhile ?>
            </tbody>
        </table><br>

    <?php endif ?>
    <a href="../../pages/menu.html">Volver</a>
</body>
</html>