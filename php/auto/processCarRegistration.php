<?php
include("../connection.php");

$marca= $_POST['marca'];
$modelo= $_POST['modelo'];
$color= $_POST['color'];
$pventa= $_POST['pventa'];
$cod_cliente= $_POST['cod_cliente'];

$sql= "INSERT INTO autos(marca, modelo, color, pventa, cod_cliente)
VALUES('$marca', '$modelo', '$color', '$pventa', '$cod_cliente')";
$result= mysqli_query($connection, $sql);

if($result){
    echo "Se ha registrado el auto con exito.";
    echo "<br><a href= '../../pages/menu.html'>Volver</a>";

}else{
    echo "Error: ".mysqli_error($connection);
    echo "<br><a href= '../../pages/menu.html'>Volver</a>";
}
?>