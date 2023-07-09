<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Registro Datos</title>
</head>

<body>
    <div class="container">
        <div class="usuario-form">

            <h1>Crear Usuario</h1>

            <form action="insert_user.php" method="POST">

                <input type="text" name="Nombre" placeholder="Nombre">
                <input type="text" name="Apellido" placeholder="Apellidos">
                <input type="password" name="Contraseña" placeholder="Password">
                <input type="email" name="Email" placeholder="Email">

                <input type="submit" value="Agregar">

                <th><a href="index.php">Regresar al inicio</a></th>
            </form>
        </div>
    </div>
</body>

</html>