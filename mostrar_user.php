<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM usuario";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Mostrar Usuarios</title>
</head>

<body>

    <div class="container_m">
        <div class="usuario-table">

            <h1>Usuarios Registrados</h1>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>                      
                        <th>Password</th>
                        <th>Email</th>
                        <th colspan="2">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <th><?= $row['Id'] ?></th>
                            <th><?= $row['Nombre'] ?></th>
                            <th><?= $row['Apellido'] ?></th>
                            <th><?= $row['Contraseña'] ?></th>
                            <th><?= $row['Email'] ?></th>
                            <th><a href="update.php?Id=<?= $row['Id'] ?>" class="actions">Editar</a></th>
                            <th><a href="delete_user.php?Id=<?= $row['Id'] ?>" class="actions">Eliminar</a></th>


                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="index.php">Cerrar Sesion</a>
        </div>
    </div>
</body>

</html>