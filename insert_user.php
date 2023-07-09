<?php
include("connection.php");
$con = connection();

$Id = null;
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Contraseña = $_POST['Contraseña'];
$Email = $_POST['Email'];

$hashedPassword = Password_hash($Contraseña, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario VALUES('$Id','$Nombre','$Apellido','$Contraseña','$Email')";
$query = mysqli_query($con, $sql);

if ($query) {
    echo '
    <script>
        alert("Usuario registrado exitosamente");
        window.location = "mostrar_user.php";
    </script>
';
} else {
    echo "Error al registrar el usuario: " . mysqli_error($conexion);
}

mysqli_close($con);
?>