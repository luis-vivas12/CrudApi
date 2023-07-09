<?php
include("connection.php");
$con = connection();

// Obtener los datos del formulario
$Contraseña = $_POST['Contraseña'];
$Email = $_POST['Email'];

$query = mysqli_query($con, "SELECT * FROM usuario WHERE Email = '$Email' and Contraseña ='$Contraseña'");


if (mysqli_num_rows($query) > 0) {

    $_SESSION['usuario'] = $Email;
    header("Location: mostrar_user.php");
    exit;
} else {
    // Contraseña incorrecta
    echo '
        <script>
        alert ("UPS Problemas!! Porfavor Verifique que esten correctos los datos");
        window.location ="index.php";
        </script>
        ';
}
?>