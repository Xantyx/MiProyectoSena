    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="estilos/stile.css">
        <link href="config/conexion.php">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Citas I.E.D. Jorge Isaacs</title>

    </head>
    <body>
        <h2>¡Bienvenido al programa de agendacion de citas del I.E.D. Jorge Isaacs! </h2>
    <div class="container" style="margin-top: 1%;">
        <form method="POST" action="">
            <p>Por favor, diligencie todos los campos de este formulario.</p>
        <div class= "form">
            <label for="Doc">Documento de Identidad</label>
            <input class="input" inputmode="numeric" type="number" name="Doc" placeholder="Ingrese su Documento de identidad" required>
        </div>
        
        <div class= "form">
            <label for="Name">Nombre</label>
            <input class="input" type="text" name="Name" placeholder="Ingrese su nombre"  required>
        </div>
        
        <div class= "form">
            <label for="LastName">Apellido</label>
            <input class="input" type="text" name="LastName" placeholder="Ingrese su apellido"  required>
        </div>
        
        <div class= "form">
            <label for="Correo">Correo</label>
            <input class="input" type="email" name="Correo" placeholder="Ingrese su correo"  required>
        </div>
        <div class= "form">
            <label for="Curso">Telefono</label>
            <input class="input" inputmode="numeric" type="number" name="Tel" placeholder="Ingrese su telefono"  required>
        </div>
        <div class="form">
            <label for="birthday">Fecha de nacimiento</label>
            <input class="input" type="date" id="birthday" name="birthday">
        </div>
        <div class= "form">
            <label for="Correo">Contraseña</label>
            <input class="input" type="password" name="password" placeholder="Cree una contraseña"  required>
        </div>
        <div class="form">
            <input class="btn" type="submit" value="Enviar">
        </div>
        </form>
        <?php
        if ($_POST) {
            $doc = $_POST['Doc'];
            $nom = $_POST['Name'];
            $ape = $_POST['LastName'];
            $correo = $_POST['Correo'];
            $birthday = $_POST['birthday'];
            $tel = $_POST['Tel'];
            $pass = $_POST['password'];

            require_once('config/conexion.php');

            $sql = 'INSERT INTO usuarios (documento, nombre, apellido, correo, fe_nac, telefono, contrasena) VALUES (?, ?, ?, ?, ?, ?, ?)';

            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("sssssss", $doc, $nom, $ape, $correo, $birthday, $tel, $pass);

            if ($stmt->execute()) {
                echo "<script> alert('Registrado con éxito');</script>";
            } else {
                echo "<script> alert('Error al registrar');</script>";
            }

            $stmt->close();
            $conexion->close();
        }
        ?>
    </div>
    </body>
    </html>