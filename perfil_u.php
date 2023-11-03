<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Perfil de Usuario</h1>
    </header>
    <main>
        <section class="user-profile">
            <?php
            // Simulación de datos del usuario (esto debería provenir de tu base de datos)
            $nombre = "Juan Pérez";
            $correo = "juan@example.com";
            $telefono = "123-456-7890";
            ?>

            <h2>Información del Usuario</h2>
            <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
            <p><strong>Correo Electrónico:</strong> <?php echo $correo; ?></p>
            <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>

            <a href="editar_perfil.php">Editar Perfil</a>
        </section>
    </main>
    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>
