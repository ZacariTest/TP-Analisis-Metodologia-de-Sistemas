<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="flex margin0">
<header class="blanco flex flexwrap">
    <div class="logo">
    <img src="img/logo.png" alt="Logo de la Empresa" width="75" height="50">

    </div>
    <nav>
        <ul class="flex margin0">
            <li><a class="blanco deconone pad0"href="#">Ranking</a></li>
            <li><a class="blanco deconone pad0"href="#">Tienda</a></li>
            <li><a class="blanco deconone pad0"href="#">Sobre nosotros</a></li>
            <li><a class="blanco deconone pad0"href="#">Ayuda</a></li>
        </ul>
        </nav>
    <div class="login flex flexwrap">
        <?php if (isset($_SESSION['username'])): ?>
            <p>Bienvenido, <?php echo $_SESSION['username']; ?> <a href="logout.php">Cerrar sesión</a></p>
        <?php else: ?>        <?php endif; ?>
            </div>
    <div class =" margin0 blanco">
               <a class="blanco deconone pad0" href="#">Registrarse</a>
               <a class="blanco deconone pad0"href="#">Iniciar Sesión</a>

        </div>
</header>