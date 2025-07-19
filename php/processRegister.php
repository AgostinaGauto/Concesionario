<?php
include("../php/connection.php");

$user= $_POST['user'];
$pass= $_POST['pass'];

$sql= "INSERT INTO usuario (user, pass) VALUES ('$user', '$pass')";
$result= mysqli_query($connection, $sql);

if($result){
    echo "Usuario registrado con exito.";
    echo "<br><a href= '../pages/login.html'>Volver</a>";

}else{
    echo "Error: ".mysqli_error($connection);
    echo "<br><a href= '../pages/login.html'>Volver</a>";
}
?>