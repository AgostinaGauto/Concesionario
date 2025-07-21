<?php
include("../connection.php");

$cod_auto= $_GET['cod_auto'];
$sql= "SELECT * FROM revision WHERE cod_auto= '$cod_auto'";
$result= mysqli_query($connection, $sql);
$amount= mysqli_num_rows($result);

if($amount >= 1){
    echo "No se puede eliminar un auto asociado a una revision.";
    echo "<br><a href= '../auto/carList.php'>Volver</a>";

}else{
    $sql= "DELETE FROM autos WHERE cod_auto= '$cod_auto'";
    $result2= mysqli_query($connection, $sql);

    if($result2){
        echo "Se ha aliminado el auto.";
        echo "<br><a href= '../auto/carList.php'>Volver</a>";

    }else{
        echo "Error: ".mysqli_error($connection);
        echo "<br><a href= '../auto/carList.php'>Volver</a>";
    }
}

?>