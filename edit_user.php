<?php

include("connection.php");
$con = connection();

$Id=$_POST["Id"];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Contraseña = $_POST['Contraseña'];
$Email = $_POST['Email'];

$sql="UPDATE usuario SET Nombre='$Nombre', Apellido='$Apellido', Contraseña='$Contraseña', Email='$Email' WHERE Id='$Id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mostrar_usuario_crud");
}
?>