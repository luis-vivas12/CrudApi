<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Inicio Sesion</title>

</head>

<body>
    <div class="container">
        <div class="usuario-form">

            <h1>Iniciar Sesion</h1>

            <form action="login.php" method="POST">

                <input type="Email" name="Email" placeholder="Email">
                <input type="Contraseña" name="Contraseña" placeholder="Contraseña">

                <input type="submit" value="Iniciar Sesión">
                <p><a class="no-cuenta" href="register.php">¿Aun no tiene una cuenta?</a></p>
            </form>
        </div>
    </div>
</body>

</html>