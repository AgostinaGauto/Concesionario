<?php
include("../connection.php");

$cod_auto= $_POST['cod_auto'];
$marca= $_POST['marca'];
$modelo= $_POST['modelo'];
$color= $_POST['color'];
$pventa= $_POST['pventa'];
$cod_cliente= $_POST['cod_cliente'];

$sql= "UPDATE autos SET marca= '$marca', modelo= '$modelo', color= '$color',
pventa= '$pventa', cod_cliente= '$cod_cliente' WHERE cod_auto= '$cod_auto'";
$result= mysqli_query($connection, $sql);

if($result){
    echo "Se ha actualizado el auto con exito.";
    echo "<br><a href= '../auto/carList.php'>Volver</a>";

}else{
    echo "Error: ".mysqli_error($connection);
    echo "<br><a href= '../auto/carList.php'>Volver</a>";
}
?>