<?php
include("../connection.php");

$nomyape= $_POST['nomyape'];
$direccion= $_POST['direccion'];
$ciudad= $_POST['ciudad'];
$telefono= $_POST['telefono'];
$fecha_alta= $_POST['fecha_alta'];

$sql= "INSERT INTO cliente(nomyape, direccion, ciudad, telefono, fecha_alta)
VALUES('$nomyape', '$direccion', '$ciudad', '$telefono', '$fecha_alta')";
$result= mysqli_query($connection, $sql);

if($result){
    echo "Se ha registrado el cliente con exito";
    echo "<br><a href= '../../pages/menu.html'>Volver</a>";

}else{
    echo "Error: ".mysqli_error($connection);
    echo "<br><a href= '../../pages/menu.html'>Volver</a>";
}

?>