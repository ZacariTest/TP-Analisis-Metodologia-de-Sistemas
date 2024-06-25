<?php
session_start();
$loggeado = isset($_SESSION['nombre_usuario']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body class="flex margin0">
    <header class="blanco flex flexwrap">
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="Logo de la Empresa" width="75" height="50"></a>
        </div>
        <nav>
            <ul class="flex margin0">
                <li><a class="blanco deconone pad0" href="index.php"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a class="blanco deconone pad0" href="ranking.php"><i class="fa-solid fa-ranking-star"></i>
                        Ranking</a></li>
                <li><a class="blanco deconone pad0" href="tienda.php"><i class="fa-solid fa-shop"></i> Tienda</a></li>
            </ul>
        </nav>
        <div class="login flex flexwrap">
            <?php if (!$loggeado): ?>
            <a href="registro.php">
                    <p class="linea blanco derecho">Registrarse</p>
                </a>
            <a href="login.php">
                    <p class="blanco linea derechom marl2em">Login</p>
                </a>
            <?php else: ?>
            <p class="blanco linea derecho">Nivel: <?php echo $_SESSION['nivel_usuario']; ?></p>
            <p class="blanco linea derecho marl2em"><?php echo $_SESSION['nombre_usuario']; ?></p>
            <p class="marl2em"><a href="logout.php " class="blanco linea derecho">Logout</a></p>

            <?php endif ?>
        </div>
    </header>
</body>

</html>