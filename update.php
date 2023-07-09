<?php
include("connection.php");
$con = connection();

$id = $_GET['Id'];

$sql = "SELECT * FROM usuario WHERE Id='$Id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Actualizar Usuarios</title>

</head>

<body>
    <div class="container">

        <div class="usuario-form">

            <h1>Actualizar Usuario</h1>

            <form action="edit_user.php" method="POST">

                <input type="hidden" name="Id" value="<?= $row['Id'] ?>">
                <input type="text" name="Nombre" placeholder="Nombre" value="<?= $row['Nombre'] ?>">
                <input type="text" name="Apellido" placeholder="Apellidos" value="<?= $row['Apellido'] ?>">
                <input type="text" name="Contraseña" placeholder="Password" value="<?= $row['Contraseña'] ?>">
                <input type="text" name="Email" placeholder="Email" value="<?= $row['Email'] ?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </div>
</body>

</html>