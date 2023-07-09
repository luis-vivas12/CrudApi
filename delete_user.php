<?php

include("connection.php");
$con = connection();

$Id = $_GET["Id"];

$sql = "DELETE FROM usuario WHERE Id='$Id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: mostrar_user.php");
} else {
}
?>