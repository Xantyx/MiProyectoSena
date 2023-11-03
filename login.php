<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos/style1.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar sesión</h2>
        <?php
        include("config/conexion.php");
        include("config/controlador.php");
        ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password">
            </div>
            <input name="btn" type="submit" value="Ingresar" >
        </form>
    </div>
</body>
</html>
