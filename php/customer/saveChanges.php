<?php
include("../connection.php");

$cod_cliente= $_POST['cod_cliente'];
$nomyape= $_POST['nomyape'];
$direccion= $_POST['direccion'];
$ciudad= $_POST['ciudad'];
$telefono= $_POST['telefono'];
$fecha_alta= $_POST['fecha_alta'];

$sql= "UPDATE cliente SET nomyape= '$nomyape', direccion= '$direccion', ciudad= '$ciudad', 
telefono= '$telefono', fecha_alta= '$fecha_alta' WHERE cod_cliente= '$cod_cliente'";
$result= mysqli_query($connection, $sql);

if($result){
    echo "Se ha actualizado los datos del cliente.";
    echo "<br><a href= '../../pages/menu.html'>Volver</a>";

}else{
    echo "Error: ".mysqli_error($connection);
    echo "<br><a href= '../../pages/menu.html'>Volver</a>";
}
?>