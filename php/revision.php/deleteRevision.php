<?php
include("../connection.php");

$cod_revision= $_GET['cod_revision'];
$sql= "DELETE FROM revision WHERE cod_revision= '$cod_revision'";
$result= mysqli_query($connection, $sql);

if($result){
    echo "Se ha eliminado la revisión.";
    echo "<br><a href= '../../pages/menu.html'>Volver</a>";

}else{
    echo "Error: ".mysqli_error($connection);
    echo "<br><a href= '../../pages/menu.html'>Volver</a>";
}
?>