<?php
include("../connection.php");

$fingreso= $_POST['fingreso'];
$fegreso= $_POST['fegreso'];
$estado= $_POST['estado'];
$cambio_filtro= $_POST['cambio_filtro'];
$cambio_aceite= $_POST['cambio_aceite'];
$cambio_freno= $_POST['cambio_freno'];
$descripcion= $_POST['descripcion'];
$cod_auto= $_POST['cod_auto'];

$sql= "INSERT INTO revision(fingreso, fegreso, estado, cambio_filtro, cambio_aceite, cambio_freno,
descripcion, cod_auto) VALUES('$fingreso', '$fegreso', '$estado', '$cambio_filtro', '$cambio_aceite',
'$cambio_freno', '$descripcion', '$cod_auto')";
$result= mysqli_query($connection, $sql);

if($result){
    echo "Se ha registrado la revisión.";
    echo "<br><a href= '../../pages/menu.html'>Volver</a>";

}else{
    echo "Error: ".mysqli_error($connection);
    echo "<br><a href= '../../pages/menu.html'>Volver</a>";
}

?>